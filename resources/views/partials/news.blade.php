<section id="news" class="py-32 px-4 md:px-8 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="animate-on-scroll text-5xl md:text-6xl font-black text-primary mb-6 opacity-0 transition-all duration-1000" style="transform: translateY(40px);">
                Berita & Publikasi
            </h2>
            <p class="animate-on-scroll text-xl text-gray-600 font-light opacity-0 transition-all duration-1000" style="transform: translateY(40px); transition-delay: 200ms;">
                Kabar terbaru dan cerita inspiratif dari BEM REMA UPI
            </p>
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
                <div class="animate-on-scroll group overflow-hidden rounded-2xl bg-white shadow-md hover-lift opacity-0 transition-all duration-700" style="transform: translateY(40px); transition-delay: {{ $index * 150 }}ms;">
                    {{-- Image --}}
                    <div class="relative h-56 overflow-hidden bg-gray-200">
                        <img
                            src="{{ $item['image'] }}"
                            alt="{{ $item['title'] }}"
                            class="w-full h-full object-cover hover-scale"
                        />
                    </div>

                    {{-- Content --}}
                    <div class="p-6">
                        <div class="inline-block px-3 py-1 rounded-lg text-xs font-black mb-4 {{ $item['categoryColor'] }}">
                            {{ $item['category'] }}
                        </div>

                        <h3 class="text-xl font-black text-primary mb-3 line-clamp-2 group-hover:text-accent transition-colors">
                            {{ $item['title'] }}
                        </h3>

                        <p class="text-gray-600 text-sm mb-6 line-clamp-2 font-light">
                            {{ $item['description'] }}
                        </p>

                        <button class="text-accent font-bold text-sm hover:text-primary transition-colors flex items-center gap-2 group-hover:gap-3">
                            Baca Selengkapnya
                            <span class="transition-transform">→</span>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
