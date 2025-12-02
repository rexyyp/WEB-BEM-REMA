<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita - BEM REMA UPI</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f8f9fa;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }
        
        .main-content {
            margin-left: 270px;
            min-height: 100vh;
            background: #f8f9fa;
        }

        .info-row {
            display: flex;
            padding: 12px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .info-label {
            font-weight: 600;
            color: #6b7280;
            width: 150px;
        }

        .info-value {
            color: #374151;
            flex: 1;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.2s;
            border: none;
            display: inline-block;
            text-decoration: none;
        }

        .btn-primary {
            background: #3b82f6;
            color: white;
        }

        .btn-primary:hover {
            background: #2563eb;
        }

        .btn-secondary {
            background: #6b7280;
            color: white;
        }

        .btn-secondary:hover {
            background: #4b5563;
        }

        .thumbnail-preview {
            max-width: 600px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .content-preview {
            background: #f9fafb;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
            line-height: 1.8;
        }

        .badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge-yellow {
            background: #FACC15;
            color: #000;
        }
    </style>
</head>
<body>
    <?php echo $__env->make('admin.layouts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
    <div class="main-content">
        
        <div style="background: white; border-bottom: 1px solid #e5e7eb; padding: 16px 32px;">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h1 style="font-size: 20px; font-weight: 700; color: #111827; margin: 0;">Detail Berita</h1>
                <div style="display: flex; align-items: center; gap: 8px;">
                    <img src="<?php echo e(asset('build/assets/image/Logo Suar Sangga.png')); ?>" alt="Admin" style="width: 32px; height: 32px; border-radius: 50%; object-fit: cover;">
                    <span style="font-size: 14px; font-weight: 500; color: #374151;">Hi, Admin</span>
                </div>
            </div>
        </div>
        
        <div class="p-8">
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="mb-6">
                    <div class="info-row">
                        <div class="info-label">Judul:</div>
                        <div class="info-value font-semibold text-lg"><?php echo e($beritum->judul); ?></div>
                    </div>

                    <div class="info-row">
                        <div class="info-label">Slug:</div>
                        <div class="info-value"><code class="bg-gray-100 px-2 py-1 rounded"><?php echo e($beritum->slug); ?></code></div>
                    </div>

                    <div class="info-row">
                        <div class="info-label">Kategori:</div>
                        <div class="info-value">
                            <?php if($beritum->kategori): ?>
                                <span class="badge badge-yellow"><?php echo e($beritum->kategori); ?></span>
                            <?php else: ?>
                                <span class="text-gray-400">-</span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="info-row">
                        <div class="info-label">Tanggal:</div>
                        <div class="info-value"><?php echo e($beritum->tanggal_formatted); ?></div>
                    </div>

                    <div class="info-row">
                        <div class="info-label">Penulis:</div>
                        <div class="info-value"><?php echo e($beritum->author); ?></div>
                    </div>

                    <div class="info-row">
                        <div class="info-label">Jumlah Views:</div>
                        <div class="info-value font-semibold"><?php echo e(number_format($beritum->views)); ?></div>
                    </div>

                    <div class="info-row">
                        <div class="info-label">Dibuat:</div>
                        <div class="info-value"><?php echo e($beritum->created_at->format('d F Y H:i')); ?></div>
                    </div>

                    <div class="info-row">
                        <div class="info-label">Diperbarui:</div>
                        <div class="info-value"><?php echo e($beritum->updated_at->format('d F Y H:i')); ?></div>
                    </div>
                </div>

                <?php if($beritum->thumbnail): ?>
                <div class="mb-6">
                    <h3 class="font-semibold text-gray-700 mb-3">Thumbnail:</h3>
                    <img src="<?php echo e($beritum->thumbnail_url); ?>" alt="<?php echo e($beritum->judul); ?>" class="thumbnail-preview">
                </div>
                <?php endif; ?>

                <div class="mb-6">
                    <h3 class="font-semibold text-gray-700 mb-3">Konten:</h3>
                    <div class="content-preview">
                        <?php echo $beritum->sanitized_konten; ?>

                    </div>
                </div>

                <div class="flex gap-3 mt-6">
                    <a href="<?php echo e(route('admin.berita.edit', $beritum)); ?>" class="btn btn-primary">
                        ✏️ Edit Berita
                    </a>
                    <a href="<?php echo e(route('admin.berita.index')); ?>" class="btn btn-secondary">
                        ← Kembali
                    </a>
                    <a href="<?php echo e(route('berita.detail', $beritum->slug)); ?>" target="_blank" class="btn" style="background: #10b981; color: white;">
                        👁️ Lihat di Frontend
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\PROOJEC WEB REMA\WEB REMA\resources\views/admin/berita/show.blade.php ENDPATH**/ ?>