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
  <h1>Introduction page</h1>
    <canvas id="chart" width="400" height="200"></canvas>
    <script type="module" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    (async function() {
  const data = [
    { year: 2010, count: 10 },
    { year: 2011, count: 20 },
    { year: 2012, count: 15 },
    { year: 2013, count: 25 },
    { year: 2014, count: 22 },
    { year: 2015, count: 30 },
    { year: 2016, count: 28 },
  ];

  new Chart(
    document.getElementById('acquisitions'),
    {
      type: 'bar',
      data: {
        labels: data.map(row => row.year),
        datasets: [
          {
            label: 'Acquisitions by year',
            data: data.map(row => row.count)
          }
        ]
      }
    }
  );
})();




    </script>
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
<?php /**PATH /home/iwakura/Downloads/Laravel-with-Auth/resources/views/introduction.blade.php ENDPATH**/ ?>