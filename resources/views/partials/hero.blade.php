{{-- Hero Section --}}
<div class="relative w-full overflow-hidden flex items-center justify-center pt-32 pb-20"
     style="min-height: 100vh; background-image: url('{{ asset('build/assets/image/hero-bem.jpeg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
    
    {{-- Dark overlay with gradient --}}
    <div style="position: absolute; inset: 0; background: linear-gradient(to right, rgba(10, 37, 64, 0.85) 0%, rgba(10, 37, 64, 0.65) 50%, rgba(10, 37, 64, 0.75) 100%); z-index: 1;"></div>

    {{-- Animated floating particles --}}
    <div class="particles-container" style="position: absolute; inset: 0; z-index: 2; pointer-events: none;">
        <div class="particle" style="position: absolute; top: 20%; left: 10%; width: 4px; height: 4px; background: rgba(255, 255, 255, 0.5); border-radius: 50%; animation: float-particle 15s infinite ease-in-out;"></div>
        <div class="particle" style="position: absolute; top: 50%; right: 15%; width: 6px; height: 6px; background: rgba(252, 211, 77, 0.6); border-radius: 50%; animation: float-particle 12s infinite ease-in-out 2s;"></div>
        <div class="particle" style="position: absolute; bottom: 30%; left: 20%; width: 5px; height: 5px; background: rgba(255, 255, 255, 0.4); border-radius: 50%; animation: float-particle 18s infinite ease-in-out 4s;"></div>
        <div class="particle" style="position: absolute; top: 70%; right: 25%; width: 3px; height: 3px; background: rgba(252, 211, 77, 0.5); border-radius: 50%; animation: float-particle 20s infinite ease-in-out 6s;"></div>
    </div>

    {{-- Animated blob backgrounds with premium effects --}}
    <div class="morph-blob" style="position: absolute; top: -100px; right: 10%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(252, 211, 77, 0.15) 0%, transparent 70%); filter: blur(80px); opacity: 0.8; z-index: 2;"></div>
    <div class="liquid-shape" style="position: absolute; bottom: -150px; left: -100px; width: 600px; height: 600px; background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 0%, transparent 70%); filter: blur(100px); opacity: 0.6; z-index: 2;"></div>
    <div class="border-morph" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 800px; height: 800px; background: radial-gradient(circle, rgba(250, 204, 21, 0.05) 0%, transparent 70%); filter: blur(120px); opacity: 0.4; z-index: 2;"></div>
    
    {{-- Wave Effect at Bottom --}}
    <div class="absolute bottom-0 left-0 right-0 h-32 z-3 wave-effect opacity-20" style="background: linear-gradient(180deg, transparent 0%, rgba(250, 204, 21, 0.3) 100%);"></div>

    {{-- Main content --}}
    <div class="relative z-10 w-full max-w-7xl mx-auto px-6 md:px-8">
        <div class="max-w-4xl">
            {{-- Enhanced Badge with premium design --}}
            <div class="inline-block mb-8 badge-slide-right" style="animation-delay: 0s;">
                <div class="relative group" style="display: inline-block;">
                    {{-- Glow effect --}}
                    <div class="absolute -inset-1 bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-400 rounded-full blur opacity-40 group-hover:opacity-75 transition duration-500"></div>
                    {{-- Main badge --}}
                    <div class="relative" style="padding: 10px 28px; background: linear-gradient(135deg, #FACC15 0%, #F59E0B 100%); border-radius: 50px; box-shadow: 0 8px 25px rgba(250, 204, 21, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.3);">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span style="color: #000000; font-size: 13px; font-weight: 800; font-family: 'Poppins', sans-serif; letter-spacing: 0.1em; text-transform: uppercase;">Kabinet Suar Sangga 2025</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Main heading with staggered animation --}}
            <div class="mb-8 relative">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black leading-tight mb-4" style="font-family: 'Poppins', sans-serif;">
                    <span class="block hero-text-reveal text-white" style="animation-delay: 0.2s;">BADAN EKSEKUTIF</span>
                    <span class="block gradient-text hero-text-reveal" style="animation-delay: 0.4s; background: linear-gradient(90deg, #FACC15, #F59E0B, #FACC15); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                        MAHASISWA
                    </span>
                    <span class="block hero-text-reveal text-white" style="animation-delay: 0.6s;">REPUBLIK</span>
                    <span class="block hero-text-reveal text-white" style="animation-delay: 0.8s;">MAHASISWA UPI</span>
                </h1>
                
                {{-- Tagline with fade-in animation --}}
                <p class="text-lg md:text-xl text-white font-light leading-relaxed max-w-2xl hero-text-reveal" style="animation-delay: 1s; font-family: 'Poppins', sans-serif; text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);">
                    'Bergerak Berdampak, Melangkah Terarah' 
                </p>
                
                {{-- Decorative Line --}}
                <div class="absolute -left-6 top-1/2 transform -translate-y-1/2 w-1 h-32 opacity-30" style="background: linear-gradient(180deg, transparent, #FACC15, transparent);"></div>
            </div>

           {{-- CTA Buttons with enhanced hover effects --}}
            <div class="flex flex-wrap gap-4">
                <a href="#about" class="cta-btn group hero-text-reveal magnetic-effect" style="text-decoration: none; animation-delay: 1.2s;">
                    <div class="cta-btn-inner relative" style="display: inline-block; padding: 16px 42px; background: #FACC15; border: 3px solid #FACC15; border-radius: 12px; cursor: pointer; overflow: hidden; transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55); box-shadow: 0 4px 15px rgba(250, 204, 21, 0.4);">
                        <span class="cta-text relative z-10 group-hover:scale-110 transition-transform duration-300" style="color: #000000; font-size: 16px; font-weight: 900; font-family: 'Poppins', sans-serif; display: block; text-align: center;">Tentang Kami</span>
                        <div class="cta-bg absolute inset-0 group-hover:scale-150 transition-all duration-500" style="background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%); opacity: 0; z-index: 1; border-radius: 12px;"></div>
                        <div class="absolute inset-0 shimmer opacity-0 group-hover:opacity-100"></div>
                    </div>
                </a>
                <a href="#news" class="cta-btn group hero-text-reveal magnetic-effect" style="text-decoration: none; animation-delay: 1.4s;">
                    <div class="cta-btn-inner relative" style="display: inline-block; padding: 16px 42px; background: transparent; border: 3px solid #FACC15; border-radius: 12px; cursor: pointer; overflow: hidden; transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);">
                        <span class="cta-text relative z-10 group-hover:scale-110 transition-transform duration-300" style="color: #FACC15; font-size: 16px; font-weight: 900; font-family: 'Poppins', sans-serif; display: block; text-align: center; text-shadow: 0 0 10px rgba(250, 204, 21, 0.5);">Berita Terbaru</span>
                        <div class="cta-bg absolute inset-0 group-hover:scale-150 transition-all duration-500" style="background: radial-gradient(circle, rgba(250, 204, 21, 0.15) 0%, transparent 70%); opacity: 0; z-index: 1; border-radius: 12px;"></div>
                        <div class="absolute inset-0 shimmer opacity-0 group-hover:opacity-100"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Modern Animations --}}
<style>
/* Badge slide from left animation */
.badge-slide-right {
    opacity: 0;
    transform: translateX(-50px);
    animation: slideRight 0.8s ease-out forwards;
}

@keyframes slideRight {
    0% {
        opacity: 0;
        transform: translateX(-50px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Hero text reveal animation */
.hero-text-reveal {
    opacity: 0;
    transform: translateY(30px);
    animation: textReveal 0.8s ease-out forwards;
}

@keyframes textReveal {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Button hover animations */
.cta-btn:hover .cta-bg {
    opacity: 1 !important;
}

.cta-btn:hover .cta-btn-inner {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(250, 204, 21, 0.5);
}

/* Tombol Tentang Kami hover - background putih */
.cta-btn:first-child:hover .cta-btn-inner {
    background: #FFFFFF !important;
    border-color: #FFFFFF !important;
}

.cta-btn:first-child:hover .cta-text {
    color: #37537A !important;
}

/* Tombol Berita Terbaru tetap sama */
.cta-btn:last-child:hover .cta-text {
    color: #FACC15 !important;
}
</style>

