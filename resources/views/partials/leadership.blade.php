<section id="leadership" class="py-32 px-4 md:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="animate-on-scroll text-5xl md:text-6xl font-black text-primary mb-6 opacity-0 transition-all duration-1000" style="transform: translateY(40px);">
                Kepemimpinan Kami
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
            @php
                $leaders = [
                    [
                        'name' => 'Abu Al Ghifari',
                        'position' => 'Presiden Mahasiswa BEM REMA UPI 2025',
                        'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&q=80',
                    ],
                    [
                        'name' => 'Najril Fauzan',
                        'position' => 'Wakil Presiden BEM REMA UPI 2025',
                        'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=600&q=80',
                    ],
                ];
            @endphp
            @foreach($leaders as $index => $leader)
                <div class="animate-on-scroll group opacity-0 transition-all duration-700" style="transform: scale(0.95); transition-delay: {{ $index * 200 }}ms;">
                    <div class="relative mb-8 rounded-2xl overflow-hidden hover-lift">
                        <img
                            src="{{ $leader['image'] }}"
                            alt="{{ $leader['name'] }}"
                            class="w-full aspect-square object-cover hover-scale"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </div>
                    <h3 class="text-2xl font-black text-primary mb-2">{{ $leader['name'] }}</h3>
                    <p class="text-gray-600 font-medium">{{ $leader['position'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
