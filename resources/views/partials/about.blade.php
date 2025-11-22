<section id="about" class="relative pt-32 pb-32 px-4 md:px-8 bg-white overflow-hidden">
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
                <div class="grid grid-cols-3 gap-4">
                    @php
                        $stats = [
                            ['number' => '15+', 'label' => 'Kementerian'],
                            ['number' => '50+', 'label' => 'Pengurus'],
                            ['number' => '100+', 'label' => 'Program'],
                        ];
                    @endphp
                    @foreach($stats as $index => $stat)
                        <div class="p-5 rounded-xl bg-gradient-to-br from-white to-gray-50 border-2 hover:shadow-2xl transition-all duration-500 group cursor-pointer overflow-hidden relative bounce-entrance" style="border-color: #e5e7eb; animation-delay: {{ $index * 0.2 }}s;" onmouseover="this.style.borderColor='#FACC15'; this.style.transform='translateY(-8px)'" onmouseout="this.style.borderColor='#e5e7eb'; this.style.transform='translateY(0)'">
                            {{-- Animated Background Gradient --}}
                            <div class="absolute inset-0 transition-all duration-700 opacity-0 group-hover:opacity-100" style="background: linear-gradient(135deg, rgba(250, 204, 21, 0.1) 0%, rgba(147, 197, 253, 0.1) 100%);"></div>
                            
                            {{-- Shimmer Effect --}}
                            <div class="absolute inset-0 shimmer opacity-0 group-hover:opacity-100 pointer-events-none"></div>
                            
                            {{-- Icon Background --}}
                            <div class="absolute -right-4 -bottom-4 w-20 h-20 rounded-full opacity-10 group-hover:opacity-20 transition-all duration-500 group-hover:scale-150" style="background-color: #FACC15;"></div>
                            
                            <div class="relative z-10">
                                <div class="text-3xl font-black mb-2 group-hover:scale-125 transition-all duration-500 float-animation" style="color: #FACC15; text-shadow: 0 2px 4px rgba(250, 204, 21, 0.2);">
                                    {{ $stat['number'] }}
                                </div>
                                <p class="text-xs font-bold text-gray-600 group-hover:text-gray-900 transition-colors duration-300 uppercase tracking-wider">
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
                <div class="relative">
                    <img
                        src="{{ asset('build/assets/image/Team Rema.jpg') }}"
                        alt="BEM REMA UPI Team"
                        class="w-full rounded-2xl shadow-2xl object-cover aspect-square"
                        style="image-rendering: -webkit-optimize-contrast; image-rendering: crisp-edges;"
                    />
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
