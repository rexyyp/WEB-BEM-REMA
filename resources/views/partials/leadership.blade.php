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
                <div class="animate-on-scroll group opacity-0 transition-all duration-700 text-center" style="transform: scale(0.95); transition-delay: {{ $index * 200 }}ms;">
                    <div class="relative mb-8 rounded-2xl overflow-hidden hover-lift card-3d">
                        <img
                            src="{{ $leader['image'] }}"
                            alt="{{ $leader['name'] }}"
                            class="w-full aspect-square object-cover hover-scale"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                        
                        {{-- Decorative corner elements --}}
                        <div class="absolute top-4 left-4 w-12 h-12 border-t-4 border-l-4 border-yellow-400 opacity-0 group-hover:opacity-100 transition-all duration-500 transform -translate-x-2 -translate-y-2 group-hover:translate-x-0 group-hover:translate-y-0"></div>
                        <div class="absolute bottom-4 right-4 w-12 h-12 border-b-4 border-r-4 border-yellow-400 opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 translate-y-2 group-hover:translate-x-0 group-hover:translate-y-0"></div>
                        
                        {{-- Quote icon --}}
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-all duration-500 scale-0 group-hover:scale-100">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-black text-primary mb-2 group-hover:text-yellow-600 transition-colors duration-300">{{ $leader['name'] }}</h3>
                    <p class="text-gray-600 font-medium mb-4">{{ $leader['position'] }}</p>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
