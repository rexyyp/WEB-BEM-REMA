<section id="leadership" class="py-32 px-4 md:px-8 bg-gradient-to-br from-gray-50 via-white to-blue-50 relative overflow-hidden">
    {{-- Enhanced Animated Background Elements --}}
    <div class="absolute top-0 left-0 w-96 h-96 bg-blue-100/30 rounded-full blur-3xl morph-blob"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-100/30 rounded-full blur-3xl liquid-shape"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] opacity-20 border-morph" style="background: radial-gradient(circle, rgba(250, 204, 21, 0.1) 0%, transparent 70%); filter: blur(80px);"></div>
    
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-20 relative">
            {{-- Decorative Background --}}
            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-80 h-80 opacity-10 liquid-shape" style="background: radial-gradient(circle, rgba(250, 204, 21, 0.5) 0%, transparent 70%); filter: blur(60px); z-index: -1;"></div>
            
            <h2 class="animate-on-scroll text-5xl md:text-6xl font-black mb-6 opacity-0 transition-all duration-1000" style="transform: translateY(40px); color: #37537A;">
                Sambutan
            </h2>
            <div class="flex justify-center mt-6 gap-3">
                <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="width: 80px; height: 4px; background: linear-gradient(90deg, #FACC15, #93C5FD); border-radius: 9999px; transform: translateY(40px); transition-delay: 200ms;"></div>
                <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="width: 6px; height: 6px; background-color: #FACC15; border-radius: 50%; transform: translateY(40px); transition-delay: 250ms;"></div>
                <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="width: 80px; height: 4px; background: linear-gradient(90deg, #93C5FD, #F59E0B); border-radius: 9999px; transform: translateY(40px); transition-delay: 300ms;"></div>
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
                {{-- 3D Perspective Container --}}
                <div class="animate-on-scroll opacity-0" style="perspective: 1500px; transition-delay: {{ $index * 200 }}ms;">
                    <div class="card-3d-tilt-leadership bg-white rounded-3xl p-8 shadow-lg text-center group" style="transform-style: preserve-3d; will-change: transform;" data-tilt>
                        {{-- Leader Image --}}
                        <div class="relative mb-8 rounded-3xl overflow-hidden" style="transform-style: preserve-3d;">
                            <img
                                src="{{ $leader['image'] }}"
                                alt="{{ $leader['name'] }}"
                                class="w-full aspect-square object-cover"
                                style="will-change: transform; backface-visibility: hidden;"
                            />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
                        
                        {{-- Floating Badge --}}
                        <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-all duration-500 transform group-hover:scale-110">
                            <div class="px-4 py-2 rounded-full backdrop-blur-md" style="background-color: rgba(250, 204, 21, 0.9);">
                                <span class="text-xs font-bold text-black">LEADER</span>
                            </div>
                        </div>
                        
                        {{-- Social Media Icons (muncul saat hover) --}}
                        <div class="absolute bottom-4 left-0 right-0 flex justify-center gap-3 opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                            <a href="#" class="w-10 h-10 rounded-full backdrop-blur-md flex items-center justify-center hover:scale-110 transition-transform" style="background-color: rgba(255, 255, 255, 0.2);">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full backdrop-blur-md flex items-center justify-center hover:scale-110 transition-transform" style="background-color: rgba(255, 255, 255, 0.2);">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full backdrop-blur-md flex items-center justify-center hover:scale-110 transition-transform" style="background-color: rgba(255, 255, 255, 0.2);">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm4.441 16.892c-2.102.144-6.784.144-8.883 0C5.282 16.736 5.017 15.622 5 12c.017-3.629.285-4.736 2.558-4.892 2.099-.144 6.782-.144 8.883 0C18.718 7.264 18.982 8.378 19 12c-.018 3.629-.285 4.736-2.559 4.892zM10 9.658l4.917 2.338L10 14.342V9.658z"/></svg>
                            </a>
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <h3 class="text-2xl font-black mb-2 transition-colors duration-300" style="color: #37537A;">{{ $leader['name'] }}</h3>
                        <p class="text-gray-600 font-medium mb-4">{{ $leader['position'] }}</p>
                        <p class="text-gray-500 text-sm leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                        </p>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
