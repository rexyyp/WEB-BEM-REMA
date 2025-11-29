@extends('layouts.app')

@section('content')
<div class="pt-20">
    {{-- Hero Section --}}
    <section class="relative py-20 px-8 md:px-12 bg-gradient-to-br from-white via-gray-50 to-white overflow-hidden animate-on-scroll opacity-0" style="transform: translateY(40px);">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 left-10 w-72 h-72 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-full blur-3xl"></div>
        </div>
        
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="text-center mb-12">
                <div class="animate-on-scroll inline-block px-4 py-2 rounded-full mb-6 opacity-0 transition-all duration-700" style="background-color: #FACC15; transform: scale(0.8);">
                    <p class="text-xs font-bold uppercase tracking-wider text-black">Berita & Kegiatan</p>
                </div>
                <h1 class="animate-on-scroll text-5xl md:text-7xl font-black mb-6 leading-tight opacity-0 transition-all duration-1000" style="transform: translateY(40px); transition-delay: 200ms;">
                    <span class="text-black">Berita</span>
                    <span style="color: #37537A;">BEM REMA UPI</span>
                </h1>
                <p class="animate-on-scroll text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed opacity-0 transition-all duration-1000" style="transform: translateY(40px); transition-delay: 400ms;">
                    Informasi terkini seputar kegiatan, program kerja, dan pencapaian BEM REMA UPI
                </p>
            </div>
        </div>
    </section>

    {{-- Featured News --}}
    <section class="py-20 px-8 md:px-12 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="animate-on-scroll mb-12 opacity-0 transition-all duration-1000" style="transform: translateY(40px);">
                <h2 class="text-3xl md:text-4xl font-black mb-2 text-black">Berita Utama</h2>
                <div style="width: 120px; height: 4px; background-color: #37537A; border-radius: 9999px;"></div>
            </div>

            @if($featuredNews->count() > 0)
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                @foreach($featuredNews as $index => $news)
                <div class="animate-on-scroll group bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 cursor-pointer opacity-0" style="transform: translateY(30px); transition-delay: {{ $index * 200 }}ms; display: grid; grid-template-rows: 256px 1fr; height: 540px;">
                    <div class="relative overflow-hidden">
                        <img src="{{ $news->thumbnail_url }}" alt="{{ $news->judul }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        @if($news->kategori)
                        <div class="absolute top-4 left-4">
                            <span class="inline-block px-4 py-2 rounded-full text-xs font-bold text-black" style="background-color: #FACC15;">
                                {{ $news->kategori }}
                            </span>
                        </div>
                        @endif
                    </div>
                    <div class="p-6" style="display: grid; grid-template-rows: 3.5rem auto 4rem 1fr auto; gap: 0;">
                        <h3 class="text-xl font-black text-gray-900 group-hover:text-blue-900 transition-colors duration-300 line-clamp-2">
                            {{ $news->judul }}
                        </h3>
                        <div class="flex items-center gap-4 text-gray-500 text-xs" style="margin-top: 0.75rem; margin-bottom: 1rem;">
                            <span class="flex items-center gap-2">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span>{{ formatTanggalSingkat($news->tanggal) }}</span>
                            </span>
                            <span class="flex items-center gap-2">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                <span>{{ $news->author }}</span>
                            </span>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-sm line-clamp-3">
                            {{ $news->excerpt }}
                        </p>
                        <div></div>
                        <div style="align-self: end;">
                            <a href="{{ route('berita.detail', $news->slug) }}" class="inline-flex items-center gap-2 text-sm font-bold group-hover:gap-3 transition-all duration-300" style="color: #37537A;">
                                <span>Baca Selengkapnya</span>
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>

    {{-- All News --}}
    <section class="py-20 px-8 md:px-12 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto">
            <div class="mb-12">
                <div class="animate-on-scroll mb-6 opacity-0 transition-all duration-1000" style="transform: translateY(40px);">
                    <h2 class="text-3xl md:text-4xl font-black mb-2 text-black">Semua Berita</h2>
                    <div style="width: 120px; height: 4px; background-color: #37537A; border-radius: 9999px;"></div>
                </div>

                {{-- Category Filter --}}
                <div class="animate-on-scroll flex flex-wrap gap-3 opacity-0 transition-all duration-1000 justify-start" style="transform: translateY(40px); transition-delay: 200ms;">
                    <a href="{{ route('berita') }}" class="px-5 py-2 rounded-full text-sm font-bold text-black transition-all duration-300 hover:scale-105 whitespace-nowrap {{ !request('kategori') ? 'bg-yellow-400' : 'bg-white border-2 border-gray-200 text-gray-600 hover:border-yellow-400' }}" style="{{ !request('kategori') ? 'background-color: #FACC15;' : '' }}">
                        Semua
                    </a>
                    @foreach($categories as $category)
                    <a href="{{ route('berita', ['kategori' => $category]) }}" class="px-5 py-2 rounded-full text-sm font-semibold transition-all duration-300 whitespace-nowrap {{ request('kategori') == $category ? 'text-black' : 'text-gray-600 bg-white border-2 border-gray-200 hover:border-yellow-400' }}" style="{{ request('kategori') == $category ? 'background-color: #FACC15;' : '' }}">
                        {{ $category }}
                    </a>
                    @endforeach
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @forelse($beritas as $index => $news)
                <div class="animate-on-scroll group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer hover:-translate-y-2 opacity-0" style="transform: translateY(30px); transition-delay: {{ $index * 100 }}ms; display: grid; grid-template-rows: auto 1fr; height: 480px;">
                    <div class="relative overflow-hidden aspect-video">
                        <img src="{{ $news->thumbnail_url }}" alt="{{ $news->judul }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        @if($news->kategori)
                        <div class="absolute top-4 left-4">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-bold text-black" style="background-color: #FACC15;">
                                {{ $news->kategori }}
                            </span>
                        </div>
                        @endif
                    </div>
                    <div class="p-6" style="display: grid; grid-template-rows: auto 3.5rem 3.6rem 1fr auto; gap: 0;">
                        <div class="flex items-center gap-4 text-xs text-gray-500 mb-3">
                            <span class="flex items-center gap-2">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span>{{ formatTanggalSingkat($news->tanggal) }}</span>
                            </span>
                            <span class="flex items-center gap-2">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                <span>{{ $news->author }}</span>
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-900 transition-colors duration-300 line-clamp-2">
                            {{ $news->judul }}
                        </h3>
                        <p class="text-gray-600 text-sm line-clamp-3">
                            {{ $news->excerpt }}
                        </p>
                        <div></div>
                        <div style="align-self: end;">
                            <a href="{{ route('berita.detail', $news->slug) }}" class="inline-flex items-center gap-2 text-sm font-bold group-hover:gap-3 transition-all duration-300" style="color: #37537A;">
                                <span>Baca Selengkapnya</span>
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-3 text-center py-12">
                    <p class="text-gray-500 text-lg">Belum ada berita yang dipublikasikan.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>
    
    {{-- Pagination --}}
    @if($beritas->hasPages())
    <div class="animate-on-scroll flex justify-center mt-16 mb-12 opacity-0 transition-all duration-1000" style="transform: translateY(20px); transition-delay: 600ms;">
        {{ $beritas->links('pagination::tailwind') }}
    </div>
    @endif
</div>



<script>
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

    // Add parallax effect
    const hero = document.querySelector('.relative.py-20');
    if (hero) {
        hero.addEventListener('mousemove', (e) => {
            const blobs = hero.querySelectorAll('.absolute.opacity-5 > div');
            const mouseX = e.clientX / window.innerWidth;
            const mouseY = e.clientY / window.innerHeight;
            
            blobs.forEach((blob, index) => {
                const speed = (index + 1) * 20;
                const x = mouseX * speed;
                const y = mouseY * speed;
                blob.style.transform = `translate(${x}px, ${y}px)`;
            });
        });
    }
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

.absolute.opacity-5 > div,
.absolute.opacity-10 > div {
    transition: transform 0.3s ease-out;
}

/* Judul berita hitam default, biru saat hover card */
.group h3 {
    color: #000000 !important;
}

.group:hover h3 {
    color: #37537A !important;
}
</style>
@endsection
