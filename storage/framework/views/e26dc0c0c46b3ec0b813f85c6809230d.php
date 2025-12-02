
<nav aria-label="Breadcrumb" class="bg-gray-50 border-b border-gray-200 py-3 px-4 md:px-8">
    <div class="max-w-7xl mx-auto">
        <ol class="flex items-center space-x-2 text-sm" itemscope itemtype="https://schema.org/BreadcrumbList">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="flex items-center" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <?php if($item['url']): ?>
                    <a href="<?php echo e($item['url']); ?>"
                        class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium"
                        itemprop="item">
                        <span itemprop="name"><?php echo e($item['name']); ?></span>
                    </a>
                    <meta itemprop="position" content="<?php echo e($index + 1); ?>">
                    <?php if(!$loop->last): ?>
                        <svg class="w-4 h-4 mx-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    <?php endif; ?>
                <?php else: ?>
                    <span class="text-gray-900 font-semibold" itemprop="name"><?php echo e($item['name']); ?></span>
                    <meta itemprop="position" content="<?php echo e($index + 1); ?>">
                <?php endif; ?>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>
    </div>
</nav><?php /**PATH C:\PROOJEC WEB REMA\WEB REMA\resources\views/partials/breadcrumbs.blade.php ENDPATH**/ ?>