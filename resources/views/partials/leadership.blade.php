<section id="leadership" class="py-20 px-8 md:px-12 relative overflow-hidden">
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

        <div class="grid md:grid-cols-2 gap-8 max-w-7xl mx-auto">
            @php
                $leaders = [
                    [
                        'name' => 'Abu Al Ghifari',
                        'position' => 'Presiden Mahasiswa BEM REMA UPI 2025',
                        'image' => asset('build/assets/image/Presiden_Rema.jpg'),
                        'message' => 'Sebagai Presiden BEM REMA UPI 2025, saya berkomitmen untuk membangun ekosistem mahasiswa yang inklusif dan inovatif.',
                    ],
                    [
                        'name' => 'Najril Fauzan',
                        'position' => 'Wakil Presiden BEM REMA UPI 2025',
                        'image' => asset('build/assets/image/Wapres_Rema.jpg'),
                        'message' => 'Bersama Kabinet Suar Sangga, kami siap menjadi pilar yang kokoh dan cahaya yang menerangi jalan mahasiswa.',
                    ],
                ];
            @endphp
            @foreach($leaders as $index => $leader)
                {{-- 3D Perspective Container --}}
                <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="perspective: 1500px; transform: translateY(40px); transition-delay: {{ $index * 200 }}ms;">
                    <div class="card-3d-tilt-leadership bg-white rounded-3xl shadow-xl group relative overflow-hidden" style="transform-style: preserve-3d; will-change: transform;" data-tilt>
                        {{-- Gradient Background on Hover --}}
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500" style="background: linear-gradient(135deg, {{ $index === 0 ? 'rgba(250, 204, 21, 0.05)' : 'rgba(55, 83, 122, 0.05)' }}, transparent);"></div>
                        
                        {{-- Border Gradient on Hover --}}
                        <div class="absolute inset-0 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none" style="background: linear-gradient(135deg, {{ $index === 0 ? '#FACC15' : '#37537A' }}, transparent); padding: 2px;">
                            <div class="w-full h-full rounded-3xl bg-white"></div>
                        </div>
                        
                        {{-- Horizontal Content Layout Inside Card --}}
                        <div class="relative grid grid-cols-5 gap-0">
                            {{-- Image Section - Left for card 1, Right for card 2 --}}
                            <div class="col-span-2 {{ $index === 1 ? 'order-2' : '' }} relative overflow-hidden">
                                {{-- Decorative Background Shape --}}
                                <div class="absolute inset-0 opacity-10" style="background: linear-gradient(135deg, {{ $index === 0 ? '#FACC15' : '#37537A' }}, transparent);"></div>
                                
                                {{-- Image Container --}}
                                <div class="relative h-full min-h-[400px]">
                                    <img
                                        src="{{ $leader['image'] }}"
                                        alt="{{ $leader['name'] }}"
                                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
                                        style="object-position: center top; will-change: transform; backface-visibility: hidden;"
                                    />
                                    
                                    {{-- Gradient Overlay --}}
                                    <div class="absolute inset-0 bg-gradient-to-{{ $index === 0 ? 'r' : 'l' }} from-transparent via-transparent to-white/30"></div>
                                    
                                    {{-- Decorative Corner Element --}}
                                    <div class="absolute {{ $index === 0 ? 'top-6 right-6' : 'top-6 left-6' }} w-16 h-16 opacity-30 group-hover:opacity-50 transition-opacity duration-500" style="background: url('data:image/svg+xml,%3Csvg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 100 100&quot;%3E%3Ccircle cx=&quot;50&quot; cy=&quot;50&quot; r=&quot;40&quot; stroke=&quot;{{ $index === 0 ? '%23FACC15' : '%2337537A' }}&quot; stroke-width=&quot;4&quot; fill=&quot;none&quot;/%3E%3C/svg%3E') no-repeat center; background-size: contain;"></div>
                                </div>
                            </div>
                            
                            {{-- Content Section - Right for card 1, Left for card 2 --}}
                            <div class="col-span-3 {{ $index === 1 ? 'order-1' : '' }} p-8 flex flex-col justify-center relative">
                                {{-- Position Badge --}}
                                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full mb-4 self-start" style="background: linear-gradient(135deg, {{ $index === 0 ? '#FACC15' : '#37537A' }}, {{ $index === 0 ? '#F59E0B' : '#2563eb' }});">
                                    <span class="w-2 h-2 bg-white rounded-full animate-pulse"></span>
                                    <span class="text-xs font-bold uppercase tracking-wider text-white">{{ $index === 0 ? 'Presiden' : 'Wakil Presiden' }}</span>
                                </div>
                                
                                {{-- Name --}}
                                <h3 class="text-2xl md:text-3xl font-black mb-2 transition-all duration-300 group-hover:scale-105 transform origin-left" style="color: {{ $index === 0 ? '#FACC15' : '#37537A' }};">
                                    {{ $leader['name'] }}
                                </h3>
                                
                                {{-- Position Title --}}
                                <p class="text-gray-600 font-semibold text-xs mb-4 uppercase tracking-wide">
                                    BEM REMA UPI 2025
                                </p>
                                
                                {{-- Decorative Line --}}
                                <div class="w-16 h-1 rounded-full mb-4 transform group-hover:w-24 transition-all duration-500" style="background: linear-gradient(90deg, {{ $index === 0 ? '#FACC15' : '#37537A' }}, transparent);"></div>
                                
                                {{-- Message --}}
                                <p class="text-gray-700 leading-relaxed mb-6 text-sm group-hover:text-gray-900 transition-colors duration-300">
                                    {{ $leader['message'] }}
                                </p>
                                
                                {{-- Social Media --}}
                                <div class="mt-auto">
                                    <a href="https://instagram.com/{{ $index === 0 ? 'abualghifarii' : 'najrilfauzan' }}" target="_blank" 
                                       class="inline-flex items-center gap-2 px-5 py-3 rounded-xl transition-all duration-300 transform hover:scale-105 hover:-translate-y-1 shadow-md hover:shadow-xl"
                                       style="background: linear-gradient(135deg, {{ $index === 0 ? '#FACC15' : '#37537A' }}, {{ $index === 0 ? '#F59E0B' : '#2563eb' }});">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                        <span class="text-sm font-bold text-white">Instagram</span>
                                    </a>
                                </div>
                                
                                {{-- Decorative Quote Mark --}}
                                <div class="absolute {{ $index === 0 ? 'bottom-4 right-4' : 'bottom-4 left-4' }} opacity-5 pointer-events-none">
                                    <svg class="w-16 h-16" fill="{{ $index === 0 ? '#FACC15' : '#37537A' }}" viewBox="0 0 24 24">
                                        <path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
