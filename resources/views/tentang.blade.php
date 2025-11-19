@extends('layouts.app')

@section('content')
<div class="pt-20">
    {{-- Hero Section --}}
    <section class="relative py-20 px-4 md:px-8 bg-gradient-to-br from-white via-gray-50 to-white overflow-hidden animate-on-scroll opacity-0" style="transform: translateY(40px);">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 left-10 w-72 h-72 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-full blur-3xl"></div>
        </div>
        
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="text-center mb-12">
                <div class="animate-on-scroll inline-block px-4 py-2 rounded-full mb-6 opacity-0 transition-all duration-700" style="background-color: #FACC15; transform: scale(0.8);">
                    <p class="text-xs font-bold uppercase tracking-wider text-black">Tentang Kami</p>
                </div>
                <h1 class="animate-on-scroll text-5xl md:text-7xl font-black mb-6 leading-tight opacity-0 transition-all duration-1000" style="transform: translateY(40px); transition-delay: 200ms;">
                    <span class="text-black">Badan Eksekutif</span><br>
                    <span style="color: #37537A;">Mahasiswa REMA UPI</span>
                </h1>
                <p class="animate-on-scroll text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed opacity-0 transition-all duration-1000" style="transform: translateY(40px); transition-delay: 400ms;">
                    Organisasi mahasiswa yang berkomitmen membangun masa depan mahasiswa Indonesia melalui inovasi, pemberdayaan, dan kolaborasi.
                </p>
            </div>
        </div>
    </section>

    {{-- Sejarah Section --}}
    <section class="py-20 px-4 md:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="transform: translateX(-40px);">
                    <h2 class="text-4xl md:text-5xl font-black mb-6 leading-tight">
                        <span class="text-black">Sejarah</span>
                        <span style="color: #37537A;">BEM REMA UPI</span>
                    </h2>
                    <div class="flex mb-6">
                        <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="width: 0px; height: 4px; background-color: #37537A; border-radius: 9999px; transition-delay: 200ms;"></div>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-4 animate-on-scroll opacity-0 transition-all duration-700" style="transform: translateY(20px); transition-delay: 300ms;">
                        BEM REMA UPI (Badan Eksekutif Mahasiswa Rumpun Eksakta) merupakan organisasi mahasiswa tingkat universitas yang menaungi seluruh mahasiswa dari fakultas-fakultas eksakta di Universitas Pendidikan Indonesia.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-4 animate-on-scroll opacity-0 transition-all duration-700" style="transform: translateY(20px); transition-delay: 400ms;">
                        Didirikan dengan semangat untuk menjadi wadah aspirasi, kreativitas, dan pengembangan potensi mahasiswa, BEM REMA UPI telah berkontribusi dalam berbagai kegiatan kemahasiswaan baik di tingkat kampus maupun nasional.
                    </p>
                    <p class="text-gray-600 leading-relaxed animate-on-scroll opacity-0 transition-all duration-700" style="transform: translateY(20px); transition-delay: 500ms;">
                        Melalui program-program strategis dan inovatif, kami terus berupaya menciptakan ekosistem kampus yang kondusif untuk pengembangan akademik dan non-akademik mahasiswa.
                    </p>
                </div>
                <div class="animate-on-scroll relative group opacity-0 transition-all duration-1000" style="transform: translateX(40px); transition-delay: 200ms;">
                    <div class="absolute -inset-1 bg-gradient-to-r from-yellow-400 via-blue-500 to-yellow-400 rounded-2xl blur-2xl opacity-20 group-hover:opacity-40 transition-all duration-700"></div>
                    <img
                        src="{{ asset('build/assets/image/Team Rema.jpg') }}"
                        alt="Sejarah BEM REMA UPI"
                        class="relative w-full rounded-2xl shadow-2xl object-cover aspect-[4/3] transform group-hover:scale-105 transition-all duration-500"
                    />
                </div>
            </div>
        </div>
    </section>

    {{-- Visi & Misi Section --}}
    <section class="py-32 px-4 md:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <h2 class="animate-on-scroll text-5xl md:text-6xl font-black mb-6 opacity-0 transition-all duration-1000" style="color: #37537A; transform: translateY(40px);">
                    Visi & Misi
                </h2>
                <div class="flex justify-center mt-4">
                    <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="width: 160px; height: 4px; background-color: #37537A; border-radius: 9999px; transform: translateY(40px); transition-delay: 200ms;"></div>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                {{-- Vision Card --}}
                <div class="animate-on-scroll group p-12 rounded-2xl transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 cursor-pointer relative overflow-hidden opacity-0"
                     style="background-color: #37537A; box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.3), 0 4px 6px -4px rgb(0 0 0 / 0.3); transform: scale(0.95); transition-delay: 200ms;">
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
                <div class="animate-on-scroll group p-12 rounded-2xl border-2 border-gray-200 bg-gray-50 shadow-lg transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 hover:border-yellow-300 cursor-pointer relative overflow-hidden opacity-0" style="transform: scale(0.95); transition-delay: 400ms;">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 rounded-2xl bg-yellow-100 flex items-center justify-center mb-8 transition-all duration-300 group-hover:scale-110 group-hover:rotate-6 group-hover:bg-yellow-200">
                            <svg class="w-8 h-8 transition-transform duration-300 group-hover:scale-110" viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="10" fill="#EF4444"/>
                                <circle cx="12" cy="12" r="6" fill="white"/>
                                <circle cx="12" cy="12" r="3" fill="#EF4444"/>
                            </svg>
                        </div>

                        <h3 class="text-3xl font-black mb-8 transition-all duration-200 group-hover:text-red-600" style="color: #37537A;">Misi</h3>

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
        </div>
    </section>

    {{-- Struktur Organisasi Section --}}
    <section class="py-20 px-4 md:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="animate-on-scroll text-4xl md:text-5xl font-black mb-6 opacity-0 transition-all duration-1000" style="transform: translateY(40px);">
                    <span class="text-black">Struktur</span>
                    <span style="color: #37537A;">Organisasi</span>
                </h2>
                <div class="flex justify-center mb-6">
                    <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="width: 160px; height: 4px; background-color: #37537A; border-radius: 9999px; transform: scaleX(0); transition-delay: 200ms;"></div>
                </div>
                <p class="animate-on-scroll text-lg text-gray-600 max-w-3xl mx-auto opacity-0 transition-all duration-1000" style="transform: translateY(20px); transition-delay: 300ms;">
                    BEM REMA UPI memiliki struktur organisasi yang solid untuk menjalankan program kerja secara efektif dan efisien.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                @php
                    $departments = [
                        ['name' => 'Kementerian Internal', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'],
                        ['name' => 'Kementerian Eksternal', 'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                        ['name' => 'Kementerian Keilmuan', 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
                        ['name' => 'Kementerian Minat & Bakat', 'icon' => 'M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3'],
                        ['name' => 'Kementerian PSDM', 'icon' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z'],
                        ['name' => 'Kementerian Kominfo', 'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                    ];
                @endphp
                @foreach($departments as $index => $dept)
                    <div class="animate-on-scroll bg-gradient-to-br from-white to-gray-50 rounded-xl p-6 border border-gray-200 hover:border-yellow-400 hover:shadow-xl transition-all duration-500 group cursor-pointer opacity-0" style="transform: translateY(30px); transition-delay: {{ $index * 100 }}ms;">
                        <div class="flex flex-col items-center text-center">
                            <div class="w-16 h-16 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300" style="background-color: #FACC15;">
                                <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $dept['icon'] }}"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800 group-hover:text-blue-900 transition-colors duration-300">
                                {{ $dept['name'] }}
                            </h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Stats Section --}}
    <section class="py-20 px-4 md:px-8 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8">
                @php
                    $stats = [
                        ['number' => '15+', 'label' => 'Kementerian Aktif', 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
                        ['number' => '50+', 'label' => 'Pengurus Aktif', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'],
                        ['number' => '100+', 'label' => 'Program Tahunan', 'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01'],
                        ['number' => '1000+', 'label' => 'Mahasiswa Terlayani', 'icon' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z'],
                    ];
                @endphp
                @foreach($stats as $index => $stat)
                    <div class="animate-on-scroll text-center group cursor-pointer opacity-0 transition-all duration-700" style="transform: scale(0.8); transition-delay: {{ $index * 150 }}ms;">
                        <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:-translate-y-2">
                            <div class="flex justify-center mb-4">
                                <div class="w-16 h-16 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300" style="background-color: #FACC15;">
                                    <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $stat['icon'] }}"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-4xl font-black mb-2" style="color: #37537A;">{{ $stat['number'] }}</div>
                            <p class="text-sm font-semibold text-gray-600">{{ $stat['label'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animate on scroll functionality
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                
                // Special handling for line animations
                if (entry.target.style.width === '0px') {
                    entry.target.style.width = '120px';
                }
                if (entry.target.style.transform.includes('scaleX(0)')) {
                    entry.target.style.transform = 'scaleX(1)';
                }
            }
        });
    }, observerOptions);

    // Observe all elements with animate-on-scroll class
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });

    // Add parallax effect on mouse move for hero section
    const hero = document.querySelector('.relative.py-20');
    if (hero) {
        hero.addEventListener('mousemove', (e) => {
            const blobs = hero.querySelectorAll('.absolute.opacity-5 > div');
            const mouseX = e.clientX / window.innerWidth;
            const mouseY = e.clientY / window.innerHeight;
            
            blobs.forEach((blob, index) => {
                const speed = (index + 1) * 20;
                const x = mouseX * speed;
                const y = mouseY * speed;
                blob.style.transform = `translate(${x}px, ${y}px)`;
            });
        });
    }
});
</script>

<style>
.animate-on-scroll.is-visible {
    opacity: 1 !important;
    transform: translate(0, 0) scale(1) !important;
}

/* Smooth width transition for lines */
.animate-on-scroll[style*="width"] {
    transition: width 1s ease-out, opacity 1s ease-out;
}

/* Add subtle pulse animation to stats on hover */
.group:hover .w-16.h-16 {
    animation: pulse-icon 1.5s ease-in-out infinite;
}

@keyframes pulse-icon {
    0%, 100% {
        transform: scale(1.1);
    }
    50% {
        transform: scale(1.15);
    }
}

/* Parallax smooth transition */
.absolute.opacity-5 > div {
    transition: transform 0.3s ease-out;
}
</style>
@endsection
