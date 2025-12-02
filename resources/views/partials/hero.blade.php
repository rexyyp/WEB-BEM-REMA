{{-- Hero Section --}}
<div class="relative w-full overflow-hidden flex items-center justify-center pt-20 md:pt-32 pb-12 md:pb-20 px-4"
     style="min-height: 100vh; background-image: url('{{ asset('build/assets/image/hero-bem.jpeg') }}'); background-size: cover; background-position: center; background-attachment: scroll;">
    
    {{-- Strong Gradient Overlay - Dark Left to Transparent Right --}}
    <div style="position: absolute; inset: 0; background: linear-gradient(to right, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.9) 50%, rgba(15, 23, 42, 0.85) 100%); z-index: 1;"></div>

    {{-- Giant Ghost Outline Text Animation - Hidden on Mobile --}}
    <div class="ghost-text-container hidden md:flex" style="position: absolute; inset: 0; z-index: 2; overflow: hidden; pointer-events: none; flex-direction: column; justify-content: space-around; padding: 8rem 0 2rem 0;">
        {{-- Row 1 --}}
        <div class="ghost-text-scroll" style="white-space: nowrap; animation: ghost-scroll 20s linear infinite;">
            <span style="font-size: 6rem; font-weight: 900; color: transparent; -webkit-text-stroke: 2px rgba(255, 255, 255, 0.10); font-family: 'Poppins', sans-serif; letter-spacing: 0.05em;">
                BERGERAK BERDAMPAK  ✦  MELANGKAH TERARAH  ✦  BERGERAK BERDAMPAK  ✦  MELANGKAH TERARAH  ✦  
            </span>
        </div>
        {{-- Row 2 (opposite direction) --}}
        <div class="ghost-text-scroll-reverse" style="white-space: nowrap; animation: ghost-scroll-reverse 20s linear infinite;">
            <span style="font-size: 6rem; font-weight: 900; color: transparent; -webkit-text-stroke: 2px rgba(255, 255, 255, 0.10); font-family: 'Poppins', sans-serif; letter-spacing: 0.05em;">
                MELANGKAH TERARAH  ✦  BERGERAK BERDAMPAK  ✦  MELANGKAH TERARAH  ✦  BERGERAK BERDAMPAK  ✦  
            </span>
        </div>
        {{-- Row 3 --}}
        <div class="ghost-text-scroll" style="white-space: nowrap; animation: ghost-scroll 20s linear infinite; animation-delay: -7s;">
            <span style="font-size: 6rem; font-weight: 900; color: transparent; -webkit-text-stroke: 2px rgba(255, 255, 255, 0.10); font-family: 'Poppins', sans-serif; letter-spacing: 0.05em;">
                BERGERAK BERDAMPAK  ✦  MELANGKAH TERARAH  ✦  BERGERAK BERDAMPAK  ✦  MELANGKAH TERARAH  ✦  
            </span>
        </div>
        {{-- Row 4 (opposite direction) --}}
        <div class="ghost-text-scroll-reverse" style="white-space: nowrap; animation: ghost-scroll-reverse 20s linear infinite; animation-delay: -14s;">
            <span style="font-size: 6rem; font-weight: 900; color: transparent; -webkit-text-stroke: 2px rgba(255, 255, 255, 0.10); font-family: 'Poppins', sans-serif; letter-spacing: 0.05em;">
                MELANGKAH TERARAH  ✦  BERGERAK BERDAMPAK  ✦  MELANGKAH TERARAH  ✦  BERGERAK BERDAMPAK  ✦  
            </span>
        </div>
    </div>

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
    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <div class="w-full md:max-w-[55%] text-left md:ml-[5%]">
            {{-- Top Label - Minimalist Tech --}}
            <div class="text-xs sm:text-sm font-medium uppercase mb-4 sm:mb-5 md:mb-8 block border-l-2 sm:border-l-3 pl-2 sm:pl-3" style="letter-spacing: 2px; color: #F1C40F; border-color: #F1C40F; animation: slideRight 0.8s ease-out forwards; font-family: 'Montserrat', sans-serif;">
                Kabinet Suar Sangga 2025
            </div>

            {{-- Main Heading with Clean Typography --}}
            <div class="mb-6 md:mb-8">
                {{-- Line 1: Badan Eksekutif - Readable Serif --}}
                <div class="hero-text-reveal text-xl sm:text-2xl md:text-4xl lg:text-5xl font-semibold text-white leading-tight mb-1" style="animation-delay: 0.2s; font-family: 'Merriweather', serif; text-transform: capitalize;">
                    Badan Eksekutif
                </div>
                
                {{-- Line 2: MAHASISWA - Dominant Visual Anchor --}}
                <div class="hero-text-reveal text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-bold leading-none tracking-tight uppercase mb-1 sm:mb-2" style="animation-delay: 0.4s; color: #F1C40F; text-shadow: 0 0 40px rgba(241, 196, 15, 0.3); font-family: 'Oswald', sans-serif;">
                    MAHASISWA
                </div>
                
                {{-- Line 3: REPUBLIK MAHASISWA UPI - Cinematic Wide Spacing --}>
                <div class="hero-text-reveal text-[0.65rem] sm:text-xs md:text-base lg:text-lg font-medium text-white uppercase leading-tight mt-1 sm:mt-2" style="animation-delay: 0.6s; letter-spacing: 2px; font-family: 'Montserrat', sans-serif;">
                    REPUBLIK MAHASISWA UPI
                </div>
                
                {{-- Cabinet Tagline - Elegant Subtitle --}}
                <div class="hero-text-reveal mt-6 sm:mt-8 md:mt-10" style="animation-delay: 0.8s;">
                    <div class="w-10 sm:w-12 md:w-16 h-0.5 sm:h-1 mb-2 sm:mb-3 md:mb-4" style="background-color: #F1C40F;"></div>
                    <p class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl italic leading-relaxed" style="font-family: 'Playfair Display', serif; color: rgba(255, 255, 255, 0.8); letter-spacing: 0.5px;">
                        "Bergerak Berdampak, Melangkah Terarah"
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Ghost Text Scroll Animation - Left to Right */
@keyframes ghost-scroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}

/* Ghost Text Scroll Animation - Right to Left (Reverse) */
@keyframes ghost-scroll-reverse {
    0% {
        transform: translateX(-50%);
    }
    100% {
        transform: translateX(0);
    }
}

/* Badge slide from left animation */
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
</style>

