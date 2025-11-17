<div class="relative w-full overflow-hidden flex items-center justify-center pt-20 pb-20"
     style="height: 90vh; background: linear-gradient(135deg, #0A2540 0%, #1E40AF 50%, #2563EB 100%); background-size: cover; background-position: center; background-attachment: fixed;">
    
    <div style="position: absolute; inset: 0; background: linear-gradient(to right, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.5) 50%, transparent 100%); z-index: 1;"></div>

    {{-- Animated blob backgrounds --}}
    <div style="position: absolute; top: 80px; right: calc(25% - 200px); width: 384px; height: 384px; background: rgba(252, 211, 77, 0.1); border-radius: 9999px; filter: blur(96px); opacity: 0.6; animation: float 8s ease-in-out infinite; z-index: 0;"></div>
    <div style="position: absolute; bottom: 0; left: -192px; width: 384px; height: 384px; background: rgba(37, 99, 235, 0.15); border-radius: 9999px; filter: blur(96px); opacity: 0.5; animation: glow 6s ease-in-out infinite; z-index: 0;"></div>

    <div class="relative z-10 w-full max-w-7xl px-4 md:px-8">
        <div class="lg:col-span-2">
            {{-- Badge --}}
            <div class="inline-block mb-6 px-4 py-2 bg-yellow-500/30 backdrop-blur-sm border border-yellow-500/60 rounded-full hover:scale-105 transition-transform cursor-pointer">
                <p class="text-sm font-bold text-yellow-200 tracking-wider">✨ CABINET REMA UPI 2025</p>
            </div>

            <div class="mb-6">
                <h1 class="text-5xl md:text-7xl font-black text-white leading-tight mb-3 animate-slide-up">
                    Bersama Membangun
                    <span class="block bg-gradient-to-r from-yellow-400 to-yellow-200 bg-clip-text text-transparent">
                        Indonesia Emas
                    </span>
                </h1>
                
                <p class="text-xl md:text-2xl text-gray-200 font-light leading-relaxed max-w-2xl animate-fade-in" style="animation-delay: 0.3s;">
                    Organisasi mahasiswa yang berkomitmen untuk memberdayakan generasi pemimpin masa depan melalui program inovatif berkelanjutan.
                </p>
            </div>

            <div class="flex flex-wrap gap-4 animate-fade-in" style="animation-delay: 0.5s;">
                <a href="#about" class="px-8 py-4 bg-accent text-white font-bold rounded-lg hover:bg-accent-light hover:scale-105 hover:shadow-2xl transition-all duration-300">
                    Pelajari Lebih Lanjut
                </a>
                <a href="#news" class="px-8 py-4 bg-white/10 backdrop-blur-sm text-white font-bold rounded-lg border-2 border-white/30 hover:bg-white/20 hover:scale-105 transition-all duration-300">
                    Berita Terkini
                </a>
            </div>
        </div>
    </div>
</div>

<style>
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

@keyframes glow {
    0%, 100% { opacity: 0.5; transform: scale(1); }
    50% { opacity: 1; transform: scale(1.1); }
}
</style>
