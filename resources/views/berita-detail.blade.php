@extends('layouts.app')

@section('content')
<div class="pt-32">
    {{-- Hero Section with Featured Image --}}
    <section class="relative py-16 px-4 md:px-8 bg-gradient-to-br from-white via-gray-50 to-white overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 left-10 w-72 h-72 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-full blur-3xl"></div>
        </div>
        
        <div class="max-w-4xl mx-auto relative z-10 text-center">
            {{-- Category Badge --}}
            <div class="animate-on-scroll mb-6 opacity-0 transition-all duration-700" style="transform: translateY(20px); transition-delay: 100ms;">
                <span class="inline-block px-5 py-2 rounded-full text-sm font-bold text-black" style="background-color: #FACC15;">
                    {{ $berita->kategori }}
                </span>
            </div>

            {{-- Title --}}
            <h1 class="animate-on-scroll text-4xl md:text-5xl font-black mb-6 leading-tight text-black opacity-0 transition-all duration-1000" style="transform: translateY(30px); transition-delay: 200ms;">
                {{ $berita->judul }}
            </h1>

            {{-- Meta Information --}}
            <div class="animate-on-scroll flex flex-wrap items-center justify-center gap-6 text-gray-600 mb-8 opacity-0 transition-all duration-700" style="transform: translateY(20px); transition-delay: 300ms;">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 flex-shrink-0" style="color: #37537A;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span class="font-semibold">{{ formatTanggalIndo($berita->tanggal) }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 flex-shrink-0" style="color: #37537A;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    <span class="font-semibold">{{ $berita->author }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 flex-shrink-0" style="color: #37537A;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    <span class="font-semibold">{{ formatViews($berita->views) }} views</span>
                </div>
            </div>

            {{-- Featured Image --}}
            <div class="animate-on-scroll group relative rounded-3xl overflow-hidden shadow-2xl mb-8 opacity-0 transition-all duration-1000" style="transform: translateY(40px); transition-delay: 400ms;">
                <div class="relative overflow-hidden aspect-video">
                    <img src="{{ $berita->thumbnail_url }}" alt="{{ $berita->judul }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-all duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Article Content --}}
    <section class="py-16 px-4 md:px-8 bg-white">
        <div class="max-w-4xl mx-auto">
            <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="transform: translateY(30px);">
                {{-- Article Body with Markdown Support --}}
                <article class="prose prose-lg max-w-none markdown-content">
                    <div class="text-gray-700 leading-relaxed" style="font-size: 1.125rem; line-height: 1.8;">
                        {!! $berita->html_konten !!}
                    </div>
                </article>

                {{-- Share Buttons --}}
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Bagikan Artikel:</h3>
                    <div class="flex flex-wrap gap-3">
                        <button onclick="shareWhatsApp()" class="inline-flex items-center gap-2 px-5 py-2.5 bg-green-500 hover:bg-green-600 text-white rounded-lg font-semibold transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            <span>WhatsApp</span>
                        </button>
                        <button onclick="shareTwitter()" class="inline-flex items-center gap-2 px-5 py-2.5 bg-blue-400 hover:bg-blue-500 text-white rounded-lg font-semibold transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                            <span>Twitter</span>
                        </button>
                        <button onclick="shareFacebook()" class="inline-flex items-center gap-2 px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-semibold transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                            <span>Facebook</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Related News --}}
    @if($relatedNews && $relatedNews->count() > 0)
    <section class="py-20 px-4 md:px-8 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto">
            <div class="animate-on-scroll mb-12 opacity-0 transition-all duration-1000" style="transform: translateY(40px);">
                <h2 class="text-3xl md:text-4xl font-black mb-2 text-black">Berita Terkait</h2>
                <div style="width: 120px; height: 4px; background-color: #37537A; border-radius: 9999px;"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($relatedNews as $index => $news)
                <a href="{{ route('berita.detail', $news->slug) }}" class="animate-on-scroll group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer hover:-translate-y-2 opacity-0" style="transform: translateY(30px); transition-delay: {{ $index * 100 }}ms;">
                    <div class="relative overflow-hidden aspect-video">
                        <img src="{{ $news->thumbnail_url }}" alt="{{ $news->judul }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute top-4 left-4">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-bold text-black" style="background-color: #FACC15;">
                                {{ $news->kategori }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-4 text-xs text-gray-500 mb-3">
                            <span class="flex items-center gap-2">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span>{{ formatTanggalSingkat($news->tanggal) }}</span>
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-900 transition-colors duration-300 mb-3 line-clamp-2">
                            {{ $news->judul }}
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                            {{ $news->excerpt }}
                        </p>
                        <span class="inline-flex items-center gap-2 text-sm font-bold group-hover:gap-3 transition-all duration-300" style="color: #37537A;">
                            <span>Baca Selengkapnya</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- Latest News --}}
    @if($latestNews && $latestNews->count() > 0)
    <section class="py-20 px-4 md:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="animate-on-scroll mb-12 opacity-0 transition-all duration-1000" style="transform: translateY(40px);">
                <h2 class="text-3xl md:text-4xl font-black mb-2 text-black">Berita Terbaru</h2>
                <div style="width: 120px; height: 4px; background-color: #FACC15; border-radius: 9999px;"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                @foreach($latestNews as $index => $news)
                <a href="{{ route('berita.detail', $news->slug) }}" class="animate-on-scroll group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer hover:-translate-y-1 opacity-0 flex flex-col md:flex-row" style="transform: translateY(30px); transition-delay: {{ $index * 100 }}ms;">
                    <div class="relative overflow-hidden md:w-2/5 aspect-video md:aspect-square">
                        <img src="{{ $news->thumbnail_url }}" alt="{{ $news->judul }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute top-3 left-3">
                            <span class="inline-block px-2.5 py-1 rounded-full text-xs font-bold text-black" style="background-color: #FACC15;">
                                {{ $news->kategori }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6 md:w-3/5 flex flex-col justify-center">
                        <div class="flex items-center gap-3 text-xs text-gray-500 mb-2">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span>{{ formatTanggalSingkat($news->tanggal) }}</span>
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                <span>{{ formatViews($news->views) }}</span>
                            </span>
                        </div>
                        <h3 class="text-lg md:text-xl font-bold text-gray-800 group-hover:text-blue-900 transition-colors duration-300 mb-2 line-clamp-2">
                            {{ $news->judul }}
                        </h3>
                        <p class="text-gray-600 text-sm mb-3 line-clamp-2">
                            {{ $news->excerpt }}
                        </p>
                        <span class="inline-flex items-center gap-2 text-sm font-bold group-hover:gap-3 transition-all duration-300" style="color: #37537A;">
                            <span>Selengkapnya</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif
</div>

<script>
// Share functions
function shareWhatsApp() {
    const url = encodeURIComponent(window.location.href);
    const text = encodeURIComponent('{{ $berita->judul }}');
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

// Animation on scroll
document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add reading progress bar
    const progressBar = document.createElement('div');
    progressBar.style.cssText = 'position: fixed; top: 0; left: 0; height: 4px; background: linear-gradient(90deg, #37537A 0%, #FACC15 100%); z-index: 9999; transition: width 0.1s ease;';
    document.body.appendChild(progressBar);

    window.addEventListener('scroll', () => {
        const windowHeight = window.innerHeight;
        const documentHeight = document.documentElement.scrollHeight - windowHeight;
        const scrolled = window.scrollY;
        const progress = (scrolled / documentHeight) * 100;
        progressBar.style.width = progress + '%';
    });
});
</script>

<style>
.animate-on-scroll.is-visible {
    opacity: 1 !important;
    transform: translate(0, 0) scale(1) !important;
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.prose p {
    margin-bottom: 1.5rem;
}

.prose h2,
.prose h3 {
    scroll-margin-top: 100px;
}

.hover-tilt {
    transition: all 0.3s ease;
}

.hover-tilt:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 30px rgba(55, 83, 122, 0.15);
}

/* Smooth image loading */
img {
    image-rendering: -webkit-optimize-contrast;
    image-rendering: crisp-edges;
}

/* Markdown Content Styling */
.markdown-content h1,
.markdown-content h2 {
    color: #37537A !important;
    font-weight: 900;
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.markdown-content h1 {
    font-size: 2.5rem;
}

.markdown-content h2 {
    font-size: 2rem;
}

.markdown-content h3 {
    color: #37537A !important;
    font-weight: 800;
    font-size: 1.5rem;
    margin-top: 1.5rem;
    margin-bottom: 0.75rem;
}

.markdown-content h4 {
    color: #37537A !important;
    font-weight: 700;
    font-size: 1.25rem;
    margin-top: 1.25rem;
    margin-bottom: 0.5rem;
}

.markdown-content p {
    margin-bottom: 1.5rem;
    line-height: 1.8;
}

.markdown-content ul,
.markdown-content ol {
    margin-bottom: 1.5rem;
    padding-left: 2rem;
}

.markdown-content ul li,
.markdown-content ol li {
    margin-bottom: 0.75rem;
    line-height: 1.8;
}

.markdown-content ul {
    list-style-type: disc;
}

.markdown-content ol {
    list-style-type: decimal;
}

.markdown-content strong {
    font-weight: 700;
    color: #37537A;
}

.markdown-content em {
    font-style: italic;
}

.markdown-content a {
    color: #37537A;
    text-decoration: underline;
    transition: all 0.3s ease;
}

.markdown-content a:hover {
    color: #FACC15;
}

.markdown-content blockquote {
    border-left: 4px solid #FACC15;
    padding-left: 1.5rem;
    margin: 2rem 0;
    font-style: italic;
    color: #4B5563;
    background: linear-gradient(135deg, rgba(55, 83, 122, 0.05) 0%, rgba(250, 204, 21, 0.05) 100%);
    padding: 1.5rem;
    border-radius: 0.5rem;
}

.markdown-content code {
    background-color: #F3F4F6;
    padding: 0.2rem 0.4rem;
    border-radius: 0.25rem;
    font-family: 'Courier New', monospace;
    font-size: 0.9em;
    color: #37537A;
}

.markdown-content pre {
    background-color: #F3F4F6;
    padding: 1rem;
    border-radius: 0.5rem;
    overflow-x: auto;
    margin: 1.5rem 0;
}

.markdown-content pre code {
    background-color: transparent;
    padding: 0;
}

.markdown-content img {
    max-width: 100%;
    height: auto;
    border-radius: 1rem;
    margin: 2rem 0;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.markdown-content hr {
    border: none;
    height: 2px;
    background: linear-gradient(90deg, transparent, #37537A, transparent);
    margin: 3rem 0;
}

.markdown-content table {
    width: 100%;
    border-collapse: collapse;
    margin: 2rem 0;
}

.markdown-content table th {
    background-color: #37537A;
    color: white;
    padding: 0.75rem;
    text-align: left;
    font-weight: 700;
}

.markdown-content table td {
    padding: 0.75rem;
    border-bottom: 1px solid #E5E7EB;
}

.markdown-content table tr:hover {
    background-color: #F9FAFB;
}
</style>
@endsection
