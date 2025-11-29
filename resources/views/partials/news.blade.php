<section id="news" class="py-20 px-8 md:px-12 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 relative">
            {{-- Decorative Elements --}}
            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-72 h-72 opacity-15 liquid-shape" style="background: radial-gradient(circle, rgba(250, 204, 21, 0.4) 0%, transparent 70%); filter: blur(60px); z-index: -1;"></div>
            
            <h2 class="animate-on-scroll text-5xl md:text-6xl font-black mb-6 opacity-0 transition-all duration-1000" style="transform: translateY(40px); color: #37537A;">
                Berita & Publikasi
            </h2>
            <div class="flex justify-center mt-6 gap-3">
                <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="width: 80px; height: 4px; background: linear-gradient(90deg, #37537A, #93C5FD); border-radius: 9999px; transform: translateY(40px); transition-delay: 200ms;"></div>
                <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="width: 6px; height: 6px; background-color: #37537A; border-radius: 50%; transform: translateY(40px); transition-delay: 250ms;"></div>
                <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="width: 80px; height: 4px; background: linear-gradient(90deg, #93C5FD, #FACC15); border-radius: 9999px; transform: translateY(40px); transition-delay: 300ms;"></div>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            {{-- Decorative Background Elements --}}
            <div class="absolute top-1/4 left-0 w-96 h-96 morph-blob opacity-5" style="background: linear-gradient(135deg, #FACC15, #93C5FD); filter: blur(100px); z-index: -1;"></div>
            <div class="absolute bottom-1/4 right-0 w-80 h-80 liquid-shape opacity-5" style="background: linear-gradient(135deg, #37537A, #F59E0B); filter: blur(100px); z-index: -1;"></div>
            
            @php
                $latestNews = \App\Models\Berita::latest()->limit(3)->get();
            @endphp

            @forelse($latestNews as $index => $item)
                <div class="animate-on-scroll group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer hover:-translate-y-3 opacity-0 card-3d" style="transform: translateY(30px); transition-delay: {{ $index * 100 }}ms; display: grid; grid-template-rows: auto 1fr; height: 420px;">
                    {{-- Image --}}
                    <div class="relative overflow-hidden aspect-video">
                        <img
                            src="{{ $item->thumbnail_url }}"
                            alt="{{ $item->judul }}"
                            class="w-full h-full object-cover transform group-hover:scale-110 group-hover:rotate-2 transition-all duration-700"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        {{-- Shimmer Effect --}}
                        <div class="absolute inset-0 shimmer opacity-0 group-hover:opacity-100 pointer-events-none"></div>
                        
                        {{-- Category Badge with Pulse --}}
                        @if($item->kategori)
                        <div class="absolute top-4 left-4 transform group-hover:scale-110 transition-transform duration-300">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-bold text-black" style="background-color: #FACC15;">
                                {{ $item->kategori }}
                            </span>
                        </div>
                        @endif
                    </div>

                    {{-- Content --}}
                    <div class="p-5" style="display: grid; grid-template-rows: auto 3rem 3rem 1fr auto; gap: 0;">
                        <div class="flex items-center gap-4 text-xs text-gray-500 mb-3">
                            <span class="flex items-center gap-2">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span>{{ formatTanggalSingkat($item->tanggal) }}</span>
                            </span>
                            <span class="flex items-center gap-2">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                <span>{{ $item->author }}</span>
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-900 transition-colors duration-300 line-clamp-2">
                            {{ $item->judul }}
                        </h3>

                        <p class="text-gray-600 text-sm line-clamp-3">
                            {{ $item->excerpt }}
                        </p>

                        <div></div>

                        <div style="align-self: end;">
                            <a href="{{ route('berita.detail', $item->slug) }}" class="inline-flex items-center gap-2 text-sm font-bold group-hover:gap-3 transition-all duration-300" style="color: #37537A;">
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

<style>
/* Judul berita hitam default, biru saat hover card */
#news h3 {
    color: #000000 !important;
}

#news .group:hover h3 {
    color: #37537A !important;
}

/* Tombol Baca Selengkapnya selalu biru */
#news a {
    color: #37537A !important;
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
</style>
