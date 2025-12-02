<?php if (isset($component)) { $__componentOriginal19c89fc0ffce27f0bd123c8c9b198bd8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19c89fc0ffce27f0bd123c8c9b198bd8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.mainpage','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('mainpage'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <h1>User page</h1>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
  Nunc pellentesque posuere nunc, at laoreet augue. Donec
  ultricies eu mi sit amet dictum. Maecenas ut posuere
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19c89fc0ffce27f0bd123c8c9b198bd8)): ?>
<?php $attributes = $__attributesOriginal19c89fc0ffce27f0bd123c8c9b198bd8; ?>
<?php unset($__attributesOriginal19c89fc0ffce27f0bd123c8c9b198bd8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19c89fc0ffce27f0bd123c8c9b198bd8)): ?>
<?php $component = $__componentOriginal19c89fc0ffce27f0bd123c8c9b198bd8; ?>
<?php unset($__componentOriginal19c89fc0ffce27f0bd123c8c9b198bd8); ?>
<?php endif; ?>
<?php /**PATH /home/iwakura/Downloads/Laravel-with-Auth/resources/views/user.blade.php ENDPATH**/ ?>