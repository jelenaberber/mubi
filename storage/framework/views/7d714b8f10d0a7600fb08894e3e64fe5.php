<?php $__env->startSection('title'); ?> Log in <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="section login-background">
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="200">
                    <form action="<?php echo e(route('logIn')); ?>" method="post" class=" d-flex justify-content-center">
                        <?php echo csrf_field(); ?>
                        <div class="row d-flex justify-content-center">
                            <div class="col-6 mb-3 mx-2">
                                <input type="email" name="email" class="form-control form" placeholder="Email">
                                <p class="text-danger"><?php echo e($errors->first('email')); ?></p>
                            </div>
                            <div class="col-6 mb-3 mx-2">
                                <input type="password" name="password" class="form-control form" placeholder="Password">
                                <p class="text-danger"><?php echo e($errors->first('password')); ?></p>
                            </div>
                            <div class="col-8 d-flex justify-content-center">
                                <input type="submit" value="Log in" class="btn btn-primary btn-form">
                            </div>
                            <div class="col-8 d-flex justify-content-center">
                                <p class="mt-2 text">You don`t have account? <a href="<?php echo e(route('singUp')); ?>">Sing up</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- /.untree_co-section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC2018\Desktop\PHP 2\sajt_MUBI\Mubi_app\resources\views/client/login.blade.php ENDPATH**/ ?>