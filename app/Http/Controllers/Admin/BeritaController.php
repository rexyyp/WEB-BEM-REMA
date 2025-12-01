<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Berita::latest()->paginate(10);

        return view('admin.berita.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBeritaRequest $request)
    {
        $validated = $request->validated();

        // Handle thumbnail upload
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('beritas', $filename, 'public');
            $validated['thumbnail'] = $path;
        }

        // Slug akan di-generate otomatis oleh model
        Berita::create($validated);

        // Clear cache
        Cache::forget('home.latest_news');
        Cache::forget('berita.latest');

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $beritum)
    {
        return view('admin.berita.show', compact('beritum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $beritum)
    {
        return view('admin.berita.edit', compact('beritum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeritaRequest $request, Berita $beritum)
    {
        $validated = $request->validated();
        $oldSlug = $beritum->slug;

        // Handle thumbnail upload
        if ($request->hasFile('thumbnail')) {
            // Delete old thumbnail if exists
            if ($beritum->thumbnail && Storage::disk('public')->exists($beritum->thumbnail)) {
                Storage::disk('public')->delete($beritum->thumbnail);
            }

            $file = $request->file('thumbnail');
            $filename = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('beritas', $filename, 'public');
            $validated['thumbnail'] = $path;
        }

        // Update berita (slug akan di-regenerate otomatis jika judul berubah)
        $beritum->update($validated);

        // Clear cache
        Cache::forget("berita.{$oldSlug}");
        Cache::forget("berita.{$beritum->slug}");
        Cache::forget("berita.{$oldSlug}.related");
        Cache::forget("berita.{$beritum->slug}.related");
        Cache::forget('berita.latest');
        Cache::forget('home.latest_news');

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $beritum)
    {
        $slug = $beritum->slug;

        // Delete thumbnail if exists
        if ($beritum->thumbnail && Storage::disk('public')->exists($beritum->thumbnail)) {
            Storage::disk('public')->delete($beritum->thumbnail);
        }

        $beritum->delete();

        // Clear cache
        Cache::forget("berita.{$slug}");
        Cache::forget("berita.{$slug}.related");
        Cache::forget('berita.latest');
        Cache::forget('home.latest_news');

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil dihapus!');
    }
}
