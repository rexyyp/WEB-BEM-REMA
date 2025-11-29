@extends('layouts.app')

@section('content')
<div class="pt-20">
    {{-- Hero Section --}}
    <section class="relative py-20 px-8 md:px-12 bg-gradient-to-br from-white via-gray-50 to-white overflow-hidden animate-on-scroll opacity-0" style="transform: translateY(40px);">
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
    <section class="py-20 px-8 md:px-12 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="transform: translateX(-40px);">
                    <h2 class="text-4xl md:text-5xl font-black mb-6 leading-tight">
                        <span class="text-black">Tentang</span>
                        <span style="color: #37537A;">BEM REMA UPI</span>
                    </h2>
                    <div class="flex mb-6">
                        <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="width: 0px; height: 4px; background-color: #37537A; border-radius: 9999px; transition-delay: 200ms;"></div>
                    </div>
                        <p class="text-gray-600 leading-relaxed mb-4 animate-on-scroll opacity-0 transition-all duration-700" style="transform: translateY(20px); transition-delay: 300ms;">
                            Mahasiswa adalah tulang punggung pergerakan, agen perubahan yang memiliki peran krusial dalam membentuk masa depan bangsa. 
                            <strong>BEM Rema UPI</strong> hadir sebagai simpul kekuatan untuk mewadahi keberagaman identitas dan potensi tersebut. 
                            Dengan semangat <strong>bergerak berdampak</strong>, <strong>melangkah terarah</strong>, kami bertekad menjadi motor penggerak perubahan positif, 
                            bukan sekadar <em>“menara gading”</em> yang terasing dari realitas.
                        </p>

                        <p class="text-gray-600 leading-relaxed mb-4 animate-on-scroll opacity-0 transition-all duration-700" style="transform: translateY(20px); transition-delay: 400ms;">
                            Kami percaya, sebuah organisasi mahasiswa yang ideal harus menjadi ekosistem yang 
                            <strong>transparan</strong>, <strong>inklusif</strong>, dan <strong>berdaya</strong>. 
                            Hal inilah yang menjadi landasan utama kami. Nilai-nilai ini terangkum dalam filosofi 
                            <strong><em>“Suar Sangga”</em></strong>—cahaya pencerahan yang didukung oleh fondasi yang kokoh.
                        </p>

                        <p class="text-gray-600 leading-relaxed animate-on-scroll opacity-0 transition-all duration-700" style="transform: translateY(20px); transition-delay: 500ms;">
                            Sebagai <em>“Suar”</em>, kami memimpin dengan <strong>transparansi</strong> dan <strong>responsivitas</strong>, 
                            memastikan setiap informasi tersampaikan dengan jelas dan aspirasi mahasiswa ditanggapi dengan cepat. 
                            Sebagai <em>“Sangga”</em>, kami menjadi fondasi yang kokoh, menguatkan <strong>kolaborasi</strong>, 
                            merawat <strong>keberagaman</strong>, serta memastikan setiap individu mendapatkan <strong>ruang aman</strong> untuk berkembang. 
                            Kami berkomitmen untuk membangun <strong>kapasitas organisasi</strong> dan menjaga <strong>kesejahteraan anggota</strong> sebagai pilar utama.
                        </p>

                        <p class="text-gray-600 leading-relaxed mt-4 animate-on-scroll opacity-0 transition-all duration-700" style="transform: translateY(20px); transition-delay: 600ms;">
                            Dengan berpegang pada prinsip-prinsip ini, <strong>BEM Rema UPI</strong> tidak hanya akan menjadi representasi, 
                            tetapi juga <strong>transformasi</strong>. Kami hadir untuk memberikan <strong>dampak nyata</strong> dan 
                            <strong>berkelanjutan</strong>, membangun fondasi yang kuat, serta memastikan setiap mahasiswa 
                            dapat berkontribusi aktif bagi kemajuan bersama.
                        </p>
                </div>
                <div class="animate-on-scroll relative group opacity-0 transition-all duration-1000" style="transform: translateX(40px); transition-delay: 200ms;">
                    <div class="absolute -inset-1 bg-gradient-to-r from-yellow-400 via-blue-500 to-yellow-400 rounded-2xl blur-2xl opacity-20 group-hover:opacity-40 transition-all duration-700"></div>
                    <div class="relative w-full rounded-2xl shadow-2xl overflow-hidden" style="aspect-ratio: 4/3;">
                        <img
                            src="{{ asset('build/assets/image/Team Rema.jpg') }}"
                            alt="Sejarah BEM REMA UPI"
                            class="w-full h-full object-cover transform group-hover:scale-105 transition-all duration-500"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Stats Section --}}
    <section class="py-20 px-8 md:px-12 bg-white relative overflow-hidden">
        {{-- Decorative Background Elements --}}
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 left-10 w-64 h-64 rounded-full" style="background: radial-gradient(circle, rgba(250, 204, 21, 0.08), transparent); filter: blur(40px);"></div>
            <div class="absolute bottom-20 right-10 w-80 h-80 rounded-full" style="background: radial-gradient(circle, rgba(55, 83, 122, 0.08), transparent); filter: blur(40px);"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full" style="background: radial-gradient(circle, rgba(250, 204, 21, 0.05), transparent); filter: blur(60px); animation: pulse-bg 8s ease-in-out infinite;"></div>
        </div>
        
        <div class="max-w-7xl mx-auto relative z-10">
            {{-- Section Header --}}
            <div class="text-center mb-16 animate-on-scroll opacity-0" style="transform: translateY(30px);">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black mb-4" style="color: #37537A;">
                    Pencapaian <span style="color: #FACC15;">BEM REMA</span>
                </h2>
                <div class="h-1 w-24 mx-auto rounded-full" style="background: linear-gradient(90deg, #37537A, #FACC15, #37537A);"></div>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                @php
                    $stats = [
                        ['number' => '15', 'suffix' => '+', 'label' => 'Kementerian', 'sublabel' => 'Aktif', 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
                        ['number' => '50', 'suffix' => '+', 'label' => 'Pengurus', 'sublabel' => 'Aktif', 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'],
                        ['number' => '100', 'suffix' => '+', 'label' => 'Program', 'sublabel' => 'Tahunan', 'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01'],
                        ['number' => '1000', 'suffix' => '+', 'label' => 'Mahasiswa', 'sublabel' => 'Terlayani', 'icon' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z'],
                    ];
                @endphp
                @foreach($stats as $index => $stat)
                    <div class="animate-on-scroll opacity-0 transition-all duration-700 stat-card-wrapper" 
                         style="transform: scale(0.85) translateY(30px); transition-delay: {{ $index * 100 }}ms;"
                         data-number="{{ $stat['number'] }}"
                         data-suffix="{{ $stat['suffix'] }}">
                        <div class="stat-card-3d group cursor-pointer h-full">
                            <div class="stat-card-inner relative overflow-hidden rounded-3xl p-4 h-full transition-all duration-700 flex flex-col justify-center" style="aspect-ratio: 4/3;">
                                {{-- Animated Border Gradient --}}
                                <div class="absolute inset-0 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500" style="background: linear-gradient(135deg, #FACC15, #37537A, #FACC15); padding: 3px;">
                                    <div class="w-full h-full rounded-3xl" style="background-color: white;"></div>
                                </div>
                                
                                {{-- Static Border --}}
                                <div class="absolute inset-0 rounded-3xl border-2 group-hover:opacity-0 transition-opacity duration-500" style="border-color: rgba(55, 83, 122, 0.15);"></div>
                                
                                {{-- Content --}}
                                <div class="relative z-10">
                                    {{-- Icon Container --}}
                                    <div class="flex justify-center mb-2">
                                        <div class="relative">
                                            {{-- Glow Effect --}}
                                            <div class="absolute inset-0 rounded-2xl blur-xl opacity-0 group-hover:opacity-60 transition-all duration-500" 
                                                 style="background: linear-gradient(135deg, {{ $index % 2 === 0 ? '#FACC15' : '#37537A' }}, {{ $index % 2 === 0 ? '#37537A' : '#FACC15' }});"></div>
                                            
                                            {{-- Icon Background --}}
                                            <div class="relative w-12 h-12 rounded-2xl flex items-center justify-center transform group-hover:rotate-12 group-hover:scale-110 transition-all duration-500 shadow-lg" 
                                                 style="background: linear-gradient(135deg, {{ $index % 2 === 0 ? '#FACC15' : '#37537A' }}, {{ $index % 2 === 0 ? '#F59E0B' : '#2E4A6B' }});">
                                                <svg class="w-6 h-6 {{ $index % 2 === 0 ? 'text-black' : 'text-white' }} transform group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $stat['icon'] }}"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    {{-- Number Counter --}}
                                    <div class="text-center mb-2">
                                        <div class="text-3xl md:text-4xl font-black" style="color: #37537A; font-variant-numeric: tabular-nums;">
                                            <span class="counter inline-block transform group-hover:scale-110 transition-transform duration-300">0</span><span class="suffix">{{ $stat['suffix'] }}</span>
                                        </div>
                                    </div>
                                    
                                    {{-- Label --}}
                                    <div class="text-center">
                                        <p class="text-base font-bold" style="color: #37537A;">{{ $stat['label'] }}</p>
                                        <p class="text-xs font-semibold" style="color: #FACC15;">{{ $stat['sublabel'] }}</p>
                                    </div>
                                    
                                    {{-- Animated Progress Circle --}}
                                    <div class="mt-2 flex justify-center">
                                        <svg class="w-8 h-8 transform -rotate-90" viewBox="0 0 60 60">
                                            <circle cx="30" cy="30" r="25" fill="none" stroke="rgba(55, 83, 122, 0.1)" stroke-width="4"/>
                                            <circle cx="30" cy="30" r="25" fill="none" stroke="#FACC15" stroke-width="4" 
                                                    class="progress-circle" 
                                                    stroke-dasharray="157" 
                                                    stroke-dashoffset="157"
                                                    stroke-linecap="round"
                                                    style="transition: stroke-dashoffset 2s ease-out;"/>
                                        </svg>
                                    </div>
                                    
                                    {{-- Floating Particles --}}
                                    <div class="absolute top-4 right-4 w-3 h-3 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-700" style="background-color: #FACC15; animation: float-particle-1 3s ease-in-out infinite;"></div>
                                    <div class="absolute bottom-4 left-4 w-2 h-2 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-700" style="background-color: #37537A; animation: float-particle-2 3s ease-in-out infinite; animation-delay: 0.5s;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>

    {{-- Visi & Misi Section --}}
    @include('partials.vision-mission')


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
                
                // Trigger counter animation for stat cards
                if (entry.target.classList.contains('stat-card-wrapper')) {
                    const counter = entry.target.querySelector('.counter');
                    const progressCircle = entry.target.querySelector('.progress-circle');
                    const target = parseInt(entry.target.dataset.number);
                    
                    // Animate counter
                    animateCounter(counter, 0, target, 2000);
                    
                    // Animate progress circle
                    if (progressCircle) {
                        setTimeout(() => {
                            progressCircle.style.strokeDashoffset = '0';
                        }, 300);
                    }
                }
            }
        });
    }, observerOptions);

    // Observe all elements with animate-on-scroll class
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });
    
    // Counter Animation Function
    function animateCounter(element, start, end, duration) {
        if (!element) return;
        
        let startTime = null;
        const step = (timestamp) => {
            if (!startTime) startTime = timestamp;
            const progress = Math.min((timestamp - startTime) / duration, 1);
            
            // Easing function for smooth animation
            const easeOutQuart = 1 - Math.pow(1 - progress, 4);
            const current = Math.floor(easeOutQuart * (end - start) + start);
            
            element.textContent = current;
            
            if (progress < 1) {
                requestAnimationFrame(step);
            } else {
                element.textContent = end;
            }
        };
        
        requestAnimationFrame(step);
    }

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

/* Pulse Background Animation */
@keyframes pulse-bg {
    0%, 100% {
        transform: translate(-50%, -50%) scale(1);
        opacity: 0.5;
    }
    50% {
        transform: translate(-50%, -50%) scale(1.2);
        opacity: 0.3;
    }
}

/* Pulse Dot Animation */
@keyframes pulse-dot {
    0%, 100% {
        transform: scale(1);
        opacity: 1;
    }
    50% {
        transform: scale(1.3);
        opacity: 0.6;
    }
}

/* Stat Card with Shine Effect */
.stat-card-3d {
    transition: transform 0.5s ease;
}

.stat-card-3d:hover {
    transform: translateY(-8px) scale(1.02);
}

.stat-card-inner {
    background: white;
    box-shadow: 0 10px 40px rgba(55, 83, 122, 0.1);
    transition: all 0.7s cubic-bezier(0.23, 1, 0.32, 1);
    position: relative;
    overflow: hidden;
}

.stat-card-inner::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(
        45deg,
        transparent 30%,
        rgba(250, 204, 21, 0.15) 50%,
        rgba(55, 83, 122, 0.15) 55%,
        rgba(250, 204, 21, 0.15) 60%,
        transparent 70%
    );
    transform: translateX(-100%) translateY(-100%);
    transition: transform 0.6s ease;
}

.stat-card-3d:hover .stat-card-inner::after {
    transform: translateX(100%) translateY(100%);
}

.stat-card-3d:hover .stat-card-inner {
    box-shadow: 
        0 20px 60px rgba(55, 83, 122, 0.2),
        0 0 0 1px rgba(250, 204, 21, 0.1) inset,
        inset 0 1px 0 rgba(255, 255, 255, 0.8);
}

/* Floating Particle Animations */
@keyframes float-particle-1 {
    0%, 100% {
        transform: translate(0, 0);
    }
    25% {
        transform: translate(5px, -5px);
    }
    50% {
        transform: translate(-3px, -10px);
    }
    75% {
        transform: translate(3px, -5px);
    }
}

@keyframes float-particle-2 {
    0%, 100% {
        transform: translate(0, 0) scale(1);
    }
    25% {
        transform: translate(-5px, 5px) scale(1.2);
    }
    50% {
        transform: translate(5px, 10px) scale(0.8);
    }
    75% {
        transform: translate(-3px, 5px) scale(1.1);
    }
}

/* Counter Number Styling */
.counter {
    display: inline-block;
    font-variant-numeric: tabular-nums;
    min-width: 1ch;
}

/* Progress Circle Animation */
.progress-circle {
    transition: stroke-dashoffset 2s cubic-bezier(0.65, 0, 0.35, 1);
}

/* Gradient Border Animation */
@keyframes gradient-rotate {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

.stat-card-3d:hover .stat-card-inner > div:first-child {
    animation: gradient-rotate 3s ease infinite;
    background-size: 200% 200%;
}

/* Metallic Shine Effect */
@keyframes metallic-shine {
    0% {
        background-position: -200% center;
    }
    100% {
        background-position: 200% center;
    }
}

.stat-card-3d:hover .stat-card-inner {
    background: 
        linear-gradient(
            110deg,
            rgba(255, 255, 255, 0) 0%,
            rgba(255, 255, 255, 0) 40%,
            rgba(250, 204, 21, 0.1) 50%,
            rgba(255, 255, 255, 0) 60%,
            rgba(255, 255, 255, 0) 100%
        ),
        linear-gradient(135deg, #fff 0%, #fffbf0 50%, #fff 100%);
    background-size: 200% 100%, 100% 100%;
    animation: metallic-shine 2s infinite;
}

/* Stat Card Wrapper Visibility */
.stat-card-wrapper.is-visible {
    opacity: 1 !important;
    transform: scale(1) translateY(0) !important;
}

/* Glossy Background Effect */
.stat-card-inner {
    background: linear-gradient(
        135deg,
        rgba(255, 255, 255, 1) 0%,
        rgba(250, 250, 250, 1) 50%,
        rgba(255, 255, 255, 1) 100%
    );
}

.stat-card-3d:hover .stat-card-inner {
    background: linear-gradient(
        135deg,
        rgba(255, 255, 255, 1) 0%,
        rgba(255, 252, 240, 1) 50%,
        rgba(255, 255, 255, 1) 100%
    );
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .stat-card-inner {
        padding: 1.5rem;
    }
    
    .counter {
        font-size: 3rem;
    }
}

/* Smooth Color Transitions */
.stat-card-inner * {
    transition: color 0.3s ease, transform 0.3s ease;
}

/* Icon Rotation on Hover */
.stat-card-3d:hover svg {
    filter: drop-shadow(0 4px 8px rgba(250, 204, 21, 0.3));
}

/* Enhanced Shadow Layers with Shimmer */
.stat-card-inner::before {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 1.5rem;
    background: linear-gradient(
        110deg,
        transparent 25%,
        rgba(250, 204, 21, 0.05) 45%,
        rgba(55, 83, 122, 0.05) 55%,
        transparent 75%
    );
    background-size: 200% 100%;
    animation: shimmer 3s infinite;
    opacity: 0;
    pointer-events: none;
}

.stat-card-3d:hover .stat-card-inner::before {
    opacity: 1;
}

@keyframes shimmer {
    0% {
        background-position: -200% 0;
    }
    100% {
        background-position: 200% 0;
    }
}
</style>
@endsection
