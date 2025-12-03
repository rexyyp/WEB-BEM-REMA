<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

class SitemapController extends Controller
{
    public function index()
    {
        // Cache sitemap for 1 hour to improve performance
        $sitemap = Cache::remember('sitemap_xml', 3600, function () {
            return $this->generateSitemap();
        });

        return response($sitemap, 200)
            ->header('Content-Type', 'text/xml; charset=UTF-8')
            ->header('X-Robots-Tag', 'noindex, follow');
    }

    private function generateSitemap()
    {
        // Get only published/active news articles
        $beritas = Berita::latest('tanggal')->get();

        $xml = new \DOMDocument('1.0', 'UTF-8');
        $xml->formatOutput = true;

        $urlset = $xml->createElement('urlset');
        $urlset->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        $urlset->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
        $urlset->setAttribute('xsi:schemaLocation', 'http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd');
        $xml->appendChild($urlset);

        // Homepage
        $this->addUrl($xml, $urlset, [
            'loc' => url('/'),
            'changefreq' => 'daily',
            'priority' => '1.0'
        ]);

        // Tentang page
        $this->addUrl($xml, $urlset, [
            'loc' => url('/tentang'),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ]);

        // Berita index
        $this->addUrl($xml, $urlset, [
            'loc' => url('/berita'),
            'changefreq' => 'daily',
            'priority' => '0.9'
        ]);

        // All berita articles
        foreach ($beritas as $berita) {
            $this->addUrl($xml, $urlset, [
                'loc' => route('berita.detail', $berita->slug),
                'lastmod' => $berita->updated_at->toW3cString(),
                'changefreq' => 'weekly',
                'priority' => '0.7'
            ]);
        }

        return $xml->saveXML();
    }

    private function addUrl($xml, $urlset, $data)
    {
        $url = $xml->createElement('url');

        foreach ($data as $key => $value) {
            $element = $xml->createElement($key, htmlspecialchars($value, ENT_XML1, 'UTF-8'));
            $url->appendChild($element);
        }

        $urlset->appendChild($url);
    }
}
