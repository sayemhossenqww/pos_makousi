<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success alert-dismissible fade show py-3" role="alert">
        <i class="bi bi-check-circle me-2 fs-4 align-middle text-success fw-bold"></i>
        <span class=" align-middle">
            <?php echo e($message); ?>

        </span>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.btn-alert-dismiss','data' => []]); ?>
<?php $component->withName('btn-alert-dismiss'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
<?php endif; ?>
<?php if($message = Session::get('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show py-3" role="alert">
        <i class="bi bi-x-circle me-2 fs-4 align-middle text-danger fw-bold"></i>
        <span class=" align-middle">
            <?php echo e($message); ?>

        </span>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.btn-alert-dismiss','data' => []]); ?>
<?php $component->withName('btn-alert-dismiss'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
<?php endif; ?>
<?php if($message = Session::get('warning')): ?>
    <div class="alert alert-warning alert-dismissible fade show py-3" role="alert">
        <i class="bi bi-exclamation-triangle me-2 fs-4 align-middle text-black fw-bold"></i>
        <span class=" align-middle">
            <?php echo e($message); ?>

        </span>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.btn-alert-dismiss','data' => []]); ?>
<?php $component->withName('btn-alert-dismiss'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
<?php endif; ?>
<?php if($message = Session::get('info')): ?>
    <div class="alert alert-info alert-dismissible fade show py-3" role="alert">
        <i class="bi bi-info-circle me-2 fs-4 align-middle text-primary fw-bold"></i>
        <span class=" align-middle">
            <?php echo e($message); ?>

        </span>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.btn-alert-dismiss','data' => []]); ?>
<?php $component->withName('btn-alert-dismiss'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
<?php endif; ?>
<?php if($message = Session::get('status')): ?>
    <div class="alert alert-info alert-dismissible fade show py-3" role="alert">
        <i class="bi bi-info-circle me-2 fs-4 align-middle text-primary fw-bold"></i>
        <span class="align-middle">
            <?php echo e($message); ?>

        </span>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.btn-alert-dismiss','data' => []]); ?>
<?php $component->withName('btn-alert-dismiss'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH /Users/sayemh/Downloads/pos_spb/resources/views/layouts/alerts.blade.php ENDPATH**/ ?>