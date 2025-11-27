@extends('layouts.app')

@section('title', $berita->judul . ' - BEM REMA UPI')

@section('content')
{{-- Reading Progress Bar --}}
<div id="reading-progress" class="fixed top-0 left-0 h-1 bg-gradient-to-r from-yellow-400 to-blue-900 z-50 transition-all duration-150" style="width: 0%;"></div>

{{-- Main Container --}}
<div class="bg-gray-50 min-h-screen pt-20">
    {{-- Breadcrumb --}}
    <div class="bg-white border-b border-gray-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <nav class="flex items-center gap-2 text-sm text-gray-600">
                <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">Beranda</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <a href="{{ route('berita') }}" class="hover:text-blue-600 transition-colors">Berita</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="text-gray-900 font-medium truncate">{{ Str::limit($berita->judul, 40) }}</span>
            </nav>
        </div>
    </div>

    {{-- Article Container --}}
    <article class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        {{-- Article Header --}}
        <header class="mb-8">
            {{-- Category Badge --}}
            @if($berita->kategori)
            <div class="mb-4">
                <span class="inline-block px-4 py-1.5 text-xs font-bold uppercase tracking-wider rounded-full text-gray-900" style="background-color: #FACC15;">
                    {{ $berita->kategori }}
                </span>
            </div>
            @endif

            {{-- Article Title --}}
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight text-gray-900 mb-6">
                {{ $berita->judul }}
            </h1>

            {{-- Meta Information --}}
            <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600 pb-6 border-b border-gray-200">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center text-white font-bold text-lg" style="background: linear-gradient(135deg, #37537A 0%, #FACC15 100%);">
                        {{ strtoupper(substr($berita->author, 0, 1)) }}
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900">{{ $berita->author }}</p>
                        <p class="text-xs text-gray-500">Penulis</p>
                    </div>
                </div>
                <div class="hidden sm:block h-8 w-px bg-gray-300"></div>
                <div>
                    <p class="font-medium text-gray-700">{{ formatTanggalIndo($berita->tanggal) }}</p>
                    <p class="text-xs text-gray-500">Dipublikasikan</p>
                </div>
                <div class="hidden sm:block h-8 w-px bg-gray-300"></div>
                <div class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    <span class="font-medium">{{ formatViews($berita->views) }} views</span>
                </div>
            </div>
        </header>

        {{-- Featured Image --}}
        <figure class="mb-8">
            <div class="relative w-full overflow-hidden rounded-xl shadow-lg bg-gray-100" style="max-height: 500px;">
                <img 
                    src="{{ $berita->thumbnail_url }}" 
                    alt="{{ $berita->judul }}" 
                    class="w-full h-auto object-contain"
                    style="max-height: 500px;"
                    loading="eager"
                >
            </div>
        </figure>

        {{-- Share Buttons Top --}}
        <div class="flex flex-wrap items-center gap-2 mb-8 pb-6 border-b border-gray-200">
            <span class="text-sm font-semibold text-gray-700 mr-2">Bagikan:</span>
            <button onclick="shareWhatsApp()" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-green-500 hover:bg-green-600 text-white rounded-lg transition-colors text-xs font-medium">
                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                WhatsApp
            </button>
            <button onclick="shareTwitter()" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-sky-500 hover:bg-sky-600 text-white rounded-lg transition-colors text-xs font-medium">
                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
                Twitter
            </button>
            <button onclick="shareFacebook()" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors text-xs font-medium">
                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
                Facebook
            </button>
            <button onclick="copyToClipboard()" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-gray-700 hover:bg-gray-800 text-white rounded-lg transition-colors text-xs font-medium">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                </svg>
                Salin Link
            </button>
        </div>

        {{-- Article Body Content --}}
        <div class="article-body bg-white rounded-xl p-6 sm:p-8 shadow-sm mb-8">
            <div class="prose prose-lg max-w-none">
                {!! parseMarkdownToHtml($berita->konten) !!}
            </div>
        </div>

        {{-- Tags Section --}}
        <div class="flex flex-wrap items-center gap-2 mb-8 pb-6 border-b border-gray-200">
            <span class="text-sm font-semibold text-gray-700">Tags:</span>
            @if($berita->kategori)
            <span class="inline-block px-3 py-1 bg-gray-100 border border-gray-300 hover:bg-gray-200 text-gray-800 rounded-full text-xs font-medium transition cursor-pointer">
                #{{ $berita->kategori }}
            </span>
            @endif
            <span class="inline-block px-3 py-1 bg-gray-100 border border-gray-300 hover:bg-gray-200 text-gray-800 rounded-full text-xs font-medium transition cursor-pointer">
                #BEMREMA
            </span>
            <span class="inline-block px-3 py-1 bg-gray-100 border border-gray-300 hover:bg-gray-200 text-gray-800 rounded-full text-xs font-medium transition cursor-pointer">
                #UPI
            </span>
            <span class="inline-block px-3 py-1 bg-gray-100 border border-gray-300 hover:bg-gray-200 text-gray-800 rounded-full text-xs font-medium transition cursor-pointer">
                #SuarSangga2025
            </span>
        </div>

        {{-- Share Again Bottom --}}
        <div class="bg-gradient-to-r from-blue-50 to-yellow-50 rounded-xl p-6 mb-12 border border-gray-200">
            <p class="text-sm font-bold text-gray-800 mb-3">📢 Bagikan artikel ini ke teman-temanmu!</p>
            <div class="flex flex-wrap gap-2">
                <button onclick="shareWhatsApp()" class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-lg transition text-sm font-medium">
                    WhatsApp
                </button>
                <button onclick="shareTwitter()" class="px-4 py-2 bg-sky-500 hover:bg-sky-600 text-white rounded-lg transition text-sm font-medium">
                    Twitter
                </button>
                <button onclick="shareFacebook()" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition text-sm font-medium">
                    Facebook
                </button>
                <button onclick="copyToClipboard()" class="px-4 py-2 bg-gray-700 hover:bg-gray-800 text-white rounded-lg transition text-sm font-medium">
                    Salin Link
                </button>
            </div>
        </div>
    </article>

    {{-- Related Posts Section --}}
    @if(isset($relatedNews) && $relatedNews->count() > 0)
    <section class="bg-white border-t border-gray-200 py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl font-black text-gray-900 mb-8">Berita Terkait</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($relatedNews as $related)
                <a href="{{ route('berita.detail', $related->slug) }}" class="group bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="relative w-full overflow-hidden bg-gray-100" style="aspect-ratio: 16/9;">
                        <img 
                            src="{{ $related->thumbnail_url }}" 
                            alt="{{ $related->judul }}" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        >
                        @if($related->kategori)
                        <span class="absolute top-3 left-3 px-3 py-1 text-xs font-bold uppercase text-gray-900 rounded-full" style="background-color: #FACC15;">
                            {{ $related->kategori }}
                        </span>
                        @endif
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-gray-900 group-hover:text-blue-600 transition-colors mb-2 line-clamp-2 text-base">
                            {{ $related->judul }}
                        </h3>
                        <p class="text-sm text-gray-600 mb-3 line-clamp-2">{{ $related->excerpt }}</p>
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span>{{ formatTanggalSingkat($related->tanggal) }}</span>
                            <span class="flex items-center gap-1">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                {{ formatViews($related->views) }}
                            </span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- Latest News --}}
    @if(isset($latestNews) && $latestNews->count() > 0)
    <section class="bg-gray-50 py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl font-black text-gray-900 mb-8">Berita Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                @foreach($latestNews as $latest)
                <a href="{{ route('berita.detail', $latest->slug) }}" class="group flex gap-4 bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition-all duration-300 p-4 border border-gray-100">
                    <div class="relative w-28 h-28 flex-shrink-0 rounded-lg overflow-hidden bg-gray-100">
                        <img 
                            src="{{ $latest->thumbnail_url }}" 
                            alt="{{ $latest->judul }}" 
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                        >
                    </div>
                    <div class="flex-1 min-w-0">
                        @if($latest->kategori)
                        <span class="inline-block px-2 py-0.5 text-xs font-bold uppercase text-gray-900 rounded mb-2" style="background-color: #FACC15;">
                            {{ $latest->kategori }}
                        </span>
                        @endif
                        <h3 class="font-bold text-gray-900 group-hover:text-blue-600 transition-colors mb-2 line-clamp-2 text-sm">
                            {{ $latest->judul }}
                        </h3>
                        <div class="flex items-center gap-3 text-xs text-gray-500">
                            <span>{{ formatTanggalSingkat($latest->tanggal) }}</span>
                            <span>•</span>
                            <span class="flex items-center gap-1">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                {{ formatViews($latest->views) }}
                            </span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif
</div>

<style>
/* Article Typography Styling */
.prose {
    color: #1f2937;
    max-width: none;
}

.prose p {
    margin-bottom: 1.25rem;
    line-height: 1.8;
    font-size: 1.0625rem;
}

.prose h2 {
    font-size: 1.875rem;
    font-weight: 800;
    color: #111827;
    margin-top: 2.5rem;
    margin-bottom: 1.25rem;
    line-height: 1.3;
    letter-spacing: -0.025em;
}

.prose h3 {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1f2937;
    margin-top: 2rem;
    margin-bottom: 1rem;
    line-height: 1.4;
}

.prose h4 {
    font-size: 1.25rem;
    font-weight: 600;
    color: #374151;
    margin-top: 1.5rem;
    margin-bottom: 0.75rem;
}

.prose ul,
.prose ol {
    margin-bottom: 1.5rem;
    padding-left: 1.75rem;
}

.prose ul {
    list-style-type: disc;
}

.prose ol {
    list-style-type: decimal;
}

.prose li {
    margin-bottom: 0.5rem;
    line-height: 1.75;
}

.prose strong {
    font-weight: 700;
    color: #111827;
}

.prose em {
    font-style: italic;
}

.prose u {
    text-decoration: underline;
}

.prose a {
    color: #2563eb;
    text-decoration: underline;
    font-weight: 500;
    transition: color 0.2s;
}

.prose a:hover {
    color: #1d4ed8;
}

.prose blockquote {
    border-left: 4px solid #FACC15;
    padding-left: 1.5rem;
    margin: 2rem 0;
    font-style: italic;
    color: #4b5563;
    background: #f9fafb;
    padding: 1.5rem;
    border-radius: 0.5rem;
}

.prose code {
    background-color: #f3f4f6;
    padding: 0.25rem 0.5rem;
    border-radius: 0.375rem;
    font-family: 'Monaco', 'Courier New', monospace;
    font-size: 0.875em;
    color: #dc2626;
    font-weight: 600;
}

.prose pre {
    background-color: #1f2937;
    color: #f9fafb;
    padding: 1.5rem;
    border-radius: 0.75rem;
    overflow-x: auto;
    margin: 2rem 0;
    line-height: 1.6;
}

.prose pre code {
    background-color: transparent;
    padding: 0;
    color: #f9fafb;
    font-weight: 400;
    font-size: 0.875rem;
}

.prose img {
    max-width: 100%;
    height: auto;
    border-radius: 0.75rem;
    margin: 2rem auto;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    display: block;
}

.prose hr {
    border: none;
    height: 2px;
    background: linear-gradient(90deg, transparent, #d1d5db, transparent);
    margin: 3rem 0;
}

.prose table {
    width: 100%;
    border-collapse: collapse;
    margin: 2rem 0;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    border-radius: 0.5rem;
    overflow: hidden;
}

.prose table th {
    background-color: #37537A;
    color: white;
    padding: 0.875rem;
    text-align: left;
    font-weight: 700;
    font-size: 0.875rem;
}

.prose table td {
    padding: 0.875rem;
    border-bottom: 1px solid #e5e7eb;
}

.prose table tr:last-child td {
    border-bottom: none;
}

.prose table tr:hover {
    background-color: #f9fafb;
}

/* Utility Classes */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Ensure responsive images in content */
.article-body img {
    max-width: 100% !important;
    height: auto !important;
    border-radius: 0.75rem;
    margin: 1.5rem 0;
}
</style>

<script>
// Reading Progress Bar
const progressBar = document.getElementById('reading-progress');
const article = document.querySelector('.article-body');

if (progressBar && article) {
    window.addEventListener('scroll', () => {
        const articleTop = article.offsetTop - 100;
        const articleHeight = article.offsetHeight;
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const windowHeight = window.innerHeight;
        
        if (scrollTop > articleTop) {
            const progress = ((scrollTop - articleTop) / (articleHeight - windowHeight + articleTop)) * 100;
            progressBar.style.width = Math.min(Math.max(progress, 0), 100) + '%';
        } else {
            progressBar.style.width = '0%';
        }
    });
}

// Share Functions
function shareWhatsApp() {
    const url = encodeURIComponent(window.location.href);
    const text = encodeURIComponent('{{ $berita->judul }} - BEM REMA UPI');
    window.open(`https://wa.me/?text=${text}%20${url}`, '_blank');
}

function shareTwitter() {
    const url = encodeURIComponent(window.location.href);
    const text = encodeURIComponent('{{ $berita->judul }}');
    window.open(`https://twitter.com/intent/tweet?text=${text}&url=${url}`, '_blank');
}

function shareFacebook() {
    const url = encodeURIComponent(window.location.href);
    window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}`, '_blank');
}

function copyToClipboard() {
    const url = window.location.href;
    navigator.clipboard.writeText(url).then(() => {
        alert('✅ Link berhasil disalin ke clipboard!');
    }).catch(err => {
        console.error('Error:', err);
        alert('❌ Gagal menyalin link');
    });
}
</script>
@endsection
