
<?php $__env->startSection("title"); ?> Show Article <?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 text-right">
            <a href="<?php echo e(route('articles.index')); ?>" class="btn btn-danger"> Back to Articles </a>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="card-title"> Show Article </h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="title"> Title </label>
                        <input type="text" readonly name="title" class="form-control" id="title" value="<?php if(!empty($article)): ?> <?php echo e($article->title); ?> <?php endif; ?>">
                    </div>
                    <div class="form-group">
                        <label for="description"> Description </label>
                        <textarea class="form-control" readonly name="description" id="description"><?php if(!empty($article)): ?> <?php echo e($article->description); ?> <?php endif; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("master", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/iwakura/Downloads/Laravel-with-Auth/resources/views/show-article.blade.php ENDPATH**/ ?>