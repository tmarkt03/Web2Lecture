
<?php $__env->startSection("title"); ?> Create Article <?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 text-right">
            <a href="<?php echo e(route('articles.index')); ?>" class="btn btn-danger"> Back to Articles </a>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                <form action="<?php echo e(route('articles.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="card shadow">
                    <?php if(Session::has('success')): ?>
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">× </button>
                            <?php echo e(Session::get('success')); ?>

                        </div>
                    <?php elseif(Session::has('failed')): ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">× </button>
                            <?php echo e(Session::get('failed')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="card-header">
                        <h4 class="card-title"> Create Article </h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title"> Title </label>
                            <input type="text" name="title" class="form-control" id="title" value="<?php echo e(old('title')); ?>">
                            <?php echo $errors->first("title", "<span class='text-danger'>:message </span>"); ?>

                        </div>
                        <div class="form-group">
                            <label for="description"> Description </label>
                            <textarea class="form-control" name="description" id="description"><?php echo e(old('description')); ?></textarea>
                            <?php echo $errors->first("description", "<span class='text-danger'>:message </span>"); ?>

                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success"> Save </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("master", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/iwakura/Downloads/Laravel-with-Auth/resources/views/create-article.blade.php ENDPATH**/ ?>