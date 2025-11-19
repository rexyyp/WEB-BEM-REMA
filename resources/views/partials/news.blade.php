<section id="news" class="py-32 px-4 md:px-8 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="animate-on-scroll text-5xl md:text-6xl font-black text-black mb-6 opacity-0 transition-all duration-1000" style="transform: translateY(40px);">
                Berita & Publikasi
            </h2>
            <div class="flex justify-center mt-4">
                <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="width: 160px; height: 4px; background-color: #37537A; border-radius: 9999px; transform: translateY(40px); transition-delay: 200ms;"></div>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @php
                $newsItems = [
                    [
                        'category' => 'SEMINAR',
                        'title' => 'Seminar Kepemimpinan Mahasiswa 2024',
                        'description' => 'Acara seminar tahunan untuk meningkatkan kompetensi kepemimpinan mahasiswa UPI',
                        'image' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&q=80',
                        'categoryColor' => 'bg-red-100 text-red-700',
                    ],
                    [
                        'category' => 'SOSIAL',
                        'title' => 'Program Bakti Sosial Desa Binaan',
                        'description' => 'Kegiatan pemberdayaan masyarakat desa melalui program edukasi berkelanjutan',
                        'image' => 'https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=600&q=80',
                        'categoryColor' => 'bg-yellow-100 text-yellow-700',
                    ],
                    [
                        'category' => 'ACARA',
                        'title' => 'Festival Seni dan Budaya UPI',
                        'description' => 'Merayakan keragaman budaya dengan berbagai pertunjukan seni di kampus',
                        'image' => 'https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?w=600&q=80',
                        'categoryColor' => 'bg-green-100 text-green-700',
                    ],
                ];
            @endphp
            @foreach($newsItems as $index => $item)
                <div class="animate-on-scroll group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer hover:-translate-y-2 opacity-0" style="transform: translateY(30px); transition-delay: {{ $index * 100 }}ms; display: grid; grid-template-rows: auto 1fr; height: 480px;">
                    {{-- Image --}}
                    <div class="relative overflow-hidden aspect-video">
                        <img
                            src="{{ $item['image'] }}"
                            alt="{{ $item['title'] }}"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-all duration-700"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute top-4 left-4">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-bold text-black" style="background-color: #F59E0B;">
                                {{ $item['category'] }}
                            </span>
                        </div>
                    </div>

                    {{-- Content --}}
                    <div class="p-6" style="display: grid; grid-template-rows: auto 3.5rem 3.6rem 1fr auto; gap: 0;">
                        <div class="flex items-center gap-4 text-xs text-gray-500 mb-3">
                            <span class="flex items-center gap-2">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span>15 Nov 2025</span>
                            </span>
                            <span class="flex items-center gap-2">
                                <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                <span>Admin BEM</span>
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-900 transition-colors duration-300 line-clamp-2">
                            {{ $item['title'] }}
                        </h3>

                        <p class="text-gray-600 text-sm line-clamp-3">
                            {{ $item['description'] }}
                        </p>

                        <div></div>

                        <div style="align-self: end;">
                            <a href="#" class="inline-flex items-center gap-2 text-sm font-bold group-hover:gap-3 transition-all duration-300" style="color: #37537A;">
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
