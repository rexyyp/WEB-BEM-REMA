@extends('layouts.app')

@section('title', $berita->judul . ' - BEM REMA UPI')

@section('content')
<div class="pt-32">
    {{-- Hero Section with Featured Image --}}
    <section class="relative py-16 px-4 md:px-8 bg-gradient-to-br from-white via-gray-50 to-white overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 left-10 w-72 h-72 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-full blur-3xl"></div>
        </div>
        
        <div class="max-w-4xl mx-auto relative z-10 text-center">
            {{-- Category Badge --}}
            @if($berita->kategori)
            <div class="animate-on-scroll mb-6 opacity-0 transition-all duration-700" style="transform: translateY(20px); transition-delay: 100ms;">
                <span class="inline-block px-5 py-2 rounded-full text-sm font-bold text-black" style="background-color: #FACC15;">
                    {{ $berita->kategori }}
                </span>
            </div>
            @endif

            {{-- Title --}}
            <h1 class="animate-on-scroll text-4xl md:text-5xl font-black mb-6 leading-tight text-black opacity-0 transition-all duration-1000" style="transform: translateY(30px); transition-delay: 200ms;">
                {{ $berita->judul }}
            </h1>

            {{-- Meta Information --}}
            <div class="animate-on-scroll flex flex-wrap items-center justify-center gap-6 text-gray-600 mb-8 opacity-0 transition-all duration-700" style="transform: translateY(20px); transition-delay: 300ms;">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 flex-shrink-0" style="color: #37537A;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span class="font-semibold">{{ $berita->tanggal_formatted }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 flex-shrink-0" style="color: #37537A;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    <span class="font-semibold">{{ $berita->author }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 flex-shrink-0" style="color: #37537A;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    <span class="font-semibold">{{ formatViews($berita->views) }} views</span>
                </div>
            </div>

            {{-- Featured Image --}}
            <div class="animate-on-scroll group relative rounded-3xl overflow-hidden shadow-2xl mb-8 opacity-0 transition-all duration-1000" style="transform: translateY(40px); transition-delay: 400ms;">
                <div class="relative overflow-hidden aspect-video">
                    <img src="{{ $berita->thumbnail_url }}" alt="{{ $berita->judul }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-all duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Article Content with Sidebar --}}
    <section class="py-16 px-4 md:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-3 gap-12">
                {{-- Main Article --}}
                <div class="lg:col-span-2">
                    <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="transform: translateY(30px);">
                        <article class="prose prose-lg max-w-none markdown-content">
                            <div class="text-gray-700 leading-relaxed" style="font-size: 1.125rem; line-height: 1.8;">
                                {!! $berita->sanitized_konten !!}
                            </div>
                        </article>

                        {{-- Share Buttons --}}
                        <div class="mt-12 pt-8 border-t border-gray-200">
                            <h3 class="text-lg font-bold mb-4 text-gray-800">Bagikan Artikel</h3>
                            <div class="flex gap-3">
                                <button onclick="copyToClipboard()" class="flex items-center gap-2 px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="font-semibold text-sm">Salin Link</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="lg:col-span-1">
                    {{-- Latest News --}}
                    @if($latestNews->count() > 0)
                    <div class="animate-on-scroll mb-8 opacity-0 transition-all duration-1000" style="transform: translateY(30px); transition-delay: 200ms;">
                        <h3 class="text-2xl font-black mb-6 text-black">Berita Terbaru</h3>
                        <div class="space-y-4">
                            @foreach($latestNews as $latest)
                            <a href="{{ route('berita.detail', $latest->slug) }}" class="group block bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                                <div class="flex gap-4 p-4">
                                    <div class="relative w-24 h-24 flex-shrink-0 rounded-lg overflow-hidden">
                                        <img src="{{ $latest->thumbnail_url }}" alt="{{ $latest->judul }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-all duration-500">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        @if($latest->kategori)
                                        <span class="inline-block px-2 py-1 rounded text-xs font-bold text-black mb-2" style="background-color: #FACC15;">
                                            {{ $latest->kategori }}
                                        </span>
                                        @endif
                                        <h4 class="font-bold text-sm text-gray-800 group-hover:text-blue-900 transition-colors duration-300 line-clamp-2 mb-2">
                                            {{ $latest->judul }}
                                        </h4>
                                        <p class="text-xs text-gray-500">{{ formatTanggalSingkat($latest->tanggal) }}</p>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    {{-- Related News --}}
                    @if($relatedNews->count() > 0)
                    <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="transform: translateY(30px); transition-delay: 400ms;">
                        <h3 class="text-2xl font-black mb-6 text-black">Berita Terkait</h3>
                        <div class="space-y-4">
                            @foreach($relatedNews as $related)
                            <a href="{{ route('berita.detail', $related->slug) }}" class="group block bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                                <div class="relative aspect-video overflow-hidden">
                                    <img src="{{ $related->thumbnail_url }}" alt="{{ $related->judul }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-all duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                </div>
                                <div class="p-4">
                                    @if($related->kategori)
                                    <span class="inline-block px-2 py-1 rounded text-xs font-bold text-black mb-2" style="background-color: #FACC15;">
                                        {{ $related->kategori }}
                                    </span>
                                    @endif
                                    <h4 class="font-bold text-gray-800 group-hover:text-blue-900 transition-colors duration-300 mb-2 line-clamp-2">
                                        {{ $related->judul }}
                                    </h4>
                                    <p class="text-sm text-gray-600 line-clamp-2 mb-3">{{ $related->excerpt }}</p>
                                    <p class="text-xs text-gray-500">{{ formatTanggalSingkat($related->tanggal) }}</p>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>

<script>
function copyToClipboard() {
    const url = window.location.href;
    navigator.clipboard.writeText(url).then(() => {
        alert('Link berhasil disalin!');
    }).catch(err => {
        console.error('Error copying link:', err);
    });
}

document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });

    // Add reading progress bar
    const progressBar = document.createElement('div');
    progressBar.style.cssText = 'position: fixed; top: 0; left: 0; height: 4px; background: linear-gradient(90deg, #37537A 0%, #FACC15 100%); z-index: 9999; transition: width 0.1s ease;';
    document.body.appendChild(progressBar);

    window.addEventListener('scroll', () => {
        const windowHeight = window.innerHeight;
        const documentHeight = document.documentElement.scrollHeight - windowHeight;
        const scrolled = window.scrollY;
        const progress = (scrolled / documentHeight) * 100;
        progressBar.style.width = progress + '%';
    });
});
</script>

<style>
.animate-on-scroll.is-visible {
    opacity: 1 !important;
    transform: translate(0, 0) scale(1) !important;
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.prose p {
    margin-bottom: 1.5rem;
}

.prose h2,
.prose h3 {
    scroll-margin-top: 100px;
}

/* Markdown Content Styling */
.markdown-content h1,
.markdown-content h2 {
    color: #37537A !important;
    font-weight: 900;
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.markdown-content h1 {
    font-size: 2.5rem;
}

.markdown-content h2 {
    font-size: 2rem;
}

.markdown-content h3 {
    color: #37537A !important;
    font-weight: 800;
    font-size: 1.5rem;
    margin-top: 1.5rem;
    margin-bottom: 0.75rem;
}

.markdown-content h4 {
    color: #37537A !important;
    font-weight: 700;
    font-size: 1.25rem;
    margin-top: 1.25rem;
    margin-bottom: 0.5rem;
}

.markdown-content p {
    margin-bottom: 1.5rem;
    line-height: 1.8;
}

.markdown-content ul,
.markdown-content ol {
    margin-bottom: 1.5rem;
    padding-left: 2rem;
}

.markdown-content ul li,
.markdown-content ol li {
    margin-bottom: 0.75rem;
    line-height: 1.8;
}

.markdown-content ul {
    list-style-type: disc;
}

.markdown-content ol {
    list-style-type: decimal;
}

.markdown-content strong {
    font-weight: 700;
    color: #37537A;
}

.markdown-content em {
    font-style: italic;
}

.markdown-content a {
    color: #37537A;
    text-decoration: underline;
    transition: all 0.3s ease;
}

.markdown-content a:hover {
    color: #FACC15;
}

.markdown-content blockquote {
    border-left: 4px solid #FACC15;
    padding-left: 1.5rem;
    margin: 2rem 0;
    font-style: italic;
    color: #4B5563;
    background: linear-gradient(135deg, rgba(55, 83, 122, 0.05) 0%, rgba(250, 204, 21, 0.05) 100%);
    padding: 1.5rem;
    border-radius: 0.5rem;
}

.markdown-content code {
    background-color: #F3F4F6;
    padding: 0.2rem 0.4rem;
    border-radius: 0.25rem;
    font-family: 'Courier New', monospace;
    font-size: 0.9em;
    color: #37537A;
}

.markdown-content pre {
    background-color: #F3F4F6;
    padding: 1rem;
    border-radius: 0.5rem;
    overflow-x: auto;
    margin: 1.5rem 0;
}

.markdown-content pre code {
    background-color: transparent;
    padding: 0;
}

.markdown-content img {
    max-width: 100%;
    height: auto;
    border-radius: 1rem;
    margin: 2rem 0;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.markdown-content hr {
    border: none;
    height: 2px;
    background: linear-gradient(90deg, transparent, #37537A, transparent);
    margin: 3rem 0;
}

.markdown-content table {
    width: 100%;
    border-collapse: collapse;
    margin: 2rem 0;
}

.markdown-content table th {
    background-color: #37537A;
    color: white;
    padding: 0.75rem;
    text-align: left;
    font-weight: 700;
}

.markdown-content table td {
    padding: 0.75rem;
    border-bottom: 1px solid #E5E7EB;
}

.markdown-content table tr:hover {
    background-color: #F9FAFB;
}
</style>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span class="font-semibold">15 November 2025</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 flex-shrink-0" style="color: #37537A;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    <span class="font-semibold">Admin BEM REMA</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 flex-shrink-0" style="color: #37537A;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    <span class="font-semibold">1,234 views</span>
                </div>
            </div>

            {{-- Featured Image --}}
            <div class="animate-on-scroll group relative rounded-3xl overflow-hidden shadow-2xl mb-8 opacity-0 transition-all duration-1000" style="transform: translateY(40px); transition-delay: 400ms;">
                <div class="relative overflow-hidden aspect-video">
                    <img src="{{ asset('build/assets/image/Team Rema.jpg') }}" alt="Featured Image" class="w-full h-full object-cover transform group-hover:scale-105 transition-all duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Article Content --}}
    <section class="py-16 px-4 md:px-8 bg-white">
        <div class="max-w-4xl mx-auto">
            <div class="animate-on-scroll opacity-0 transition-all duration-1000" style="transform: translateY(30px);">
                {{-- Article Body with Markdown Support --}}
                <article class="prose prose-lg max-w-none markdown-content">
                    <div class="text-gray-700 leading-relaxed" style="font-size: 1.125rem; line-height: 1.8;">
                        {{-- Konten dari database akan ditampilkan di sini --}}
                        {{-- Contoh static content, nanti diganti dengan: {!! $news->content !!} --}}
                        
                        <p>BEM REMA UPI kembali mengadakan workshop pengembangan soft skills yang bertujuan untuk meningkatkan kemampuan mahasiswa dalam menghadapi tantangan dunia kerja. Workshop ini diselenggarakan pada hari Jumat, 15 November 2025 di Gedung Student Center UPI Bandung.</p>

                        <p>Workshop kali ini menghadirkan berbagai narasumber kompeten dari berbagai perusahaan terkemuka dan praktisi berpengalaman. Materi yang disampaikan meliputi public speaking, leadership, critical thinking, dan teamwork yang sangat dibutuhkan di era modern ini.</p>

                        <h2>Rangkaian Acara</h2>
                        
                        <p>Acara dimulai pukul 08.00 WIB dengan registrasi peserta yang diikuti oleh lebih dari 300 mahasiswa dari berbagai fakultas. Antusiasme peserta sangat tinggi, terlihat dari banyaknya pertanyaan yang diajukan kepada narasumber.</p>

                        <h3>Materi yang Disampaikan</h3>
                        
                        <ol>
                            <li>Public Speaking & Communication - Teknik berbicara di depan umum dengan percaya diri dan cara berkomunikasi efektif dalam berbagai situasi profesional.</li>
                            <li>Leadership & Team Management - Pengembangan jiwa kepemimpinan dan cara mengelola tim dengan efektif untuk mencapai tujuan bersama.</li>
                            <li>Critical Thinking & Problem Solving - Melatih kemampuan berpikir kritis dan analitis dalam menghadapi berbagai permasalahan kompleks.</li>
                            <li>Teamwork & Collaboration - Membangun kemampuan bekerja sama dalam tim dan berkolaborasi dengan berbagai karakter individu.</li>
                        </ol>

                        <p>Selain sesi presentasi, workshop ini juga dilengkapi dengan praktik langsung dan role play yang membuat peserta dapat merasakan langsung penerapan teori yang telah disampaikan. Metode interaktif ini terbukti sangat efektif dalam meningkatkan pemahaman peserta.</p>

                        <h3>Kesimpulan</h3>
                        
                        <p>Workshop ini mendapat respon positif dari para peserta. Banyak mahasiswa yang merasa terbantu dengan materi yang disampaikan dan berencana untuk menerapkannya dalam kehidupan sehari-hari maupun persiapan menghadapi dunia kerja.</p>

                        <p>BEM REMA UPI berkomitmen untuk terus mengadakan kegiatan-kegiatan yang bermanfaat bagi mahasiswa. Pantau terus media sosial dan website kami untuk informasi workshop dan kegiatan menarik lainnya.</p>
                    </div>

                </article>
            </div>
        </div>
    </section>

    {{-- Related News --}}
    <section class="py-20 px-4 md:px-8 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto">
            <div class="animate-on-scroll mb-12 opacity-0 transition-all duration-1000" style="transform: translateY(40px);">
                <h2 class="text-3xl md:text-4xl font-black mb-2 text-black">Berita Terkait</h2>
                <div style="width: 120px; height: 4px; background-color: #37537A; border-radius: 9999px;"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @php
                    $relatedNews = [
                        [
                            'id' => 2,
                            'title' => 'Kabinet Suar Sangga Resmi Dilantik untuk Periode 2025',
                            'excerpt' => 'Pelantikan Kabinet Suar Sangga menandai dimulainya periode kepengurusan baru BEM REMA UPI.',
                            'image' => 'Isola.png',
                            'category' => 'Pelantikan',
                            'date' => '10 Nov 2025',
                        ],
                        [
                            'id' => 3,
                            'title' => 'Rapat Koordinasi Kementerian BEM REMA UPI 2025',
                            'excerpt' => 'Rapat koordinasi membahas program kerja semester ini dengan fokus pada peningkatan kualitas.',
                            'image' => 'Logo Suar Sangga.png',
                            'category' => 'Kegiatan',
                            'date' => '08 Nov 2025',
                        ],
                        [
                            'id' => 4,
                            'title' => 'Mahasiswa REMA Raih Juara di Kompetisi Nasional',
                            'excerpt' => 'Tim mahasiswa berhasil meraih juara pertama dalam kompetisi tingkat nasional.',
                            'image' => 'Team Rema.jpg',
                            'category' => 'Prestasi',
                            'date' => '05 Nov 2025',
                        ],
                    ];
                @endphp

                @foreach($relatedNews as $index => $news)
                <div class="animate-on-scroll group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer hover:-translate-y-2 opacity-0" style="transform: translateY(30px); transition-delay: {{ $index * 100 }}ms;">
                    <div class="relative overflow-hidden aspect-video">
                        <img src="{{ asset('build/assets/image/' . $news['image']) }}" alt="{{ $news['title'] }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute top-4 left-4">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-bold text-black" style="background-color: #FACC15;">
                                {{ $news['category'] }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-4 text-xs text-gray-500 mb-3">
                            <span class="flex items-center gap-2">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span>{{ $news['date'] }}</span>
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-900 transition-colors duration-300 mb-3 line-clamp-2">
                            {{ $news['title'] }}
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                            {{ $news['excerpt'] }}
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-sm font-bold group-hover:gap-3 transition-all duration-300" style="color: #37537A;">
                            <span>Baca Selengkapnya</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add reading progress bar
    const progressBar = document.createElement('div');
    progressBar.style.cssText = 'position: fixed; top: 0; left: 0; height: 4px; background: linear-gradient(90deg, #37537A 0%, #FACC15 100%); z-index: 9999; transition: width 0.1s ease;';
    document.body.appendChild(progressBar);

    window.addEventListener('scroll', () => {
        const windowHeight = window.innerHeight;
        const documentHeight = document.documentElement.scrollHeight - windowHeight;
        const scrolled = window.scrollY;
        const progress = (scrolled / documentHeight) * 100;
        progressBar.style.width = progress + '%';
    });
});
</script>

<style>
.animate-on-scroll.is-visible {
    opacity: 1 !important;
    transform: translate(0, 0) scale(1) !important;
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.prose p {
    margin-bottom: 1.5rem;
}

.prose h2,
.prose h3 {
    scroll-margin-top: 100px;
}

.hover-tilt {
    transition: all 0.3s ease;
}

.hover-tilt:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 30px rgba(55, 83, 122, 0.15);
}

/* First letter styling */
.first-letter\:text-7xl::first-letter {
    font-size: 4.5rem;
    font-weight: 900;
    float: left;
    margin-right: 0.75rem;
    margin-top: 0.25rem;
    line-height: 1;
    color: #37537A;
}

/* Smooth image loading */
img {
    image-rendering: -webkit-optimize-contrast;
    image-rendering: crisp-edges;
}

/* Markdown Content Styling */
.markdown-content h1,
.markdown-content h2 {
    color: #37537A !important;
    font-weight: 900;
    margin-top: 2rem;
    margin-bottom: 1rem;
}

.markdown-content h1 {
    font-size: 2.5rem;
}

.markdown-content h2 {
    font-size: 2rem;
}

.markdown-content h3 {
    color: #37537A !important;
    font-weight: 800;
    font-size: 1.5rem;
    margin-top: 1.5rem;
    margin-bottom: 0.75rem;
}

.markdown-content h4 {
    color: #37537A !important;
    font-weight: 700;
    font-size: 1.25rem;
    margin-top: 1.25rem;
    margin-bottom: 0.5rem;
}

.markdown-content p {
    margin-bottom: 1.5rem;
    line-height: 1.8;
}

.markdown-content ul,
.markdown-content ol {
    margin-bottom: 1.5rem;
    padding-left: 2rem;
}

.markdown-content ul li,
.markdown-content ol li {
    margin-bottom: 0.75rem;
    line-height: 1.8;
}

.markdown-content ul {
    list-style-type: disc;
}

.markdown-content ol {
    list-style-type: decimal;
}

.markdown-content strong {
    font-weight: 700;
    color: #37537A;
}

.markdown-content em {
    font-style: italic;
}

.markdown-content a {
    color: #37537A;
    text-decoration: underline;
    transition: all 0.3s ease;
}

.markdown-content a:hover {
    color: #FACC15;
}

.markdown-content blockquote {
    border-left: 4px solid #FACC15;
    padding-left: 1.5rem;
    margin: 2rem 0;
    font-style: italic;
    color: #4B5563;
    background: linear-gradient(135deg, rgba(55, 83, 122, 0.05) 0%, rgba(250, 204, 21, 0.05) 100%);
    padding: 1.5rem;
    border-radius: 0.5rem;
}

.markdown-content code {
    background-color: #F3F4F6;
    padding: 0.2rem 0.4rem;
    border-radius: 0.25rem;
    font-family: 'Courier New', monospace;
    font-size: 0.9em;
    color: #37537A;
}

.markdown-content pre {
    background-color: #F3F4F6;
    padding: 1rem;
    border-radius: 0.5rem;
    overflow-x: auto;
    margin: 1.5rem 0;
}

.markdown-content pre code {
    background-color: transparent;
    padding: 0;
}

.markdown-content img {
    max-width: 100%;
    height: auto;
    border-radius: 1rem;
    margin: 2rem 0;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.markdown-content hr {
    border: none;
    height: 2px;
    background: linear-gradient(90deg, transparent, #37537A, transparent);
    margin: 3rem 0;
}

.markdown-content table {
    width: 100%;
    border-collapse: collapse;
    margin: 2rem 0;
}

.markdown-content table th {
    background-color: #37537A;
    color: white;
    padding: 0.75rem;
    text-align: left;
    font-weight: 700;
}

.markdown-content table td {
    padding: 0.75rem;
    border-bottom: 1px solid #E5E7EB;
}

.markdown-content table tr:hover {
    background-color: #F9FAFB;
}
</style>

<script>
// Reading Progress Bar
const progressBar = document.getElementById('reading-progress');
const articleContent = document.querySelector('.prose');

if (progressBar && articleContent) {
    window.addEventListener('scroll', () => {
        const articleTop = articleContent.offsetTop;
        const articleHeight = articleContent.offsetHeight;
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const scrollHeight = articleHeight - window.innerHeight;
        
        if (scrollTop > articleTop) {
            const progress = ((scrollTop - articleTop) / scrollHeight) * 100;
            progressBar.style.width = Math.min(progress, 100) + '%';
        } else {
            progressBar.style.width = '0%';
        }
    });
}

// Copy to Clipboard Function
function copyToClipboard() {
    const url = window.location.href;
    navigator.clipboard.writeText(url).then(() => {
        alert('Link berhasil disalin!');
    }).catch(err => {
        console.error('Error copying to clipboard:', err);
    });
}

// Scroll Animation Observer
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('in-view');
        }
    });
}, {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
});

document.querySelectorAll('.animate-on-scroll').forEach((el) => {
    observer.observe(el);
});
</script>
@endsection
