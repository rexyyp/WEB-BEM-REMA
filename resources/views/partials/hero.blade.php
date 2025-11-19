{{-- Hero Section --}}
<div class="relative w-full overflow-hidden flex items-center justify-center pt-20 pb-20"
     style="height: 100vh; background-image: url('{{ asset('build/assets/image/Isola.png') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
    
    {{-- Dark overlay with gradient --}}
    <div style="position: absolute; inset: 0; background: linear-gradient(to right, rgba(10, 37, 64, 0.85) 0%, rgba(10, 37, 64, 0.65) 50%, rgba(10, 37, 64, 0.75) 100%); z-index: 1;"></div>

    {{-- Animated floating particles --}}
    <div class="particles-container" style="position: absolute; inset: 0; z-index: 2; pointer-events: none;">
        <div class="particle" style="position: absolute; top: 20%; left: 10%; width: 4px; height: 4px; background: rgba(255, 255, 255, 0.5); border-radius: 50%; animation: float-particle 15s infinite ease-in-out;"></div>
        <div class="particle" style="position: absolute; top: 50%; right: 15%; width: 6px; height: 6px; background: rgba(252, 211, 77, 0.6); border-radius: 50%; animation: float-particle 12s infinite ease-in-out 2s;"></div>
        <div class="particle" style="position: absolute; bottom: 30%; left: 20%; width: 5px; height: 5px; background: rgba(255, 255, 255, 0.4); border-radius: 50%; animation: float-particle 18s infinite ease-in-out 4s;"></div>
        <div class="particle" style="position: absolute; top: 70%; right: 25%; width: 3px; height: 3px; background: rgba(252, 211, 77, 0.5); border-radius: 50%; animation: float-particle 20s infinite ease-in-out 6s;"></div>
    </div>

    {{-- Animated blob backgrounds --}}
    <div style="position: absolute; top: -100px; right: 10%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(252, 211, 77, 0.15) 0%, transparent 70%); border-radius: 9999px; filter: blur(80px); opacity: 0.8; animation: float-blob 8s ease-in-out infinite; z-index: 2;"></div>
    <div style="position: absolute; bottom: -150px; left: -100px; width: 600px; height: 600px; background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 0%, transparent 70%); border-radius: 9999px; filter: blur(100px); opacity: 0.6; animation: glow-blob 10s ease-in-out infinite; z-index: 2;"></div>

    {{-- Main content --}}
    <div class="relative z-10 w-full max-w-7xl px-6 md:px-12 lg:px-16">
        <div class="max-w-4xl">
            {{-- Badge with animation --}}
            <div class="inline-block mb-8 badge-slide-right" style="animation-delay: 0s;">
                <div style="display: inline-block; padding: 12px 32px; background-color: #FACC15; border-radius: 50px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);">
                    <span style="color: #000000; font-size: 15px; font-weight: 700; font-family: 'Poppins', sans-serif; display: block; text-align: center; letter-spacing: 0.05em; text-transform: uppercase;">KABINET SUAR SANGGA 2025</span>
                </div>
            </div>

            {{-- Main heading with staggered animation --}}
            <div class="mb-8">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white leading-tight mb-4" style="font-family: 'Poppins', sans-serif;">
                    <span class="block hero-text-reveal" style="animation-delay: 0.2s;">BADAN EKSEKUTIF</span>
                    <span class="block bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-200 bg-clip-text text-transparent hero-text-reveal" style="animation-delay: 0.4s;">
                        MAHASISWA
                    </span>
                    <span class="block hero-text-reveal" style="animation-delay: 0.6s;">REPUBLIK</span>
                    <span class="block hero-text-reveal" style="animation-delay: 0.8s;">MAHASISWA UPI</span>
                </h1>
                
                {{-- Tagline with fade-in animation --}}
                <p class="text-lg md:text-xl text-white font-light leading-relaxed max-w-2xl hero-text-reveal" style="animation-delay: 1s; font-family: 'Poppins', sans-serif;">
                    'Bergerak Berdampak, Melangkah Terarah' 
                </p>
            </div>

           {{-- CTA Buttons with hover effects --}}
            <div class="flex flex-wrap gap-4">
                <a href="#about" class="cta-btn group hero-text-reveal" style="text-decoration: none; animation-delay: 1.2s;">
                    <div class="cta-btn-inner" style="position: relative; display: inline-block; padding: 14px 40px; background: transparent; border: 3px solid #FACC15; border-radius: 12px; cursor: pointer; overflow: hidden; transition: all 0.3s ease;">
                        <span class="cta-text" style="position: relative; z-index: 10; color: #FACC15; font-size: 16px; font-weight: 900; font-family: 'Poppins', sans-serif; display: block; text-align: center;">Tentang Kami</span>
                        <div class="cta-bg" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(250, 204, 21, 0.07); opacity: 0; transition: opacity 0.3s ease; z-index: 1; border-radius: 12px;"></div>
                    </div>
                </a>
                <a href="#news" class="cta-btn group hero-text-reveal" style="text-decoration: none; animation-delay: 1.4s;">
                    <div class="cta-btn-inner" style="position: relative; display: inline-block; padding: 14px 40px; background: transparent; border: 3px solid #FACC15; border-radius: 12px; cursor: pointer; overflow: hidden; transition: all 0.3s ease;">
                        <span class="cta-text" style="position: relative; z-index: 10; color: #FACC15; font-size: 16px; font-weight: 900; font-family: 'Poppins', sans-serif; display: block; text-align: center;">Berita Terbaru</span>
                        <div class="cta-bg" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(250, 204, 21, 0.07); opacity: 0; transition: opacity 0.3s ease; z-index: 1; border-radius: 12px;"></div>
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

.cta-btn:hover .cta-text {
    color: #FACC15 !important;
}
</style>

