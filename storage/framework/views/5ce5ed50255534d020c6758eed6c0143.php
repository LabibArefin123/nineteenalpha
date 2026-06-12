<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title', 'Nineteen Alpha'); ?></title>
    <link rel="icon" href="<?php echo e(asset('images/nine.png')); ?>" type="image/png">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="antialiased bg-white text-gray-900">
    <?php echo $__env->yieldContent('content'); ?>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

</body>

</html>
<?php /**PATH E:\xampp\htdocs\Nineteenalpha\resources\views/layouts/app.blade.php ENDPATH**/ ?>