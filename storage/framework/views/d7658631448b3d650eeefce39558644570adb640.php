<!DOCTYPE html>
<html lang="en" dir="ltr" translate="yes">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $__env->yieldContent('title', config('app.name')); ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preload" href="<?php echo e(mix('css/app.css')); ?>" as="style" />
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

    <?php echo $__env->yieldPushContent('style'); ?>
    <?php echo $__env->yieldPushContent('head'); ?>
</head>

<body>
    <div id="app">
        <?php if(auth()->guard()->check()): ?>
            <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('layouts.sidebar-items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="container-fluid py-3">
                <?php echo $__env->make('layouts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        <?php else: ?>
            <div class="">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>
<script src="<?php echo e(mix('js/app.js')); ?>"></script>
<?php echo $__env->yieldPushContent('script'); ?>
<?php /**PATH /Users/sayemh/Downloads/pos_spb/resources/views/layouts/app.blade.php ENDPATH**/ ?>