{{-- Hero Section --}}
<section class="hero-section relative w-full min-h-screen flex items-center justify-center overflow-hidden">
    {{-- Background Image with Overlay --}}
    <div class="absolute inset-0">
        <img src="{{ asset('build/assets/image/Isola.png') }}" alt="Isola UPI" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900/80 via-blue-900/70 to-slate-900/80"></div>
    </div>
    
    {{-- Animated Background Elements --}}
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-20 right-20 w-96 h-96 bg-yellow-400/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 left-20 w-80 h-80 bg-blue-400/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
    </div>
    
    {{-- Grid Pattern --}}
    <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(250, 204, 21, 0.5) 1px, transparent 1px), linear-gradient(90deg, rgba(250, 204, 21, 0.5) 1px, transparent 1px); background-size: 40px 40px;"></div>
    
    {{-- Content Container --}}
    <div class="relative z-10 w-full max-w-7xl mx-auto px-6 md:px-12 py-20">
        <div class="text-center">
            {{-- Badge --}}
            <div class="inline-block mb-8 animate-fade-in">
                <div class="inline-flex items-center gap-2 px-6 py-3 bg-yellow-400/20 backdrop-blur-md border border-yellow-400/30 rounded-full">
                    <span class="text-2xl">🔥</span>
                    <span class="text-sm font-bold text-yellow-300 uppercase tracking-wider">Kabinet Suar Sangga 2025</span>
                </div>
            </div>
            
            {{-- Main Heading --}}
            <h1 class="font-black text-white mb-8 animate-fade-in-up" style="animation-delay: 0.2s;">
                <span class="block text-4xl md:text-5xl lg:text-6xl mb-2">BADAN EKSEKUTIF MAHASISWA</span>
                <span class="block text-5xl md:text-6xl lg:text-7xl bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-400 bg-clip-text text-transparent mb-2">REPUBLIK MAHASISWA</span>
                <span class="block text-4xl md:text-5xl lg:text-6xl">UNIVERSITAS PENDIDIKAN INDONESIA</span>
            </h1>
            
            {{-- Tagline --}}
            <div class="inline-block mb-12 animate-fade-in-up" style="animation-delay: 0.4s;">
                <div class="px-8 py-4 bg-black/20 backdrop-blur-md border border-yellow-400/20 rounded-2xl">
                    <p class="text-xl md:text-2xl font-bold text-yellow-300">
                        Bergerak Berdampak, Melangkah Terarah
                    </p>
                </div>
            </div>
            
            {{-- CTA Buttons --}}
            <div class="flex flex-wrap gap-4 justify-center animate-fade-in-up" style="animation-delay: 0.6s;">
                <a href="#about" class="group inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 hover:from-yellow-500 hover:to-yellow-600 text-black font-bold rounded-xl transition-all duration-300 hover:shadow-2xl hover:shadow-yellow-400/50 hover:-translate-y-1">
                    <span>Tentang Kami</span>
                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
                <a href="#news" class="group inline-flex items-center gap-3 px-8 py-4 bg-transparent border-2 border-yellow-400 hover:bg-yellow-400 text-yellow-400 hover:text-black font-bold rounded-xl transition-all duration-300 hover:shadow-2xl hover:shadow-yellow-400/50 hover:-translate-y-1">
                    <span>Berita Terbaru</span>
                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Custom Animations --}}
<style>
@keyframes fade-in {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in {
    animation: fade-in 0.8s ease-out forwards;
}

.animate-fade-in-up {
    animation: fade-in-up 0.8s ease-out forwards;
}

/* Smooth gradient animation */
@keyframes gradient-shift {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.hero-section h1 .bg-gradient-to-r {
    background-size: 200% auto;
    animation: gradient-shift 3s ease infinite;
}
</style>

