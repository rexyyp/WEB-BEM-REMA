<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BeritaController extends Controller
{
    /**
     * Display a listing of berita (frontend)
     */
    public function index(Request $request)
    {
        $query = Berita::query();

        // Sanitize search input
        if ($request->has('q') && $request->q) {
            $search = strip_tags($request->q);
            $search = htmlspecialchars($search, ENT_QUOTES, 'UTF-8');

            $query->where(function ($q) use ($search) {
                $q->where('judul', 'LIKE', "%{$search}%")
                    ->orWhere('konten', 'LIKE', "%{$search}%")
                    ->orWhere('author', 'LIKE', "%{$search}%");
            });
        }

        // Filter by kategori if provided
        if ($request->has('kategori') && $request->kategori) {
            $kategori = strip_tags($request->kategori);
            $query->where('kategori', $kategori);
        }

        // Get all beritas with pagination
        $beritas = $query->latest('tanggal')->latest('created_at')->paginate(9);

        // Cache featured news for 5 minutes
        $featuredNews = Cache::remember('berita.featured', 300, function () {
            return Berita::latest('tanggal')->limit(2)->get();
        });

        // Get unique categories for filter - only specific categories
        $categories = collect(['Rema Pers', 'Program Kerja']);

        return view('berita', compact('beritas', 'featuredNews', 'categories'));
    }

    /**
     * Display the specified berita detail
     */
    public function show($slug)
    {
        // Sanitize slug
        $slug = strip_tags($slug);

        // Cache berita for 10 minutes
        $berita = Cache::remember("berita.{$slug}", 600, function () use ($slug) {
            return Berita::where('slug', $slug)->firstOrFail();
        });

        // Increment views counter (don't cache this)
        $berita->incrementViews();

        // Cache related news
        $relatedNews = Cache::remember("berita.{$slug}.related", 600, function () use ($berita) {
            return Berita::where('kategori', $berita->kategori)
                ->where('id', '!=', $berita->id)
                ->latest('tanggal')
                ->limit(3)
                ->get();
        });

        // Cache latest news
        $latestNews = Cache::remember('berita.latest', 600, function () use ($berita) {
            return Berita::where('id', '!=', $berita->id)
                ->latest('tanggal')
                ->limit(3)
                ->get();
        });

        // SEO meta tags
        $seoData = [
            'title' => $berita->judul . ' - BEM REMA UPI',
            'description' => $berita->excerpt,
            'keywords' => $berita->kategori . ', BEM REMA UPI, Berita Kampus, ' . $berita->judul,
            'ogImage' => $berita->thumbnail_url,
            'ogType' => 'article',
            'canonical' => route('berita.detail', $berita->slug),
        ];

        return view('berita-detail', array_merge(compact('berita', 'relatedNews', 'latestNews'), $seoData));
    }
}
