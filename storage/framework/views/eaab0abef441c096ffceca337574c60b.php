<?php $__env->startSection('title'); ?> Sing up <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="section login-background">
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10" data-aos="fade-up" data-aos-delay="200">
                    <form action="<?php echo e(route('singUp')); ?>" method="post" enctype="multipart/form-data" class="d-flex justify-content-center">
                        <?php echo csrf_field(); ?>
                        <div class="row d-flex justify-content-center">
                            <div class="col-6 mb-3 mx-2">
                                <input type="text" name="first_name" class="form-control form" placeholder="First name">
                                <p class="text-danger"><?php echo e($errors->first('first_name')); ?></p>
                            </div>
                            <div class="col-6 mb-3 mx-2">
                                <input type="text" name="last_name" class="form-control form" placeholder="Last name">
                                <p class="text-danger"><?php echo e($errors->first('last_name')); ?></p>
                            </div>
                            <div class="col-6 mb-3 mx-2">
                                <input type="text" name="username" class="form-control form" placeholder="Username">
                                <p class="text-danger"><?php echo e($errors->first('username')); ?></p>
                            </div>
                            <div class="col-6 mb-3 mx-2">
                                <input type="email" name="email" class="form-control form" placeholder="Email">
                                <p class="text-danger"><?php echo e($errors->first('email')); ?></p>
                            </div>
                            <div class="col-6 mb-3 mx-2">
                                <input type="password" name="password" class="form-control form" placeholder="Password">
                                <p class="text-danger"><?php echo e($errors->first('password')); ?></p>
                            </div>
                            <div class="col-8 d-flex justify-content-center mb-3">
                                <label class="text">Upload profile picture (optional)</label>
                                <input type="file" name="profile_img" class="text">
                                <p class="text-danger"><?php echo e($errors->first('profile_img')); ?></p>
                            </div>
                            <div class="col-8 d-flex justify-content-center">
                                <input type="submit" value="Sing up" class="btn btn-primary btn-form">
                            </div>
                        </div>
                    </form>
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div> <!-- /.untree_co-section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC2018\Desktop\PHP 2\sajt_MUBI\Mubi_app\resources\views/client/singUp.blade.php ENDPATH**/ ?>