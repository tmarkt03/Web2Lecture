<!doctype html>
<html lang="en">
  <head>
    <title>My Website</title>
    <link rel="stylesheet" href="/css/style.css" />
  </head>
  <body>
    <div class="header">
		<?php echo $__env->make('header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
    <div class="content">
		<?php echo e($slot); ?>

    </div>
  </body>
</html>
<?php /**PATH /home/iwakura/Downloads/Laravel-with-Auth/resources/views/components/mainpage.blade.php ENDPATH**/ ?>