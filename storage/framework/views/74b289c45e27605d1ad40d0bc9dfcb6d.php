<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Data Berita - BEM REMA UPI</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f8f9fa;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }

        /* Main Content - Offset by sidebar width */
        .main-content {
            margin-left: 270px;
            min-height: 100vh;
            background: #f8f9fa;
        }

        /* Table Hover */
        tbody tr:hover {
            background: #f8fafc;
        }

        /* Search Input */
        .search-input {
            padding: 10px 16px 10px 40px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            font-size: 14px;
            width: 280px;
            transition: all 0.2s ease;
        }

        .search-input:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .search-container {
            position: relative;
        }

        .search-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
        }

        /* Button Hover */
        button:hover,
        a:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        /* Smooth transitions */
        button,
        a {
            transition: all 0.2s ease;
        }

        /* Thumbnail */
        .thumbnail {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    
    <?php echo $__env->make('admin.layouts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <div class="main-content">

        
        <div style="background: white; border-bottom: 1px solid #e5e7eb; padding: 16px 32px;">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h1 style="font-size: 20px; font-weight: 700; color: #111827; margin: 0;">Dashboard</h1>
                <div style="display: flex; align-items: center; gap: 8px;">
                    <img src="<?php echo e(asset('build/assets/image/Logo Suar Sangga.png')); ?>" alt="Admin" style="width: 32px; height: 32px; border-radius: 50%; object-fit: cover;">
                    <span style="font-size: 14px; font-weight: 500; color: #374151;">Hi, Admin</span>
                </div>
            </div>
        </div>

        
        <div style="padding: 32px;">

            
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px;">
                <div>
                    <h2 style="font-size: 28px; font-weight: 700; color: #111827; margin-bottom: 8px;">Kelola Data Berita</h2>
                    <p style="font-size: 15px; color: #6b7280;">Kelola konten dan pantau performa website Kabinet Indonesia</p>
                </div>
                <a href="<?php echo e(route('admin.berita.create')); ?>" style="display: flex; align-items: center; gap: 8px; padding: 12px 24px; background: #1e3a8a; color: white; font-size: 14px; font-weight: 600; border-radius: 10px; border: none; cursor: pointer; box-shadow: 0 2px 8px rgba(30, 58, 138, 0.2); white-space: nowrap; text-decoration: none;">
                    <svg style="width: 18px; height: 18px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span>Tulis Berita Baru</span>
                </a>
            </div>

            
            <div style="background: white; border-radius: 16px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
                    <div>
                        <h3 style="font-size: 18px; font-weight: 700; color: #111827; margin-bottom: 4px;">Daftar Berita</h3>
                    </div>

                    
                    <div class="search-container">
                        <svg class="search-icon" style="width: 18px; height: 18px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <input type="text" class="search-input" placeholder="Cari berita...">
                    </div>
                </div>

                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr style="border-bottom: 2px solid #e5e7eb;">
                                <th style="text-align: left; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280; width: 100px;">Foto</th>
                                <th style="text-align: left; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280; width: 200px;">Judul Berita</th>
                                <th style="text-align: left; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280; width: 130px;">Kategori</th>
                                <th style="text-align: left; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280;">Deskripsi</th>
                                <th style="text-align: left; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280; width: 150px;">Tanggal Terbit</th>
                                <th style="text-align: center; padding: 12px 16px; font-size: 13px; font-weight: 600; color: #6b7280; width: 100px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 16px;">
                                    <img src="<?php echo e($berita->thumbnail_url); ?>" alt="<?php echo e($berita->judul); ?>" class="thumbnail">
                                </td>
                                <td style="padding: 16px;">
                                    <span style="font-size: 14px; font-weight: 600; color: #111827;"><?php echo e(Str::limit($berita->judul, 50)); ?></span>
                                </td>
                                <td style="padding: 16px;">
                                    <?php if($berita->kategori): ?>
                                    <span style="display: inline-block; padding: 4px 12px; background: #FACC15; color: #000; border-radius: 12px; font-size: 12px; font-weight: 500;"><?php echo e($berita->kategori); ?></span>
                                    <?php else: ?>
                                    <span style="font-size: 12px; color: #9ca3af;">-</span>
                                    <?php endif; ?>
                                </td>
                                <td style="padding: 16px;">
                                    <p style="font-size: 14px; color: #6b7280; margin: 0; line-height: 1.5;"><?php echo e(Str::limit($berita->excerpt, 100)); ?></p>
                                </td>
                                <td style="padding: 16px; font-size: 14px; color: #6b7280;"><?php echo e(formatTanggalSingkat($berita->tanggal)); ?></td>
                                <td style="padding: 16px;">
                                    <div style="display: flex; justify-content: center; gap: 8px;">
                                        <a href="<?php echo e(route('admin.berita.show', $berita)); ?>" style="padding: 8px; background: transparent; border: none; color: #10b981; cursor: pointer; border-radius: 6px; display: inline-block;" title="Lihat Detail">
                                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        <a href="<?php echo e(route('admin.berita.edit', $berita)); ?>" style="padding: 8px; background: transparent; border: none; color: #2563eb; cursor: pointer; border-radius: 6px; display: inline-block;" title="Edit">
                                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>
                                        <form action="<?php echo e(route('admin.berita.destroy', $berita)); ?>" method="POST" style="display: inline-block;" onsubmit="showDeleteConfirmation(this, event); return false;">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" style="padding: 8px; background: transparent; border: none; color: #dc2626; cursor: pointer; border-radius: 6px;" title="Hapus">
                                                <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6" style="padding: 40px; text-align: center;">
                                    <p style="color: #9ca3af; font-size: 14px;">Belum ada berita yang ditambahkan.</p>
                                </td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                
                <?php if($beritas->hasPages()): ?>
                <div style="margin-top: 24px; padding-top: 20px; border-top: 1px solid #e5e7eb;">
                    <?php echo e($beritas->links()); ?>

                </div>
                <?php endif; ?>
            </div>

        </div>
    </div>

    
    <?php echo $__env->make('partials.loading-overlay', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php if(session('success')): ?>
    <div role="alert" style="position: fixed; top: 20px; right: 20px; background: #10b981; color: white; padding: 16px 24px; border-radius: 12px; box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3); z-index: 1000; font-weight: 600;">
        <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>

    <script>
        // Search functionality
        const searchInput = document.querySelector('.search-input');
        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>

</body>

</html><?php /**PATH C:\PROOJEC WEB REMA\WEB REMA\resources\views/admin/berita/index.blade.php ENDPATH**/ ?>