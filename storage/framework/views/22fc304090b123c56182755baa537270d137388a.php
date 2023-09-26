<?php $__env->startSection('content'); ?>

    <div class="p-10 font-bold text-3xl">Timeline : <?php echo e($page); ?></div>
    <main class="bg-white min-h-screen m-10 rounded p-10">Choose section you want to explore:</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/app/rumuseum/resources/views/layouts/default/timeline.blade.php ENDPATH**/ ?>