<section id="vision" class="py-32 px-4 md:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-20">
            <h2 class="animate-on-scroll text-5xl md:text-6xl font-black text-primary mb-6 opacity-0 transition-all duration-1000" style="transform: translateY(40px);">
                Visi & Misi
            </h2>
            {{-- <div class="flex justify-center mt-4">
                <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="width: 160px; height: 4px; background: linear-gradient(to right, #EF4444 0%, #F97316 50%, #FACC15 100%); border-radius: 9999px; transform: translateY(40px); transition-delay: 200ms;"></div>
            </div> --}}
            <div class="flex justify-center mt-4">
                <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="width: 160px; height: 4px; background-color: #37537A; border-radius: 9999px; transform: translateY(40px); transition-delay: 200ms;"></div>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
            {{-- Vision Card --}}
            <div class="animate-on-scroll group p-12 rounded-2xl opacity-0 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 cursor-pointer relative overflow-hidden"
                 style="background-color: #37537A; transform: translateY(40px); transition-delay: 200ms; box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.3), 0 4px 6px -4px rgb(0 0 0 / 0.3);">
                <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 rounded-2xl bg-white/20 flex items-center justify-center mb-8 transition-all duration-300 backdrop-blur-sm group-hover:scale-110 group-hover:rotate-6 group-hover:bg-white/30">
                        <svg class="w-8 h-8 text-white transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>

                    <h3 class="text-3xl font-black text-white mb-4 transition-all duration-200 group-hover:text-yellow-300">Visi</h3>
                    <p class="text-white leading-relaxed text-lg font-medium mb-8 transition-all duration-200 group-hover:translate-x-1">
                        Crafting The Ultimate Inclisive Ecosystem
                    </p>
                    <p class="text-white leading-relaxed text-base font-light transition-all duration-200 group-hover:translate-x-1">
                        "Visi ini berarti menciptakan sistem atau lingkungan yang sepenuhnya merangkul dan memberdayakan setiap individu."
                    </p>
                </div>
            </div>

            {{-- Mission Card --}}
            <div class="animate-on-scroll group p-12 rounded-2xl border-2 border-gray-200 bg-gray-50 shadow-lg opacity-0 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 hover:border-yellow-300 cursor-pointer relative overflow-hidden"
                 style="transform: translateY(40px); transition-delay: 400ms;">
                <div class="absolute inset-0 bg-gradient-to-br from-yellow-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 rounded-2xl bg-yellow-100 flex items-center justify-center mb-8 transition-all duration-300 group-hover:scale-110 group-hover:rotate-6 group-hover:bg-yellow-200">
                        <svg class="w-8 h-8 transition-transform duration-300 group-hover:scale-110" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="10" fill="#EF4444"/>
                            <circle cx="12" cy="12" r="6" fill="white"/>
                            <circle cx="12" cy="12" r="3" fill="#EF4444"/>
                        </svg>
                    </div>

                    <h3 class="text-3xl font-black text-primary mb-8 transition-all duration-200 group-hover:text-red-600">Misi</h3>

                <ul class="space-y-4">
                    @php
                        $missions = [
                            'Membangun sistem informasi yang transparan dan responsif',
                            'Memperkuat peran kolaboratif dan jaringan strategis',
                            'Meningkatkan dukungan akademik dan sumber daya',
                            'Mengembangkan kapasitas organisasi yang terstruktur',
                            'Mempromosikan keberagaman menuju aktualisasi diri',
                        ];
                    @endphp
                    @foreach($missions as $mission)
                        <li class="flex gap-4 items-start text-gray-700 font-light">
                            <span class="font-black text-xl flex-shrink-0" style="color: #FAD74B;">✓</span>
                            <span class="pt-1">{{ $mission }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
