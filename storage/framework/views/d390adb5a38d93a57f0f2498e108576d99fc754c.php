<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">
            <img src="https://makousi.com/images/webp/logo.webp" alt="" class="w-50">
        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-0">
        <div class="list-group list-group-flush my-2">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="list-group-item list-group-item-action sidebar-item align-items-center  fw-bold d-flex py-3
                <?php if($item['active']): ?> text-danger <?php endif; ?>"
                    href="<?php echo e($item['route']); ?>" <?php if($item['is_blank']): ?> target="_blank" <?php endif; ?>>
                    
                    <img src="<?php echo e(asset('images/webp/' . $item['img'])); ?>" height="24" width="24" class="me-3"
                        alt="img">
                    <?php echo e($item['name']); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div><?php /**PATH /Users/sayemh/Downloads/pos_spb/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>