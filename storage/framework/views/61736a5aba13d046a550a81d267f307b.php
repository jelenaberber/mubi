<?php $__env->startSection('title'); ?> Movies <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="section search-result-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading"><h1>Movies</h1></div>
                </div>
            </div>
            <div class="row posts-entry">
                <div class="col-lg-8 d-flex flex-wrap justify-content-between" id="movies">
                    <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="movie blog-entry d-flex flex-wrap blog-entry-search-item col-6">
                            <a href="<?php echo e(route('movie', ['movie_id' => $movie->id])); ?>" class="img-link me-5">
                                <img src="<?php echo e(asset('/assets/images/'.$movie->img_max)); ?>" alt="Image" class="img-fluid">
                            </a>
                            <div class="col-12">
                                <span class="date"><?php echo e($movie->year); ?><a href="#"></a></span>
                                <h2><a href="<?php echo e(route('movie', ['movie_id' => $movie->id])); ?>"><?php echo e($movie->name); ?></a></h2>
                                <h2 class="h5"><a href="<?php echo e(route('movie', ['movie_id' => $movie->id])); ?>" class="h6"><?php echo e($movie->original_name); ?></a></h2>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    <div class="row text-start pt-5 border-top col-12">
                        <div class="col-md-12 d-flex justify-content-center">
                            <div class="custom-pagination">
                                <span>1</span>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <span>...</span>
                                <a href="#">15</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 sidebar">

                    <div class="sidebar-box search-form-wrap mb-4">
                            <input type="text" class="form-control" id="search" name="search" placeholder="Type a keyword"/>
                    </div>

                    <div class="sidebar-box">
                        <h3 class="heading">Genres</h3>
                        <ul class="categories">
                            <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="fs-5 genres"><input type="checkbox" name="genre" value="<?php echo e($g->id); ?>"/> <?php echo e($g->name); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <div class="sidebar-box">
                            <div class="multiselect">
                                <div class="selectBox">
                                    <select class="form-select">
                                        <option>Select festivals</option>
                                    </select>
                                    <div class="overSelect"></div>
                                </div>
                                <div id="checkboxes">
                                    <?php $__currentLoopData = $festivals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <label class="fs-6 festivals">
                                        <input type="checkbox" value="<?php echo e($f->id); ?>" /> <?php echo e($f->name); ?>

                                    </label>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC2018\Desktop\PHP 2\sajt_MUBI\Mubi_app\resources\views/client/movies.blade.php ENDPATH**/ ?>