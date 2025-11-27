<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of berita (frontend)
     */
    public function index(Request $request)
    {
        $query = Berita::query();

        // Filter by kategori if provided
        if ($request->has('kategori') && $request->kategori) {
            $query->where('kategori', $request->kategori);
        }

        // Get all beritas with pagination
        $beritas = $query->latest()->paginate(9);

        // Get featured news (2 berita terbaru untuk section featured)
        $featuredNews = Berita::latest()->limit(2)->get();

        // Get unique categories for filter
        $categories = Berita::distinct()->pluck('kategori')->filter();

        return view('berita', compact('beritas', 'featuredNews', 'categories'));
    }

    /**
     * Display the specified berita detail
     */
    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();

        // Increment views counter
        $berita->incrementViews();

        // Get related news (same category, limit 3)
        $relatedNews = $berita->getRelatedBerita(3);

        // Get latest news for sidebar (3 berita terbaru, exclude current)
        $latestNews = Berita::where('id', '!=', $berita->id)
            ->latest()
            ->limit(3)
            ->get();

        return view('berita-detail', compact('berita', 'relatedNews', 'latestNews'));
    }
}
