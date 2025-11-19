<section id="about" class="relative pt-32 pb-32 px-4 md:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
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
                        <div class="p-4 rounded-lg bg-gradient-to-br from-gray-50 to-gray-100 border border-gray-200 hover:shadow-lg transition-all duration-500 group cursor-pointer overflow-hidden relative" style="border-color: #d1d5db;" onmouseover="this.style.borderColor='#FACC15'" onmouseout="this.style.borderColor='#d1d5db'">
                            <div class="absolute inset-0 transition-all duration-500" style="background: linear-gradient(to right, rgba(250, 204, 21, 0), rgba(250, 204, 21, 0.05), rgba(250, 204, 21, 0));" onmouseover="this.style.background='linear-gradient(to right, rgba(250, 204, 21, 0), rgba(250, 204, 21, 0.1), rgba(250, 204, 21, 0))'" onmouseout="this.style.background='linear-gradient(to right, rgba(250, 204, 21, 0), rgba(250, 204, 21, 0.05), rgba(250, 204, 21, 0))'"></div>
                            <div class="relative z-10">
                                <div class="text-2xl font-black mb-1 group-hover:scale-110 transition-transform duration-300" style="color: #FACC15;">{{ $stat['number'] }}</div>
                                <p class="text-xs font-semibold text-gray-600 group-hover:text-primary transition-colors duration-300">{{ $stat['label'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Right Image --}}
            <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="transform: translateX(40px);">
                <div class="relative group">
                    <div class="absolute -inset-1 rounded-2xl blur-2xl opacity-0 group-hover:opacity-60 transition-all duration-700" style="background: linear-gradient(to right, #FACC15, #93C5FD, #FACC15);"></div>
                    <div class="absolute -inset-0.5 rounded-2xl opacity-100 group-hover:opacity-0 transition-all duration-500" style="background: linear-gradient(to right, rgba(55, 83, 122, 0.2), rgba(250, 204, 21, 0.2));"></div>
                    <img
                        src="{{ asset('build/assets/image/Team Rema.jpg') }}"
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
