<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'BEM REMA UPI'); ?></title>

    
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('favicon.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('favicon.png')); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('favicon.png')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.png')); ?>">

    
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'BEM REMA UPI - Badan Eksekutif Mahasiswa Universitas Pendidikan Indonesia'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('meta_keywords', 'BEM REMA UPI, BEM UPI, Mahasiswa UPI'); ?>">
    <meta name="author" content="BEM REMA UPI">
    
    
    <meta name="theme-color" content="#37537A">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="BEM REMA UPI">

    
    <?php echo $__env->yieldPushContent('meta'); ?>

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Merriweather:wght@500;600&family=Playfair+Display:ital@1&family=Montserrat:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    
    <?php echo $__env->yieldPushContent('structured-data'); ?>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="antialiased">
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main class="w-full overflow-hidden">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <script>
        // Scroll animations
        const observerOptions = {
            threshold: 0.2,
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

        // Mobile menu toggle
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html><?php /**PATH C:\PROOJEC WEB REMA\WEB REMA\resources\views/layouts/app.blade.php ENDPATH**/ ?>