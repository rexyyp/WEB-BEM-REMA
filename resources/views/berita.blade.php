@extends('layouts.app')

@section('title', 'Berita & Kegiatan - BEM REMA UPI')

@push('meta')
    <meta name="description" content="Berita dan kegiatan terkini BEM REMA UPI. Informasi seputar program kerja, acara, dan pencapaian Kabinet Suar Sangga Universitas Pendidikan Indonesia.">
    <meta name="keywords" content="Berita BEM UPI, Kegiatan Mahasiswa UPI, Program Kerja BEM, Acara BEM REMA, Informasi Kampus UPI">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url('/berita') }}">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/berita') }}">
    <meta property="og:title" content="Berita & Kegiatan - BEM REMA UPI">
    <meta property="og:description" content="Informasi terkini seputar kegiatan, program kerja, dan pencapaian BEM REMA UPI">
    <meta property="og:image" content="{{ asset('build/assets/image/Logo Suar Sangga.png') }}">
@endpush

@push('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "Berita BEM REMA UPI",
  "description": "Kumpulan berita dan informasi kegiatan BEM REMA Universitas Pendidikan Indonesia",
  "url": "{{ url('/berita') }}",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Beranda",
        "item": "{{ url('/') }}"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Berita",
        "item": "{{ url('/berita') }}"
      }
    ]
  }
}
</script>
@endpush

@section('content')
@include('partials.breadcrumbs', ['items' => [
    ['name' => 'Beranda', 'url' => url('/')],
    ['name' => 'Berita', 'url' => null]
]])
<div class="pt-20">
    {{-- Hero Section --}}
    <section class="relative py-20 px-8 md:px-12 overflow-hidden animate-on-scroll opacity-0" style="transform: translateY(40px);">
        {{-- Abstract Geometric Elements --}}
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-28 left-1/4 w-16 h-16 opacity-[0.06]" style="background: url('data:image/svg+xml,%3Csvg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 100 100&quot;%3E%3Ccircle cx=&quot;50&quot; cy=&quot;50&quot; r=&quot;35&quot; stroke=&quot;%2337537A&quot; stroke-width=&quot;3&quot; fill=&quot;none&quot; stroke-dasharray=&quot;10 5&quot;/%3E%3C/svg%3E') no-repeat center; background-size: contain;"></div>
            <div class="absolute bottom-24 right-1/3 w-12 h-12 opacity-[0.05]" style="background: url('data:image/svg+xml,%3Csvg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 100 100&quot;%3E%3Cpolygon points=&quot;50,20 80,80 20,80&quot; stroke=&quot;%23FACC15&quot; stroke-width=&quot;3&quot; fill=&quot;none&quot;/%3E%3C/svg%3E') no-repeat center; background-size: contain;"></div>
            <div class="absolute top-40 right-20 w-10 h-10 opacity-[0.04]" style="background: url('data:image/svg+xml,%3Csvg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 100 100&quot;%3E%3Cline x1=&quot;25&quot; y1=&quot;25&quot; x2=&quot;75&quot; y2=&quot;75&quot; stroke=&quot;%2337537A&quot; stroke-width=&quot;3&quot;/%3E%3Cline x1=&quot;75&quot; y1=&quot;25&quot; x2=&quot;25&quot; y2=&quot;75&quot; stroke=&quot;%2337537A&quot; stroke-width=&quot;3&quot;/%3E%3C/svg%3E') no-repeat center; background-size: contain;"></div>
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
    <section class="py-20 px-8 md:px-12">
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
        <div style="max-width: 1200px; margin: 0 auto;">
            <div class="mb-12">
                <div class="animate-on-scroll mb-6 opacity-0 transition-all duration-1000" style="transform: translateY(40px);">
                    <h2 class="text-3xl md:text-4xl font-black mb-2 text-black">Semua Berita</h2>
                    <div style="width: 120px; height: 4px; background-color: #37537A; border-radius: 9999px;"></div>
                </div>

                {{-- Category Filter --}}
                <div id="category-filters" class="animate-on-scroll flex flex-wrap gap-3 opacity-0 transition-all duration-1000 justify-start" style="transform: translateY(40px); transition-delay: 200ms;">
                    <button data-category="" class="category-btn px-5 py-2 rounded-full text-sm font-bold transition-all duration-300 hover:scale-105 whitespace-nowrap {{ !request('kategori') ? 'text-black' : 'text-gray-600 bg-white border-2 border-gray-200 hover:border-yellow-400' }}" style="{{ !request('kategori') ? 'background-color: #FACC15;' : '' }}">
                        Semua
                    </button>
                    @foreach($categories as $category)
                    <button data-category="{{ $category }}" class="category-btn px-5 py-2 rounded-full text-sm font-semibold transition-all duration-300 whitespace-nowrap {{ request('kategori') == $category ? 'text-black' : 'text-gray-600 bg-white border-2 border-gray-200 hover:border-yellow-400' }}" style="{{ request('kategori') == $category ? 'background-color: #FACC15;' : '' }}">
                        {{ $category }}
                    </button>
                    @endforeach
                </div>
            </div>

            {{-- News Grid - Clean Layout --}}
            <div id="news-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 2rem;">
                @forelse($beritas as $index => $news)
                <div class="news-card animate-on-scroll group bg-white rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 opacity-0" data-category="{{ $news->kategori }}" style="transform: translateY(30px); transition-delay: {{ $index * 100 }}ms;">
                    {{-- Image --}}
                    <div class="relative overflow-hidden" style="height: 220px; width: 100%;">
                        <img src="{{ $news->thumbnail_url }}" alt="{{ $news->judul }}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 12px 12px 0 0;">
                        @if($news->kategori)
                        <div class="absolute top-3 left-3">
                            <span class="inline-block px-3 py-1.5 rounded-full text-xs font-bold" style="background-color: #FACC15; color: #37537A;">
                                {{ $news->kategori }}
                            </span>
                        </div>
                        @endif
                    </div>
                    
                    {{-- Content --}}
                    <div class="p-5">
                        {{-- Date --}}
                        <p class="text-xs text-gray-500 mb-3">{{ formatTanggalSingkat($news->tanggal) }}</p>
                        
                        {{-- Title --}}
                        <h3 class="text-xl font-black mb-3 line-clamp-2 text-gray-900 group-hover:text-blue-900 transition-colors duration-300">
                            {{ $news->judul }}
                        </h3>
                        
                        {{-- Excerpt --}}
                        <p class="text-sm text-gray-600 mb-4 line-clamp-3 leading-relaxed">
                            {{ $news->excerpt }}
                        </p>
                        
                        {{-- Read More Link --}}
                        <a href="{{ route('berita.detail', $news->slug) }}" class="inline-flex items-center gap-2 text-sm font-bold transition-all duration-300 group-hover:gap-3" style="color: #37537A;">
                            <span>Baca Selengkapnya</span>
                            <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
                @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 3rem 0;">
                    <p class="text-gray-500 text-lg">Belum ada berita yang dipublikasikan.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>
    
    {{-- Pagination --}}
    @if($beritas->hasPages())
    <div id="pagination-container" class="animate-on-scroll flex justify-center mt-16 mb-12 opacity-0 transition-all duration-1000" style="transform: translateY(20px); transition-delay: 600ms;">
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

    // AJAX Category Filtering
    const categoryButtons = document.querySelectorAll('.category-btn');
    const newsCards = document.querySelectorAll('.news-card');
    
    categoryButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const selectedCategory = this.dataset.category;
            
            // Update active button style
            categoryButtons.forEach(b => {
                b.classList.remove('bg-yellow-400', 'text-black');
                b.classList.add('bg-white', 'border-2', 'border-gray-200', 'text-gray-600');
                b.style.backgroundColor = '';
            });
            
            this.classList.remove('bg-white', 'border-2', 'border-gray-200', 'text-gray-600');
            this.classList.add('bg-yellow-400', 'text-black');
            this.style.backgroundColor = '#FACC15';
            
            // Filter cards without page refresh
            newsCards.forEach(card => {
                const cardCategory = card.dataset.category;
                
                if (selectedCategory === '' || cardCategory === selectedCategory) {
                    card.style.display = 'grid';
                    // Re-trigger animation
                    setTimeout(() => {
                        card.classList.add('is-visible');
                    }, 50);
                } else {
                    card.style.display = 'none';
                }
            });
            
            // Update URL without refresh
            const url = new URL(window.location);
            if (selectedCategory) {
                url.searchParams.set('kategori', selectedCategory);
            } else {
                url.searchParams.delete('kategori');
            }
            window.history.pushState({}, '', url);
            
            // Smooth scroll to news section
            document.getElementById('news-grid').scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });

    // AJAX Pagination
    function handlePaginationClick(e) {
        const link = e.target.closest('a');
        if (!link || !link.href) return;
        
        e.preventDefault();
        const url = new URL(link.href);
        const page = url.searchParams.get('page');
        
        if (!page) return;
        
        // Update URL without refresh
        window.history.pushState({}, '', url);
        
        // Fetch new page content
        fetch(url, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.text())
        .then(html => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            
            // Update news grid
            const newGrid = doc.querySelector('#news-grid');
            const currentGrid = document.querySelector('#news-grid');
            if (newGrid && currentGrid) {
                currentGrid.innerHTML = newGrid.innerHTML;
                
                // Re-attach event listeners to new cards
                document.querySelectorAll('.animate-on-scroll').forEach(el => {
                    observer.observe(el);
                });
            }
            
            // Update pagination
            const newPagination = doc.querySelector('#pagination-container');
            const currentPagination = document.querySelector('#pagination-container');
            if (newPagination && currentPagination) {
                currentPagination.innerHTML = newPagination.innerHTML;
                attachPaginationListeners();
            }
            
            // Smooth scroll to top of news grid
            document.getElementById('news-grid').scrollIntoView({ behavior: 'smooth', block: 'start' });
        })
        .catch(error => {
            console.error('Error loading page:', error);
        });
    }
    
    function attachPaginationListeners() {
        const paginationContainer = document.querySelector('#pagination-container');
        if (paginationContainer) {
            paginationContainer.addEventListener('click', handlePaginationClick);
        }
    }
    
    // Initial attachment
    attachPaginationListeners();

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
