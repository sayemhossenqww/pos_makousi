<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POS</title>
    <link rel="preload" href="<?php echo e(mix('css/app.css')); ?>" as="style" />
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
    <style>
        html,
        body {
            height: 100vh;
        }

    </style>
</head>

<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-md-12">
                <div id="pos" data-tax="<?php echo e($taxRate); ?>" data-delivery="<?php echo e($deliveryCharge); ?>"
                    data-discount="<?php echo e($discount); ?>"></div>
            </div>
        </div>
    </div>

    



</body>

</html>
<script defer src="<?php echo e(mix('js/app.js')); ?>"></script>
<?php /**PATH /Users/sayemh/Downloads/pos_spb/resources/views/pos/show.blade.php ENDPATH**/ ?>