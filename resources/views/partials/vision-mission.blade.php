<section id="vision" class="py-32 px-4 md:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-20">
            <h2 class="animate-on-scroll text-5xl md:text-6xl font-black text-primary mb-6 opacity-0 transition-all duration-1000" style="transform: translateY(40px);">
                Visi & Misi
            </h2>
            <p class="animate-on-scroll text-xl text-gray-600 max-w-2xl mx-auto font-light opacity-0 transition-all duration-1000" style="transform: translateY(40px); transition-delay: 200ms;">
                Komitmen kami dalam membimbing generasi pemimpin yang berkelanjutan
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
            {{-- Vision Card --}}
            <div class="animate-on-scroll group p-12 rounded-2xl shadow-lg hover-lift opacity-0 transition-all duration-700"
                 style="background: linear-gradient(135deg, #0A2540 0%, #2563EB 100%); transform: translateY(40px); transition-delay: 200ms;">
                <div class="w-16 h-16 rounded-2xl bg-white/20 flex items-center justify-center mb-8 group-hover:bg-accent/30 transition-all duration-300 backdrop-blur-sm">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>

                <h3 class="text-3xl font-black text-white mb-6">Visi</h3>
                <p class="text-white/95 leading-relaxed text-lg font-light">
                    Mewujudkan sistem dan lingkungan yang mengaplikasikan nilai-nilai inklusif, kolaboratif, dan berkelanjutan untuk pemberdayaan mahasiswa di seluruh tingkatan.
                </p>
            </div>

            {{-- Mission Card --}}
            <div class="animate-on-scroll group p-12 rounded-2xl border-2 border-gray-200 bg-gray-50 hover-lift shadow-lg opacity-0 transition-all duration-700"
                 style="transform: translateY(40px); transition-delay: 400ms;">
                <div class="w-16 h-16 rounded-2xl bg-accent/20 flex items-center justify-center mb-8 group-hover:bg-accent/30 transition-all duration-300">
                    <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>

                <h3 class="text-3xl font-black text-primary mb-8">Misi</h3>

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
                            <span class="text-accent font-black text-xl flex-shrink-0">✓</span>
                            <span class="pt-1">{{ $mission }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
