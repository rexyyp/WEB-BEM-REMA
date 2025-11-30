<section id="about" class="relative py-20 px-8 md:px-12 overflow-hidden">
    {{-- Compass/Triangle Geometric Accents (from Logo) --}}
    <div class="absolute top-20 right-20 w-40 h-40 opacity-[0.03] pointer-events-none" style="background: url('data:image/svg+xml,%3Csvg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 100 100&quot;%3E%3Cpolygon points=&quot;50,5 95,85 5,85&quot; fill=&quot;none&quot; stroke=&quot;%2337537A&quot; stroke-width=&quot;2&quot;/%3E%3Cpolygon points=&quot;50,15 80,75 20,75&quot; fill=&quot;none&quot; stroke=&quot;%23FACC15&quot; stroke-width=&quot;1.5&quot;/%3E%3C/svg%3E') no-repeat center; background-size: contain;"></div>
    <div class="absolute bottom-32 left-16 w-32 h-32 opacity-[0.03] pointer-events-none" style="background: url('data:image/svg+xml,%3Csvg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 100 100&quot;%3E%3Cpolygon points=&quot;20,50 50,20 80,50 50,80&quot; fill=&quot;none&quot; stroke=&quot;%232563eb&quot; stroke-width=&quot;2&quot;/%3E%3C/svg%3E') no-repeat center; background-size: contain;"></div>
    
    {{-- Organic Doodle Shapes (Playful) --}}
    <div class="absolute top-10 right-10 w-32 h-32 opacity-5 pointer-events-none" style="background: url('data:image/svg+xml,%3Csvg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 100 100&quot;%3E%3Cpath d=&quot;M50 10 Q70 30 50 50 T50 90&quot; stroke=&quot;%23FACC15&quot; stroke-width=&quot;4&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot;/%3E%3Ccircle cx=&quot;50&quot; cy=&quot;50&quot; r=&quot;8&quot; fill=&quot;%2337537A&quot;/%3E%3C/svg%3E') no-repeat center; background-size: contain;"></div>
    <div class="absolute bottom-20 left-10 w-24 h-24 opacity-5 pointer-events-none" style="background: url('data:image/svg+xml,%3Csvg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 100 100&quot;%3E%3Cpath d=&quot;M20 50 L50 20 L80 50 L50 80 Z&quot; stroke=&quot;%2337537A&quot; stroke-width=&quot;3&quot; fill=&quot;none&quot; stroke-linejoin=&quot;round&quot;/%3E%3C/svg%3E') no-repeat center; background-size: contain;"></div>
    
    {{-- Decorative Background Particles --}}
    <div class="absolute top-20 left-10 w-2 h-2 rounded-full particle-drift" style="background: rgba(250, 204, 21, 0.6);"></div>
    <div class="absolute top-40 right-20 w-3 h-3 rounded-full particle-drift" style="background: rgba(147, 197, 253, 0.6); animation-delay: 2s;"></div>
    <div class="absolute bottom-40 left-1/4 w-2 h-2 rounded-full particle-drift" style="background: rgba(245, 158, 11, 0.6); animation-delay: 4s;"></div>
    <div class="absolute bottom-20 right-1/3 w-3 h-3 rounded-full particle-drift" style="background: rgba(55, 83, 122, 0.4); animation-delay: 6s;"></div>
    <div class="absolute top-1/2 left-1/2 w-96 h-96 morph-blob opacity-3" style="background: radial-gradient(circle, rgba(250, 204, 21, 0.1) 0%, transparent 70%); filter: blur(100px); transform: translate(-50%, -50%); z-index: 0;"></div>
    
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="grid md:grid-cols-2 gap-12 lg:gap-20 items-start">
            {{-- Left Content --}}
            <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="transform: translateY(40px);">
                {{-- Badge --}}
                <div class="mb-6">
                    <div class="inline-block px-4 py-2 rounded-full border transition-all duration-300 cursor-pointer" style="background-color: #FACC15; border-color: #FACC15;">
                        <p class="text-xs font-bold uppercase tracking-wider text-black">Tentang Kami</p>
                    </div>
                </div>

                <h2 class="text-4xl md:text-5xl font-black mb-8 leading-tight">
                    <span class="inline-block animate-slide-in-left text-black">Membangun</span>
                    <span class="inline-block animate-slide-in-left text-black" style="animation-delay: 0.1s;">Masa</span>
                    <span class="inline-block animate-slide-in-left text-black" style="animation-delay: 0.2s;">Depan</span>
                    <br>
                    <span style="color: #37537A;">Mahasiswa Indonesia</span>
                </h2>

                <p class="text-base md:text-lg text-gray-600 mb-8 leading-relaxed font-light">
                    BEM REMA UPI adalah organisasi mahasiswa yang berkontribusi untuk meningkatkan potensi mahasiswa melalui berbagai program inovatif dan pemberdayaan yang berkelanjutan.
                </p>

                {{-- Stats Grid --}}
                <div class="grid grid-cols-3 gap-3">
                    @php
                        $stats = [
                            ['number' => '15+', 'label' => 'Kementerian'],
                            ['number' => '50+', 'label' => 'Pengurus'],
                            ['number' => '100+', 'label' => 'Program'],
                        ];
                    @endphp
                    @foreach($stats as $index => $stat)
                        <div class="p-3 rounded-xl bg-gradient-to-br from-white to-gray-50 border-2 hover:shadow-2xl transition-all duration-500 group cursor-pointer overflow-hidden relative bounce-entrance" style="border-color: #e5e7eb; animation-delay: {{ $index * 0.2 }}s;" onmouseover="this.style.borderColor='#FACC15'; this.style.transform='translateY(-8px)'" onmouseout="this.style.borderColor='#e5e7eb'; this.style.transform='translateY(0)'">
                            {{-- Animated Background Gradient --}}
                            <div class="absolute inset-0 transition-all duration-700 opacity-0 group-hover:opacity-100" style="background: linear-gradient(135deg, rgba(250, 204, 21, 0.1) 0%, rgba(147, 197, 253, 0.1) 100%);"></div>
                            
                            {{-- Shimmer Effect --}}
                            <div class="absolute inset-0 shimmer opacity-0 group-hover:opacity-100 pointer-events-none"></div>
                            
                            {{-- Icon Background --}}
                            <div class="absolute -right-4 -bottom-4 w-20 h-20 rounded-full opacity-10 group-hover:opacity-20 transition-all duration-500 group-hover:scale-150" style="background-color: #FACC15;"></div>
                            
                            <div class="relative z-10">
                                <div class="text-2xl font-black mb-1 group-hover:scale-125 transition-all duration-500 float-animation" style="color: #FACC15; text-shadow: 0 2px 4px rgba(250, 204, 21, 0.2);">
                                    {{ $stat['number'] }}
                                </div>
                                <p class="text-xs font-bold text-gray-600 group-hover:text-gray-900 transition-colors duration-300 uppercase tracking-wide">
                                    {{ $stat['label'] }}
                                </p>
                            </div>
                            
                            {{-- Decorative Corner --}}
                            <div class="absolute top-0 right-0 w-8 h-8 opacity-0 group-hover:opacity-100 transition-all duration-500">
                                <div class="w-full h-full rounded-bl-full" style="background: linear-gradient(135deg, #FACC15 0%, transparent 100%);"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Right Image --}}
            <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="transform: translateX(40px);">
                <div class="relative group h-full flex items-stretch">
                    {{-- Animated Border Gradient --}}
                    <div class="absolute -inset-1 bg-gradient-to-r from-yellow-400 via-blue-500 to-yellow-400 rounded-3xl blur-2xl opacity-30 group-hover:opacity-60 transition-all duration-700 animate-gradient-rotate"></div>
                    
                    {{-- Floating Glow Effect --}}
                    <div class="absolute -inset-4 rounded-3xl opacity-0 group-hover:opacity-100 transition-all duration-700" style="background: radial-gradient(circle at center, rgba(250, 204, 21, 0.15), transparent 70%); filter: blur(20px);"></div>
                    
                    {{-- Decorative Frame Border --}}
                    <div class="absolute inset-0 rounded-3xl border-4 opacity-50 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none" style="border-color: rgba(250, 204, 21, 0.3); box-shadow: inset 0 0 30px rgba(250, 204, 21, 0.1);"></div>
                    
                    {{-- Image Container with Tilt Effect --}}
                    <div class="relative overflow-hidden rounded-3xl shadow-2xl transition-all duration-500 group-hover:shadow-[0_25px_60px_-12px_rgba(250,204,21,0.4)] image-tilt-container w-full" style="border: 6px solid white; box-shadow: 0 20px 50px rgba(0,0,0,0.15);">
                        <img
                            src="{{ asset('build/assets/image/Team Rema.jpg') }}"
                            alt="BEM REMA UPI Team"
                            class="w-full h-full object-cover transition-all duration-700 group-hover:scale-110"
                            style="image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;"
                        />
                        
                        {{-- Overlay Gradient on Hover --}}
                        <div class="absolute inset-0 bg-gradient-to-tr from-yellow-400/20 via-transparent to-blue-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        {{-- Shine Effect --}}
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                            <div class="absolute inset-0 shine-effect"></div>
                        </div>
                        
                        {{-- Corner Accents --}}
                        <div class="absolute top-2 left-2 w-20 h-20 border-t-4 border-l-4 rounded-tl-2xl opacity-0 group-hover:opacity-100 transition-all duration-500 transform -translate-x-2 -translate-y-2 group-hover:translate-x-0 group-hover:translate-y-0" style="border-color: #FACC15;"></div>
                        <div class="absolute bottom-2 right-2 w-20 h-20 border-b-4 border-r-4 rounded-br-2xl opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 translate-y-2 group-hover:translate-x-0 group-hover:translate-y-0" style="border-color: #37537A;"></div>
                        
                        {{-- Inner Frame Decoration --}}
                        <div class="absolute top-4 left-4 w-12 h-12 opacity-20 pointer-events-none" style="background: url('data:image/svg+xml,%3Csvg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 100 100&quot;%3E%3Ccircle cx=&quot;50&quot; cy=&quot;50&quot; r=&quot;40&quot; stroke=&quot;%23FACC15&quot; stroke-width=&quot;3&quot; fill=&quot;none&quot;/%3E%3C/svg%3E') no-repeat center; background-size: contain;"></div>
                        <div class="absolute bottom-4 right-4 w-12 h-12 opacity-20 pointer-events-none" style="background: url('data:image/svg+xml,%3Csvg xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 100 100&quot;%3E%3Cpolygon points=&quot;50,10 90,90 10,90&quot; stroke=&quot;%2337537A&quot; stroke-width=&quot;3&quot; fill=&quot;none&quot;/%3E%3C/svg%3E') no-repeat center; background-size: contain;"></div>
                    </div>
                    
                    {{-- Floating Particles Around Image --}}
                    <div class="absolute top-10 -left-4 w-4 h-4 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-700" style="background: #FACC15; animation: float-particle-side 3s ease-in-out infinite;"></div>
                    <div class="absolute top-1/3 -right-4 w-3 h-3 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-700" style="background: #37537A; animation: float-particle-side 3s ease-in-out infinite; animation-delay: 1s;"></div>
                    <div class="absolute bottom-20 -left-6 w-5 h-5 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-700" style="background: rgba(147, 197, 253, 0.8); animation: float-particle-side 3s ease-in-out infinite; animation-delay: 2s;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.is-visible {
    opacity: 1 !important;
    transform: translate(0, 0) !important;
}

/* Image 3D Tilt Effect */
.image-tilt-container {
    transform-style: preserve-3d;
    perspective: 1000px;
}

.image-tilt-container:hover {
    transform: rotateY(-5deg) rotateX(5deg) scale(1.02);
}

/* Animated Gradient Rotation */
@keyframes gradient-rotate {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

.animate-gradient-rotate {
    background-size: 200% 200%;
    animation: gradient-rotate 4s ease infinite;
}

/* Shine Effect Sweep */
.shine-effect {
    background: linear-gradient(
        120deg,
        transparent 0%,
        transparent 40%,
        rgba(255, 255, 255, 0.8) 50%,
        transparent 60%,
        transparent 100%
    );
    background-size: 200% 100%;
    animation: shine-sweep 3s ease-in-out infinite;
}

@keyframes shine-sweep {
    0% {
        background-position: -200% 0;
    }
    100% {
        background-position: 200% 0;
    }
}

/* Floating Particles Around Image */
@keyframes float-particle-side {
    0%, 100% {
        transform: translate(0, 0) scale(1);
        opacity: 0.6;
    }
    25% {
        transform: translate(10px, -10px) scale(1.2);
        opacity: 1;
    }
    50% {
        transform: translate(-5px, -20px) scale(0.9);
        opacity: 0.8;
    }
    75% {
        transform: translate(15px, -15px) scale(1.1);
        opacity: 0.9;
    }
}

/* Pulse Effect for Image Container */
@keyframes pulse-glow {
    0%, 100% {
        box-shadow: 0 0 20px rgba(250, 204, 21, 0.3);
    }
    50% {
        box-shadow: 0 0 40px rgba(250, 204, 21, 0.6);
    }
}

.group:hover .image-tilt-container {
    animation: pulse-glow 2s ease-in-out infinite;
}

/* Smooth Transitions */
* {
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
</style>
