<?php $__env->startSection('title', $title ?? $berita->judul . ' - BEM REMA UPI'); ?>

<?php $__env->startPush('meta'); ?>
<meta name="description" content="<?php echo e($description ?? $berita->excerpt); ?>">
<meta name="keywords" content="<?php echo e($keywords ?? $berita->kategori . ', BEM REMA UPI'); ?>">
<meta property="og:title" content="<?php echo e($berita->judul); ?>">
<meta property="og:description" content="<?php echo e($berita->excerpt); ?>">
<meta property="og:image" content="<?php echo e($berita->thumbnail_url); ?>">
<meta property="og:type" content="article">
<meta property="article:published_time" content="<?php echo e($berita->tanggal->toIso8601String()); ?>">
<meta property="article:author" content="<?php echo e($berita->author); ?>">
<meta property="article:section" content="<?php echo e($berita->kategori); ?>">
<link rel="canonical" href="<?php echo e(route('berita.detail', $berita->slug)); ?>">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo e($berita->judul); ?>">
<meta name="twitter:description" content="<?php echo e($berita->excerpt); ?>">
<meta name="twitter:image" content="<?php echo e($berita->thumbnail_url); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('structured-data'); ?>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "NewsArticle",
        "headline": "<?php echo e($berita->judul); ?>",
        "description": "<?php echo e($berita->excerpt); ?>",
        "image": "<?php echo e($berita->thumbnail_url); ?>",
        "datePublished": "<?php echo e($berita->tanggal->toIso8601String()); ?>",
        "dateModified": "<?php echo e($berita->updated_at->toIso8601String()); ?>",
        "author": {
            "@type": "Person",
            "name": "<?php echo e($berita->author); ?>"
        },
        "publisher": {
            "@type": "Organization",
            "name": "BEM REMA UPI",
            "logo": {
                "@type": "ImageObject",
                "url": "<?php echo e(asset('build/assets/image/Logo Suar Sangga.png')); ?>"
            }
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "<?php echo e(route('berita.detail', $berita->slug)); ?>"
        },
        "articleSection": "<?php echo e($berita->kategori); ?>",
        "keywords": "<?php echo e($berita->kategori); ?>, BEM REMA UPI, Mahasiswa UPI"
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Beranda",
                "item": "<?php echo e(url('/')); ?>"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Berita",
                "item": "<?php echo e(url('/berita')); ?>"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "<?php echo e($berita->judul); ?>",
                "item": "<?php echo e(route('berita.detail', $berita->slug)); ?>"
            }
        ]
    }
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.breadcrumbs', ['items' => [
['name' => 'Beranda', 'url' => url('/')],
['name' => 'Berita', 'url' => url('/berita')],
['name' => $berita->judul, 'url' => null]
]], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<div class="pt-32">
    
    <section class="relative py-16 px-6 md:px-8 bg-white">
        
        <div style="max-width: 700px; margin: 0 auto;">
            
            <div class="text-center mb-8">
                <span style="color: #F1C40F; text-transform: uppercase; letter-spacing: 3px; font-size: 0.75rem; font-weight: 600;">
                    <?php echo e($berita->kategori); ?>

                </span>
            </div>

            
            <h1 class="text-center mb-8" style="font-family: 'Playfair Display', serif; font-size: 3rem; font-weight: 700; font-style: normal; color: #1e293b; line-height: 1.2;">
                <?php echo e($berita->judul); ?>

            </h1>

            
            <div class="flex items-center justify-center gap-4 mb-12" style="color: #F1C40F; text-transform: uppercase; letter-spacing: 2px; font-size: 0.75rem; font-weight: 600;">
                <span><?php echo e(formatTanggalIndo($berita->tanggal)); ?></span>
                <span>•</span>
                <span><?php echo e($berita->author); ?></span>
            </div>
        </div>

        
        <div style="max-width: 700px; margin-left: auto; margin-right: auto; margin-bottom: 1.5rem;">
            <div style="border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px -10px rgba(0,0,0,0.15);">
                <img src="<?php echo e($berita->thumbnail_url); ?>" alt="<?php echo e($berita->judul); ?>" style="width: 100%; height: auto; object-fit: cover; max-height: 600px;">
            </div>
        </div>
    </section>

    
    <section class="px-6 md:px-8 bg-white" style="padding-top: 0;">
        <div style="max-width: 700px; margin: 0 auto;">
            
            <article class="editorial-body" style="font-family: 'Merriweather', 'Lora', Georgia, serif; font-size: 1.125rem; line-height: 1.8; color: #374151; text-align: left;">
                <?php
                // Add dateline to first paragraph
                $kota = strtoupper($berita->kota ?? 'BANDUNG');
                $tanggal = formatTanggalIndo($berita->tanggal);
                $dateline = "<strong>{$kota}, {$tanggal} - </strong>";

                // Get content and add dateline to first <p> tag
                    $content = $berita->html_konten;
                    $content = preg_replace('/
                <p>/', '
                <p>' . $dateline, $content, 1);
                    ?>
                    <?php echo $content; ?>

            </article>

            
            <div class="mt-16 pt-8" style="border-top: 1px solid #E5E7EB;">
                <p class="text-sm font-semibold mb-4" style="color: #6B7280; font-family: 'Oswald', sans-serif; letter-spacing: 0.05em;">BAGIKAN ARTIKEL</p>
                <div class="flex gap-3">
                    <button onclick="shareWhatsApp()" class="share-btn" style="width: 48px; height: 48px; border-radius: 50%; background-color: #2C3E50; color: white; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.3s; border: none;">
                        <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                        </svg>
                    </button>
                    <button onclick="shareTwitter()" class="share-btn" style="width: 48px; height: 48px; border-radius: 50%; background-color: #2C3E50; color: white; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.3s; border: none;">
                        <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </button>
                    <button onclick="shareFacebook()" class="share-btn" style="width: 48px; height: 48px; border-radius: 50%; background-color: #2C3E50; color: white; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.3s; border: none;">
                        <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    
    <?php if($relatedNews && $relatedNews->count() > 0): ?>
    <section class="py-20 px-6 md:px-8 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="animate-on-scroll mb-12 opacity-0 transition-all duration-1000" style="transform: translateY(40px);">
                <h2 class="text-3xl md:text-4xl font-black mb-2" style="font-family: 'Oswald', sans-serif; color: #2C3E50;">Berita Terkait</h2>
                <div style="width: 120px; height: 4px; background-color: #F1C40F; border-radius: 9999px;"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <?php $__currentLoopData = $relatedNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('berita.detail', $news->slug)); ?>" class="animate-on-scroll group bg-white rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 opacity-0" style="transform: translateY(30px); transition-delay: <?php echo e($index * 100); ?>ms;">
                    <div class="relative overflow-hidden" style="aspect-ratio: 16/9;">
                        <img src="<?php echo e($news->thumbnail_url); ?>" alt="<?php echo e($news->judul); ?>" class="w-full h-full object-cover transform group-hover:scale-110 transition-all duration-700">
                        <div class="absolute top-3 left-3">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-bold text-white" style="background-color: #F1C40F; color: #2C3E50;">
                                <?php echo e($news->kategori); ?>

                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 text-xs mb-3" style="color: #6B7280;">
                            <span><?php echo e(formatTanggalSingkat($news->tanggal)); ?></span>
                            <span>•</span>
                            <span><?php echo e($news->waktu_baca ?? 5); ?> menit</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3 line-clamp-2 group-hover:text-opacity-80 transition-all" style="font-family: 'Oswald', sans-serif; color: #2C3E50;">
                            <?php echo e($news->judul); ?>

                        </h3>
                        <p class="text-sm mb-4 line-clamp-3" style="color: #6B7280; line-height: 1.6;">
                            <?php echo e($news->excerpt); ?>

                        </p>
                        <span class="inline-flex items-center gap-2 text-sm font-bold group-hover:gap-3 transition-all duration-300" style="color: #2C3E50;">
                            <span>Baca Artikel</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    
    <?php if($latestNews && $latestNews->count() > 0): ?>
    <section class="py-20 px-6 md:px-8 bg-white">
        <div class="max-w-4xl mx-auto">
            <div class="animate-on-scroll mb-12 opacity-0 transition-all duration-1000" style="transform: translateY(40px);">
                <h2 class="text-3xl md:text-4xl font-black mb-2 text-black">Berita Terbaru</h2>
                <div style="width: 120px; height: 4px; background-color: #FACC15; border-radius: 9999px;"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <?php $__currentLoopData = $latestNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('berita.detail', $news->slug)); ?>" class="animate-on-scroll group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer hover:-translate-y-1 opacity-0 flex flex-col md:flex-row" style="transform: translateY(30px); transition-delay: <?php echo e($index * 100); ?>ms;">
                    <div class="relative overflow-hidden md:w-2/5 aspect-video md:aspect-square">
                        <img src="<?php echo e($news->thumbnail_url); ?>" alt="<?php echo e($news->judul); ?>" class="w-full h-full object-cover transform group-hover:scale-110 transition-all duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="absolute top-3 left-3">
                            <span class="inline-block px-2.5 py-1 rounded-full text-xs font-bold text-black" style="background-color: #FACC15;">
                                <?php echo e($news->kategori); ?>

                            </span>
                        </div>
                    </div>
                    <div class="p-5 md:w-3/5 flex flex-col justify-center">
                        <div class="flex items-center gap-3 text-xs text-gray-500 mb-2">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span><?php echo e(formatTanggalSingkat($news->tanggal)); ?></span>
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <span><?php echo e(formatViews($news->views)); ?></span>
                            </span>
                        </div>
                        <h3 class="text-base md:text-lg font-bold text-gray-800 group-hover:text-blue-900 transition-colors duration-300 mb-2 line-clamp-2">
                            <?php echo e($news->judul); ?>

                        </h3>
                        <p class="text-gray-600 text-sm mb-3 line-clamp-2">
                            <?php echo e($news->excerpt); ?>

                        </p>
                        <span class="inline-flex items-center gap-2 text-sm font-bold group-hover:gap-3 transition-all duration-300" style="color: #37537A;">
                            <span>Selengkapnya</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
</div>

<script>
    // Share functions
    function shareWhatsApp() {
        const url = encodeURIComponent(window.location.href);
        const text = encodeURIComponent('<?php echo e($berita->judul); ?>');
        window.open(`https://wa.me/?text=${text}%20${url}`, '_blank');
    }

    function shareTwitter() {
        const url = encodeURIComponent(window.location.href);
        const text = encodeURIComponent('<?php echo e($berita->judul); ?>');
        window.open(`https://twitter.com/intent/tweet?text=${text}&url=${url}`, '_blank');
    }

    function shareFacebook() {
        const url = encodeURIComponent(window.location.href);
        window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}`, '_blank');
    }

    // Reading progress bar
    document.addEventListener('DOMContentLoaded', function() {
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
    /* Share Button Hover - Gold Effect */
    .share-btn:hover {
        background-color: #F1C40F !important;
        color: #2C3E50 !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(241, 196, 15, 0.3);
    }

    /* Share Buttons Container Spacing */
    .mt-16.pt-8 {
        margin-bottom: 3rem;
        padding-bottom: 2rem;
    }

    /* Editorial Body Styling */
    .editorial-body p {
        margin-bottom: 1.75rem;
    }

    /* Drop Cap Effect - First Letter */
    .editorial-body p:first-of-type::first-letter {
        font-size: 3.5rem;
        float: left;
        line-height: 0.8;
        padding-right: 10px;
        color: #F1C40F;
        font-family: 'Oswald', sans-serif;
        font-weight: 700;
    }

    .editorial-body h1,
    .editorial-body h2 {
        color: #2C3E50 !important;
        font-weight: 800;
        font-family: 'Oswald', sans-serif;
        margin-top: 2.5rem;
        margin-bottom: 1.25rem;
    }

    .editorial-body h1 {
        font-size: 2.5rem;
    }

    .editorial-body h2 {
        font-size: 2rem;
    }

    .editorial-body h3 {
        color: #2C3E50 !important;
        font-weight: 700;
        font-family: 'Oswald', sans-serif;
        font-size: 1.5rem;
        margin-top: 2rem;
        margin-bottom: 1rem;
    }

    .editorial-body strong {
        font-weight: 700;
        color: #2C3E50;
    }

    .editorial-body em {
        font-style: italic;
    }

    .editorial-body a {
        color: #2C3E50;
        text-decoration: underline;
        text-underline-offset: 3px;
    }

    .editorial-body a:hover {
        color: #F1C40F;
    }

    .editorial-body blockquote {
        border-left: 5px solid #F1C40F;
        padding-left: 2rem;
        padding-top: 1rem;
        padding-bottom: 1rem;
        margin: 2rem 0;
        font-style: italic;
        font-size: 1.25rem;
        color: #4B5563;
        background: rgba(241, 196, 15, 0.05);
        border-radius: 0 8px 8px 0;
    }

    .editorial-body ul,
    .editorial-body ol {
        margin-bottom: 1.75rem;
        padding-left: 2rem;
    }

    .editorial-body ul li,
    .editorial-body ol li {
        margin-bottom: 0.75rem;
    }

    .editorial-body ul {
        list-style-type: disc;
    }

    .editorial-body ol {
        list-style-type: decimal;
    }

    .editorial-body img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        margin: 2.5rem 0;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .editorial-body hr {
        border: none;
        height: 2px;
        background: linear-gradient(90deg, transparent, #E5E7EB, transparent);
        margin: 3rem 0;
    }

    /* Hide supertext */
    .editorial-body sup {
        display: none;
    }

    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\PROOJEC WEB REMA\WEB REMA\resources\views/berita-detail.blade.php ENDPATH**/ ?>