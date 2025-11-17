<section id="about" class="relative pt-32 pb-32 px-4 md:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        {{-- Decorative top element --}}
        <div class="mb-16 flex justify-center animate-fade-in" style="animation-delay: 0.2s;">
            <div class="h-1 w-24 bg-gradient-to-r from-transparent via-accent to-transparent rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 lg:gap-20 items-center">
            {{-- Left Content --}}
            <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="transform: translateY(40px);">
                <div class="inline-block mb-6 px-4 py-2 bg-accent/10 rounded-full border border-accent/30 hover:bg-accent/20 hover:border-accent/50 transition-all duration-300 cursor-pointer">
                    <p class="text-xs font-bold text-accent uppercase tracking-wider">Tentang Kami</p>
                </div>

                <h2 class="text-4xl md:text-5xl font-black text-primary mb-8 leading-tight">
                    <span class="inline-block animate-slide-in-left">Membangun</span>
                    <span class="inline-block animate-slide-in-left" style="animation-delay: 0.1s;">Masa</span>
                    <span class="inline-block animate-slide-in-left" style="animation-delay: 0.2s;">Depan</span>
                    <br>
                    <span class="bg-gradient-to-r from-primary via-primary-light to-accent bg-clip-text text-transparent">Mahasiswa Indonesia</span>
                </h2>

                <p class="text-base md:text-lg text-gray-600 mb-8 leading-relaxed font-light">
                    BEM REMA UPI adalah organisasi mahasiswa yang berkontribusi untuk meningkatkan potensi mahasiswa melalui berbagai program inovatif dan pemberdayaan yang berkelanjutan.
                </p>

                {{-- Stats Grid --}}
                <div class="grid grid-cols-3 gap-4">
                    @php
                        $stats = [
                            ['number' => '15+', 'label' => 'Kementerian'],
                            ['number' => '50+', 'label' => 'Pengurus'],
                            ['number' => '100+', 'label' => 'Program'],
                        ];
                    @endphp
                    @foreach($stats as $index => $stat)
                        <div class="p-4 rounded-lg bg-gradient-to-br from-gray-50 to-gray-100 border border-gray-200 hover:border-accent hover:shadow-lg transition-all duration-500 group cursor-pointer overflow-hidden relative">
                            <div class="absolute inset-0 bg-gradient-to-r from-accent/0 via-accent/5 to-accent/0 group-hover:via-accent/10 transition-all duration-500"></div>
                            <div class="relative z-10">
                                <div class="text-2xl font-black text-accent mb-1 group-hover:scale-110 transition-transform duration-300">{{ $stat['number'] }}</div>
                                <p class="text-xs font-semibold text-gray-600 group-hover:text-primary transition-colors duration-300">{{ $stat['label'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Right Image --}}
            <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="transform: translateX(40px);">
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-accent via-primary-light to-accent rounded-2xl blur-2xl opacity-0 group-hover:opacity-60 transition-all duration-700"></div>
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-primary/20 to-accent/20 rounded-2xl opacity-100 group-hover:opacity-0 transition-all duration-500"></div>
                    <img
                        src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=800&q=80"
                        alt="BEM REMA UPI Team"
                        class="relative w-full rounded-2xl shadow-2xl object-cover aspect-square group-hover:shadow-2xl transition-all duration-500 transform group-hover:scale-105"
                    />
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-t from-primary/10 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
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
</style>
