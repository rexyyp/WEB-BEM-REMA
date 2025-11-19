<section id="leadership" class="py-32 px-4 md:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="animate-on-scroll text-5xl md:text-6xl font-black mb-6 opacity-0 transition-all duration-1000" style=" transform: translateY(40px);">
                Sambutan
            </h2>
            <div class="flex justify-center mt-4">
                <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="width: 160px; height: 4px; background-color: #37537A; border-radius: 9999px; transform: translateY(40px); transition-delay: 200ms;"></div>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
            @php
                $leaders = [
                    [
                        'name' => 'Abu Al Ghifari',
                        'position' => 'Presiden Mahasiswa BEM REMA UPI 2025',
                        'image' => asset('build/assets/image/Presiden_Rema.jpg'),
                    ],
                    [
                        'name' => 'Najril Fauzan',
                        'position' => 'Wakil Presiden BEM REMA UPI 2025',
                        'image' => asset('build/assets/image/Wapres_Rema.jpg'),
                    ],
                ];
            @endphp
            @foreach($leaders as $index => $leader)
                <div class="animate-on-scroll group opacity-0 transition-all duration-700 text-center" style="transform: scale(0.95); transition-delay: {{ $index * 200 }}ms;">
                    <div class="relative mb-8 rounded-2xl overflow-hidden hover-lift">
                        <img
                            src="{{ $leader['image'] }}"
                            alt="{{ $leader['name'] }}"
                            class="w-full aspect-square object-cover hover-scale"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </div>
                    <h3 class="text-2xl font-black text-primary mb-2">{{ $leader['name'] }}</h3>
                    <p class="text-gray-600 font-medium mb-4">{{ $leader['position'] }}</p>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
