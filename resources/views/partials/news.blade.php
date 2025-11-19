<section id="news" class="py-32 px-4 md:px-8 relative overflow-hidden" style="background: linear-gradient(180deg, #f9fafb 0%, #ffffff 100%);">
    {{-- Decorative background --}}
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-20 right-10 w-72 h-72 bg-yellow-200 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-10 w-96 h-96 bg-blue-100 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-16">
            <div class="inline-block mb-4">
                <span class="badge-gradient px-6 py-2 rounded-full text-xs font-bold text-black uppercase tracking-wider">📰 Publikasi Terkini</span>
            </div>
            <h2 class="animate-on-scroll text-5xl md:text-6xl font-black mb-6 opacity-0 transition-all duration-1000" style="transform: translateY(40px);">
                <span class="text-gradient-yellow">Berita</span> <span class="text-gray-900">& Kegiatan</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Ikuti perkembangan dan aktivitas terbaru BEM REMA UPI</p>
        </div>

        {{-- Bento Grid Layout --}}
        <div class="grid md:grid-cols-12 gap-6">
            @php
                $newsItems = [
                    [
                        'category' => 'SEMINAR',
                        'title' => 'Seminar Kepemimpinan Mahasiswa 2024',
                        'description' => 'Acara seminar tahunan untuk meningkatkan kompetensi kepemimpinan mahasiswa UPI dengan pembicara nasional dan internasional',
                        'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&q=80',
                        'categoryColor' => 'bg-red-500',
                        'featured' => true,
                    ],
                    [
                        'category' => 'SOSIAL',
                        'title' => 'Program Bakti Sosial Desa Binaan',
                        'description' => 'Kegiatan pemberdayaan masyarakat desa melalui program edukasi berkelanjutan',
                        'image' => 'https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=600&q=80',
                        'categoryColor' => 'bg-green-500',
                    ],
                    [
                        'category' => 'ACARA',
                        'title' => 'Festival Seni dan Budaya UPI',
                        'description' => 'Merayakan keragaman budaya dengan berbagai pertunjukan seni di kampus',
                        'image' => 'https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?w=600&q=80',
                        'categoryColor' => 'bg-purple-500',
                    ],
                    [
                        'category' => 'KOMPETISI',
                        'title' => 'Lomba Debat Antar Fakultas',
                        'description' => 'Kompetisi debat untuk mengasah kemampuan argumentasi mahasiswa',
                        'image' => 'https://images.unsplash.com/photo-1475721027785-f74eccf877e2?w=600&q=80',
                        'categoryColor' => 'bg-blue-500',
                    ],
                ];
            @endphp
            
            {{-- Featured News (Large) --}}
            @if(isset($newsItems[0]))
                <div class="md:col-span-7 animate-on-scroll group bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 cursor-pointer hover:-translate-y-2 card-3d opacity-0 relative" style="transform: translateY(30px); height: 600px;">
                    {{-- Image --}}
                    <div class="relative overflow-hidden h-2/3">
                        <img
                            src="{{ $newsItems[0]['image'] }}"
                            alt="{{ $newsItems[0]['title'] }}"
                            class="w-full h-full object-cover transform group-hover:scale-110 group-hover:rotate-1 transition-all duration-700"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        
                        {{-- Badge --}}
                        <div class="absolute top-6 left-6 floating">
                            <div class="flex items-center gap-2">
                                <span class="inline-block px-4 py-2 rounded-full text-xs font-bold text-white shadow-lg {{ $newsItems[0]['categoryColor'] }}">
                                    {{ $newsItems[0]['category'] }}
                                </span>
                                <span class="glass-dark px-4 py-2 rounded-full text-xs font-bold text-yellow-300">
                                    ⭐ FEATURED
                                </span>
                            </div>
                        </div>
                        
                        {{-- Content Overlay --}}
                        <div class="absolute bottom-0 left-0 right-0 p-8">
                            <h3 class="text-3xl font-black text-white mb-3 group-hover:text-yellow-300 transition-colors duration-300">
                                {{ $newsItems[0]['title'] }}
                            </h3>
                            <p class="text-gray-200 text-base leading-relaxed mb-4">
                                {{ $newsItems[0]['description'] }}
                            </p>
                            <div class="flex items-center gap-4 text-xs text-gray-300">
                                <span class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <span>15 Nov 2025</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Bottom Action --}}
                    <div class="p-6 h-1/3 flex items-center">
                        <a href="#" class="inline-flex items-center gap-3 text-base font-bold group-hover:gap-5 transition-all duration-300 text-yellow-600 hover:text-yellow-700">
                            <span>Baca Selengkapnya</span>
                            <svg class="w-5 h-5 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endif

            {{-- Regular News Grid --}}
            <div class="md:col-span-5 grid grid-rows-2 gap-6">
                @foreach(array_slice($newsItems, 1, 2) as $index => $item)
                    <div class="animate-on-scroll group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer hover:-translate-y-3 card-3d opacity-0 flex" style="transform: translateY(30px); transition-delay: {{ ($index + 1) * 100 }}ms;">
                        {{-- Image --}}
                        <div class="relative overflow-hidden w-2/5">
                            <img
                                src="{{ $item['image'] }}"
                                alt="{{ $item['title'] }}"
                                class="w-full h-full object-cover transform group-hover:scale-110 group-hover:rotate-2 transition-all duration-700"
                            />
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent to-black/30"></div>
                            <div class="absolute top-3 left-3 floating">
                                <span class="inline-block px-3 py-1 rounded-full text-xs font-bold text-white shadow-lg {{ $item['categoryColor'] }}">
                                    {{ $item['category'] }}
                                </span>
                            </div>
                        </div>

                        {{-- Content --}}
                        <div class="p-5 w-3/5 flex flex-col justify-between">
                            <div>
                                <h3 class="text-lg font-bold text-gray-800 group-hover:text-blue-900 transition-colors duration-300 line-clamp-2 mb-2">
                                    {{ $item['title'] }}
                                </h3>
                                <p class="text-gray-600 text-sm line-clamp-2 mb-3">
                                    {{ $item['description'] }}
                                </p>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">15 Nov 2025</span>
                                <svg class="w-5 h-5 text-yellow-600 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Bottom News Card --}}
            @if(isset($newsItems[3]))
                <div class="md:col-span-12 animate-on-scroll group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer hover:-translate-y-2 opacity-0 flex" style="transform: translateY(30px); transition-delay: 300ms; max-height: 220px;">
                    <div class="relative overflow-hidden w-2/5 md:w-1/3">
                        <img
                            src="{{ $newsItems[3]['image'] }}"
                            alt="{{ $newsItems[3]['title'] }}"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-all duration-700"
                        />
                        <div class="absolute top-4 left-4 floating">
                            <span class="inline-block px-4 py-2 rounded-full text-xs font-bold text-white shadow-lg {{ $newsItems[3]['categoryColor'] }}">
                                {{ $newsItems[3]['category'] }}
                            </span>
                        </div>
                    </div>
                    <div class="p-8 w-3/5 md:w-2/3 flex flex-col justify-center">
                        <h3 class="text-2xl font-bold text-gray-800 group-hover:text-blue-900 transition-colors duration-300 mb-3">
                            {{ $newsItems[3]['title'] }}
                        </h3>
                        <p class="text-gray-600 text-base mb-4 line-clamp-2">
                            {{ $newsItems[3]['description'] }}
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-sm font-bold group-hover:gap-4 transition-all duration-300 text-yellow-600">
                            <span>Baca Selengkapnya</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endif
        </div>

        {{-- View All Button --}}
        <div class="text-center mt-12">
            <a href="/berita" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-yellow-400 to-orange-500 text-black font-bold rounded-full hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <span>Lihat Semua Berita</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<style>
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
