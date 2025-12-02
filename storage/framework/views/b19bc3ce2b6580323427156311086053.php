<?php $__env->startSection("title"); ?> Articles <?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<div class="row mb-4">
  <a href="/introduction">Back to introduction</a>
    <div class="col-xl-6">
        <?php if(Session::has('success')): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">× </button>
                <?php echo e(Session::get('success')); ?>

            </div>
        <?php endif; ?>
        <?php if(Session::has('failed')): ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">× </button>
                <?php echo e(Session::get('failed')); ?>

            </div>
        <?php endif; ?>
    </div>
    <div class="col-xl-6 text-right">
        <a href="<?php echo e(route('articles.create')); ?>" class="btn btn-success "> Add New </a>
    </div>
</div>
<table class="table table-striped">
    <thead>
        <th> Id </th>
        <th> Title </th>
        <th> Description </th>
        <th> Action </th>
    </thead>
    <tbody>
        <?php if(count($articles) > 0): ?>
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($article->id); ?> </td>
                    <td> <?php echo e($article->title); ?> </td>
                    <td> <?php echo e($article->description); ?> </td>
                    <td>
                        <form action="<?php echo e(route('articles.destroy', $article->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <a href="<?php echo e(route('articles.show', $article->id)); ?>" class="btn btn-sm btn-info"> View </a>
                            <a href="<?php echo e(route('articles.edit', $article->id)); ?>" class="btn btn-sm btn-success"> Edit </a>
                            <button type="submit" class="btn btn-sm btn-danger"> Delete </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php echo $articles->links('pagination::bootstrap-4'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("master", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/iwakura/Downloads/Laravel-with-Auth/resources/views/index.blade.php ENDPATH**/ ?>