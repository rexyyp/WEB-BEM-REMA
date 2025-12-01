<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest('tanggal')->get();

        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // Homepage
        $sitemap .= '<url>';
        $sitemap .= '<loc>' . url('/') . '</loc>';
        $sitemap .= '<changefreq>daily</changefreq>';
        $sitemap .= '<priority>1.0</priority>';
        $sitemap .= '</url>';

        // Tentang page
        $sitemap .= '<url>';
        $sitemap .= '<loc>' . url('/tentang') . '</loc>';
        $sitemap .= '<changefreq>monthly</changefreq>';
        $sitemap .= '<priority>0.8</priority>';
        $sitemap .= '</url>';

        // Berita index
        $sitemap .= '<url>';
        $sitemap .= '<loc>' . url('/berita') . '</loc>';
        $sitemap .= '<changefreq>daily</changefreq>';
        $sitemap .= '<priority>0.9</priority>';
        $sitemap .= '</url>';

        // All berita articles
        foreach ($beritas as $berita) {
            $sitemap .= '<url>';
            $sitemap .= '<loc>' . route('berita.detail', $berita->slug) . '</loc>';
            $sitemap .= '<lastmod>' . $berita->updated_at->toAtomString() . '</lastmod>';
            $sitemap .= '<changefreq>weekly</changefreq>';
            $sitemap .= '<priority>0.7</priority>';
            $sitemap .= '</url>';
        }

        $sitemap .= '</urlset>';

        return response($sitemap, 200)
            ->header('Content-Type', 'text/xml');
    }
}
