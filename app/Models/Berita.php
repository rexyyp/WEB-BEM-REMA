<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'kategori',
        'tanggal',
        'author',
        'thumbnail',
        'konten',
        'views'
    ];

    protected $casts = [
        'tanggal' => 'date',
        'views' => 'integer',
    ];

    /**
     * Boot method untuk auto-generate slug
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($berita) {
            if (empty($berita->slug)) {
                $berita->slug = static::generateUniqueSlug($berita->judul);
            }
        });

        static::updating(function ($berita) {
            if ($berita->isDirty('judul')) {
                $berita->slug = static::generateUniqueSlug($berita->judul);
            }
        });
    }

    /**
     * Generate unique slug dari judul
     */
    public static function generateUniqueSlug($judul)
    {
        $slug = Str::slug($judul);
        $count = static::where('slug', 'LIKE', "{$slug}%")->count();
        
        return $count ? "{$slug}-{$count}" : $slug;
    }

    /**
     * Increment views counter
     */
    public function incrementViews()
    {
        $this->increment('views');
    }

    /**
     * Get excerpt dari konten (120 karakter)
     */
    public function getExcerptAttribute()
    {
        return Str::limit(strip_tags($this->konten), 120, '...');
    }

    /**
     * Get formatted tanggal dalam Bahasa Indonesia
     */
    public function getTanggalFormattedAttribute()
    {
        Carbon::setLocale('id');
        return $this->tanggal->translatedFormat('d F Y');
    }

    /**
     * Get thumbnail URL with fallback
     */
    public function getThumbnailUrlAttribute()
    {
        if ($this->thumbnail && file_exists(public_path('storage/' . $this->thumbnail))) {
            return asset('storage/' . $this->thumbnail);
        }
        
        // Fallback ke default image
        return asset('build/assets/image/default-news.jpg');
    }

    /**
     * Scope untuk berita terbaru
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('tanggal', 'desc')->orderBy('created_at', 'desc');
    }

    /**
     * Scope untuk filter by kategori
     */
    public function scopeByKategori($query, $kategori)
    {
        if ($kategori) {
            return $query->where('kategori', $kategori);
        }
        return $query;
    }

    /**
     * Get berita terkait berdasarkan kategori
     */
    public function getRelatedBerita($limit = 3)
    {
        return static::where('kategori', $this->kategori)
            ->where('id', '!=', $this->id)
            ->latest()
            ->limit($limit)
            ->get();
    }

    /**
     * Sanitasi konten HTML (XSS protection)
     */
    public function getSanitizedKontenAttribute()
    {
        // Basic HTML sanitization
        $allowedTags = '<p><br><strong><em><u><h1><h2><h3><h4><h5><h6><ul><ol><li><a><img><blockquote><code><pre><hr><table><thead><tbody><tr><th><td>';
        return strip_tags($this->konten, $allowedTags);
    }

    /**
     * Get HTML content (jika sudah HTML, return as-is; jika markdown, convert dulu)
     */
    public function getHtmlKontenAttribute()
    {
        // Cek apakah konten sudah berupa HTML (ada tag <p>, <div>, dll)
        if (preg_match('/<\/?[a-z][\s\S]*>/i', $this->konten)) {
            // Konten sudah HTML, return as-is
            return $this->konten;
        }
        
        // Konten masih plain text atau markdown, convert dulu
        try {
            $converter = new \League\CommonMark\CommonMarkConverter([
                'html_input' => 'strip',
                'allow_unsafe_links' => false,
            ]);
            
            return $converter->convert($this->konten)->getContent();
            
        } catch (\Exception $e) {
            // Fallback: simple paragraph conversion
            return '<p>' . nl2br(e($this->konten)) . '</p>';
        }
    }
}
