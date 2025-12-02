
<aside class="sidebar" style="position: fixed; top: 0; left: 0; bottom: 0; width: 270px; background: linear-gradient(180deg, #0F1C30 0%, #1E3A5F 100%); overflow-y: auto; z-index: 1000;">
    
    <div style="padding: 32px 24px; border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
        <div style="display: flex; align-items: center; gap: 16px;">
            <div style="width: 64px; height: 64px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <img src="<?php echo e(asset('build/assets/image/Logo Suar Sangga.png')); ?>" alt="Logo" style="width: 48px; height: 48px; object-fit: contain;">
            </div>
            <div>
                <h2 style="color: white; font-size: 16px; font-weight: 700; margin: 0 0 4px 0; line-height: 1.2;">BEM REMA UPI</h2>
                <p style="color: #94a3b8; font-size: 13px; margin: 0; line-height: 1.2;">Suar Sangga 2025</p>
            </div>
        </div>
    </div>

    
    <nav style="padding: 24px 0;">
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-item <?php echo e(request()->routeIs('admin.dashboard') ? 'active' : ''); ?>" style="display: flex; align-items: center; gap: 12px; padding: 12px 16px; margin: 4px 12px; border-radius: 10px; color: <?php echo e(request()->routeIs('admin.dashboard') ? '#60a5fa' : '#94a3b8'); ?>; font-size: 14px; font-weight: 500; text-decoration: none; background: <?php echo e(request()->routeIs('admin.dashboard') ? 'rgba(96, 165, 250, 0.15)' : 'transparent'); ?>;">
            <div class="nav-icon" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: <?php echo e(request()->routeIs('admin.dashboard') ? 'rgba(96, 165, 250, 0.2)' : 'rgba(255, 255, 255, 0.1)'); ?>; border-radius: 8px;">
                <svg style="width: 18px; height: 18px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
            </div>
            <span>Dashboard</span>
        </a>
        <a href="<?php echo e(route('admin.berita.index')); ?>" class="nav-item <?php echo e(request()->routeIs('admin.berita*') ? 'active' : ''); ?>" style="display: flex; align-items: center; gap: 12px; padding: 12px 16px; margin: 4px 12px; border-radius: 10px; color: <?php echo e(request()->routeIs('admin.berita*') ? '#60a5fa' : '#94a3b8'); ?>; font-size: 14px; font-weight: 500; text-decoration: none; background: <?php echo e(request()->routeIs('admin.berita*') ? 'rgba(96, 165, 250, 0.15)' : 'transparent'); ?>;">
            <div class="nav-icon" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; background: <?php echo e(request()->routeIs('admin.berita*') ? 'rgba(96, 165, 250, 0.2)' : 'rgba(255, 255, 255, 0.1)'); ?>; border-radius: 8px;">
                <svg style="width: 18px; height: 18px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
            </div>
            <span>Berita</span>
        </a>
    </nav>

    
    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 24px; border-top: 1px solid rgba(255, 255, 255, 0.1);">
        <form action="<?php echo e(route('admin.logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit" style="width: 100%; display: flex; align-items: center; justify-content: center; gap: 8px; padding: 12px; background: rgba(220, 38, 38, 0.1); border: 1px solid rgba(220, 38, 38, 0.3); border-radius: 10px; color: #f87171; font-size: 14px; font-weight: 600; cursor: pointer;">
                <svg style="width: 18px; height: 18px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>
                <span>Logout</span>
            </button>
        </form>
    </div>
</aside>

<style>
    /* Navigation Hover Effects */
    .nav-item:hover {
        background: rgba(255, 255, 255, 0.08) !important;
        color: #e2e8f0 !important;
    }
    
    .nav-item.active:hover {
        background: rgba(96, 165, 250, 0.15) !important;
        color: #60a5fa !important;
    }
</style>
<?php /**PATH C:\PROOJEC WEB REMA\WEB REMA\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>