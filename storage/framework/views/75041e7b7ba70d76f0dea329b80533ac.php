<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <div class="row g-0 align-items-center">
                    <div class="col-2">
                        <a href="<?php echo e(route('home')); ?>" class="logo m-0 float-start"><img class="img-logo" src="<?php echo e(asset('/assets/images/logo-white.png')); ?>" alt=""></a>
                    </div>
                    <div class="col-6 text-center">
                        <form action="#" class="search-form d-inline-block d-lg-none">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="bi-search"></span>
                        </form>

                        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                            <li class="active"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                            <li><a href="<?php echo e(route('blog')); ?>">Blog</a></li>
                            <li><a href="<?php echo e(route('movies')); ?>">Movies</a></li>
                            <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                            <li><a href="<?php echo e(route('about')); ?>">About Us</a></li>
                        </ul>
                    </div>
                    <div class="col-4 text-end justify-content-between">
                        <a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                            <span></span>
                        </a>
                        <form action="#" class="search-form d-none d-lg-inline-block">
                            <input type="text" class="form-control search" placeholder="Search...">
                            <span class="bi-search"></span>
                        </form>
                        <ul class="js-clone-nav d-none justify-content-between d-lg-inline-block text-start site-menu mx-auto">
                            <?php if(session()->has('user')): ?>
                                <li><a href="<?php echo e(route('logOut')); ?>">Log out</a></li>
                            <?php endif; ?>
                            <?php if(!session()->has('user')): ?>
                                <li><a href="<?php echo e(route('logIn')); ?>">Log in</a></li>
                                <li><a href="<?php echo e(route('singUp')); ?>">Sing up</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\PC2018\Desktop\PHP 2\sajt_MUBI\Mubi_app\resources\views/common/nav.blade.php ENDPATH**/ ?>