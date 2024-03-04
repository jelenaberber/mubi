<!doctype html>
<html lang="en">
<head>
    <?php echo $__env->make('common.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>MUBI | <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <?php echo $__env->make('common.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Preloader -->
<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<script>
    var csrf_token = "<?php echo e(csrf_token()); ?>";
    var imageUrl = "<?php echo e(asset('assets/images/dogtooth.jpg')); ?>";
</script>

<script src="<?php echo e(asset("/assets/js/bootstrap.bundle.min.js")); ?>"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="<?php echo e(asset("/assets/js/tiny-slider.js")); ?>"></script>
<script src="<?php echo e(asset("/assets/js/flatpickr.min.js")); ?>"></script>
<script src="<?php echo e(asset("/assets/js/aos.js")); ?>"></script>
<script src="<?php echo e(asset("/assets/js/glightbox.min.js")); ?>"></script>
<script src="<?php echo e(asset("/assets/js/navbar.js")); ?>"></script>
<script src="<?php echo e(asset("/assets/js/counter.js")); ?>"></script>
<script src="<?php echo e(asset("/assets/js/custom.js")); ?>"></script>
<script src="<?php echo e(asset("/assets/js/moviesPage.js")); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\PC2018\Desktop\PHP 2\sajt_MUBI\Mubi_app\resources\views/layout.blade.php ENDPATH**/ ?>