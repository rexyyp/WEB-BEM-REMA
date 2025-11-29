<section id="leadership" class="py-20 px-8 md:px-12 bg-gradient-to-br from-gray-50 via-white to-blue-50 relative overflow-hidden">
    {{-- Enhanced Animated Background Elements --}}
    <div class="absolute top-0 left-0 w-96 h-96 bg-blue-100/30 rounded-full blur-3xl morph-blob"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-100/30 rounded-full blur-3xl liquid-shape"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] opacity-20 border-morph" style="background: radial-gradient(circle, rgba(250, 204, 21, 0.1) 0%, transparent 70%); filter: blur(80px);"></div>
    
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-16 relative">
            {{-- Decorative Background --}}
            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-80 h-80 opacity-10 liquid-shape" style="background: radial-gradient(circle, rgba(250, 204, 21, 0.5) 0%, transparent 70%); filter: blur(60px); z-index: -1;"></div>
            
            <h2 class="animate-on-scroll text-4xl md:text-5xl font-black mb-6 opacity-0 transition-all duration-1000" style="transform: translateY(40px); color: #37537A;">
                Sambutan
            </h2>
            <div class="flex justify-center mt-6 gap-3">
                <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="width: 80px; height: 4px; background: linear-gradient(90deg, #37537A, #93C5FD); border-radius: 9999px; transform: translateY(40px); transition-delay: 200ms;"></div>
                <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="width: 6px; height: 6px; background-color: #37537A; border-radius: 50%; transform: translateY(40px); transition-delay: 250ms;"></div>
                <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="width: 80px; height: 4px; background: linear-gradient(90deg, #93C5FD, #FACC15); border-radius: 9999px; transform: translateY(40px); transition-delay: 300ms;"></div>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
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
                {{-- 3D Perspective Container --}}
                <div class="animate-on-scroll opacity-0" style="perspective: 1500px; transition-delay: {{ $index * 200 }}ms;">
                    <div class="card-3d-tilt-leadership bg-white rounded-3xl p-5 shadow-lg text-center group" style="transform-style: preserve-3d; will-change: transform;" data-tilt>
                        {{-- Leader Image --}}
                        <div class="relative mb-4 rounded-3xl overflow-hidden" style="transform-style: preserve-3d; aspect-ratio: 1/1;">
                            <img
                                src="{{ $leader['image'] }}"
                                alt="{{ $leader['name'] }}"
                                class="w-full h-full object-cover"
                                style="will-change: transform; backface-visibility: hidden;"
                            />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                        
                        {{-- Instagram Icon (muncul saat hover) --}}
                        <div class="absolute bottom-4 left-0 right-0 flex justify-center gap-3 opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                            <a href="https://instagram.com/{{ $index === 0 ? 'presiden_bemrema' : 'wapres_bemrema' }}" target="_blank" class="w-12 h-12 rounded-full backdrop-blur-md flex items-center justify-center hover:scale-110 transition-transform" style="background-color: rgba(255, 255, 255, 0.2);">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <h3 class="text-lg font-black mb-1 transition-colors duration-300" style="color: #37537A;">{{ $leader['name'] }}</h3>
                        <p class="text-gray-600 font-medium text-xs mb-2">{{ $leader['position'] }}</p>
                        <p class="text-gray-500 text-xs leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
