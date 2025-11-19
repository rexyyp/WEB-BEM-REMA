<section id="about" class="relative pt-32 pb-32 px-4 md:px-8 bg-white overflow-hidden">
    {{-- Decorative Elements --}}
    <div class="absolute top-0 right-0 w-1/3 h-full opacity-5">
        <div class="absolute top-20 right-10 w-96 h-96 border-4 border-yellow-400 rounded-full"></div>
        <div class="absolute top-40 right-32 w-64 h-64 border-4 border-blue-400 rounded-full"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="grid md:grid-cols-2 gap-16 lg:gap-24 items-center">
            {{-- Left Content --}}
            <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="transform: translateY(40px);">
                {{-- Badge with gradient --}}
                <div class="mb-8">
                    <div class="inline-flex items-center gap-2 badge-gradient px-6 py-3 rounded-full shadow-lg">
                        <svg class="w-5 h-5 text-black" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-sm font-black uppercase tracking-wider text-black">Tentang Kami</p>
                    </div>
                </div>

                <h2 class="text-4xl md:text-6xl font-black mb-6 leading-tight">
                    <span class="inline-block text-gray-900">Membangun</span><br>
                    <span class="inline-block text-gradient-yellow text-shadow-glow">Masa Depan</span><br>
                    <span class="inline-block text-gray-900">Mahasiswa</span>
                    <span class="inline-block text-gradient-blue"> Indonesia</span>
                </h2>

                <div class="space-y-6 mb-10">
                    <p class="text-lg text-gray-600 leading-relaxed">
                        <span class="font-bold text-yellow-600">BEM REMA UPI</span> adalah organisasi mahasiswa yang <span class="font-semibold">berkontribusi aktif</span> untuk meningkatkan potensi mahasiswa melalui berbagai program inovatif dan pemberdayaan yang berkelanjutan.
                    </p>
                    <p class="text-base text-gray-500 leading-relaxed">
                        Kami percaya bahwa setiap mahasiswa memiliki potensi luar biasa untuk menciptakan perubahan positif bagi lingkungan dan masyarakat.
                    </p>
                </div>

                {{-- Stats Grid with enhanced design --}}
                <div class="grid grid-cols-3 gap-5">
                    @php
                        $stats = [
                            ['number' => '15', 'label' => 'Kementerian', 'icon' => '🏛️'],
                            ['number' => '50', 'label' => 'Pengurus', 'icon' => '👥'],
                            ['number' => '100', 'label' => 'Program', 'icon' => '🎯'],
                        ];
                    @endphp
                    @foreach($stats as $index => $stat)
                        <div class="stat-card group relative p-6 rounded-2xl bg-gradient-to-br from-gray-50 to-white border-2 border-gray-200 hover:border-yellow-400 hover:shadow-2xl transition-all duration-500 cursor-pointer overflow-hidden transform hover:-translate-y-3 hover:scale-105">
                            {{-- Background animation --}}
                            <div class="absolute inset-0 bg-gradient-to-br from-yellow-50 via-orange-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            
                            {{-- Shimmer effect --}}
                            <div class="shimmer-overlay absolute inset-0 opacity-0 group-hover:opacity-100"></div>
                            
                            <div class="relative z-10 text-center">
                                <div class="text-3xl mb-2 transform group-hover:scale-125 group-hover:rotate-12 transition-all duration-300">{{ $stat['icon'] }}</div>
                                <div class="text-3xl font-black mb-2 pulsing-number text-gradient-yellow" data-count="{{ $stat['number'] }}">{{ $stat['number'] }}+</div>
                                <p class="text-xs font-bold text-gray-600 group-hover:text-yellow-700 transition-colors duration-300 uppercase tracking-wide">{{ $stat['label'] }}</p>
                            </div>
                            
                            {{-- Decorative corner --}}
                            <div class="absolute top-0 right-0 w-8 h-8 border-t-2 border-r-2 border-yellow-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    @endforeach
                </div>

                {{-- CTA Button --}}
                <div class="mt-10">
                    <a href="/tentang" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-yellow-400 via-orange-500 to-yellow-400 bg-size-200 text-black font-bold rounded-full hover:shadow-xl hover:-translate-y-1 transition-all duration-300 hover:bg-right">
                        <span>Pelajari Lebih Lanjut</span>
                        <svg class="w-5 h-5 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Right Image with creative layout --}}
            <div class="animate-on-scroll opacity-0 transition-all duration-1000 relative" style="transform: translateX(40px);">
                {{-- Main Image --}}
                <div class="relative group">
                    {{-- Rotating glow border --}}
                    <div class="absolute -inset-2 rounded-3xl blur-2xl opacity-0 group-hover:opacity-70 transition-all duration-700 rotating-glow" style="background: linear-gradient(45deg, #FACC15, #F97316, #3B82F6, #FACC15); background-size: 300% 300%;"></div>
                    
                    {{-- Static gradient border --}}
                    <div class="absolute -inset-1 rounded-3xl opacity-100 group-hover:opacity-0 transition-all duration-500" style="background: linear-gradient(135deg, rgba(250, 204, 21, 0.3), rgba(59, 130, 246, 0.2));"></div>
                    
                    {{-- Image container --}}
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <img
                            src="{{ asset('build/assets/image/Team Rema.jpg') }}"
                            alt="BEM REMA UPI Team"
                            class="relative w-full rounded-3xl object-cover aspect-square transition-all duration-700 transform group-hover:scale-105 group-hover:rotate-1"
                        />
                        
                        {{-- Gradient overlay --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-yellow-900/30 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        {{-- Decorative quote --}}
                        <div class="absolute bottom-6 left-6 right-6 glass-dark p-4 rounded-2xl opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                            <p class="text-white text-sm font-semibold italic">
                                "Bergerak Berdampak, Melangkah Terarah"
                            </p>
                            <p class="text-yellow-300 text-xs mt-1">- Kabinet Suar Sangga 2025</p>
                        </div>
                    </div>
                </div>

                {{-- Floating Badge --}}
                <div class="absolute -top-6 -right-6 glass-yellow px-6 py-4 rounded-2xl shadow-xl floating z-20">
                    <div class="text-center">
                        <p class="text-3xl font-black text-yellow-600">2025</p>
                        <p class="text-xs font-bold text-gray-700 uppercase">Suar Sangga</p>
                    </div>
                </div>

                {{-- Decorative circles --}}
                <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full opacity-20 blur-2xl floating-slow"></div>
                <div class="absolute -top-8 -right-8 w-24 h-24 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full opacity-20 blur-2xl floating" style="animation-delay: 2s;"></div>
            </div>
        </div>
    </div>
</section>

<style>
.is-visible {
    opacity: 1 !important;
    transform: translate(0, 0) !important;
}

.shimmer-overlay {
    background: linear-gradient(
        90deg,
        transparent 0%,
        rgba(255, 255, 255, 0.5) 50%,
        transparent 100%
    );
    background-size: 200% 100%;
    animation: shimmer-slide 2s infinite;
}

@keyframes shimmer-slide {
    0% { background-position: -200% 0; }
    100% { background-position: 200% 0; }
}

.pulsing-number {
    animation: pulse-number 2s ease-in-out infinite;
}

@keyframes pulse-number {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.9; transform: scale(1.05); }
}

.stat-card:hover .pulsing-number {
    animation: bounce-number 0.6s ease;
}

@keyframes bounce-number {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.4); }
}

.rotating-glow {
    animation: rotate-glow 10s linear infinite;
}

@keyframes rotate-glow {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.bg-size-200 {
    background-size: 200% auto;
    transition: background-position 0.5s ease;
}

.bg-size-200:hover {
    background-position: right center;
}
</style>

<style>
.is-visible {
    opacity: 1 !important;
    transform: translate(0, 0) !important;
}

.shimmer-overlay {
    background: linear-gradient(
        90deg,
        transparent 0%,
        rgba(255, 255, 255, 0.5) 50%,
        transparent 100%
    );
    background-size: 200% 100%;
    animation: shimmer-slide 2s infinite;
}

@keyframes shimmer-slide {
    0% { background-position: -200% 0; }
    100% { background-position: 200% 0; }
}

.pulsing-number {
    animation: pulse-number 2s ease-in-out infinite;
}

@keyframes pulse-number {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.8; }
}

.stat-card:hover .pulsing-number {
    animation: bounce-number 0.6s ease;
}

@keyframes bounce-number {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.3); }
}

.rotating-glow {
    animation: rotate-glow 10s linear infinite;
}

@keyframes rotate-glow {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
