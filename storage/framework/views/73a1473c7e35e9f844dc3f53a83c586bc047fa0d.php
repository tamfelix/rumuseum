<?php $__env->startSection('content'); ?>

<!-- BANNER WIDGETS -->
<div class="banner w-full h-72">
    <div class="row pl-24">
        <div class="col-md-1"></div>
        <h2 class="banner__header col-md-4 p-3 text-3xl pt-16 font-bold">
            <a href="/widgets/">
                <?php echo e(__('sections.banner1')); ?>

            </a>
        </h2>
        <button class="col-md-1 btn-primary banner-button rounded-full mt-5 m-3 text-white"  value="<?php echo e(__('sections.button')); ?>" type="submit" >
            <?php echo e(__('sections.button')); ?>

        </button>

    </div>
</div>




<!--NEWS SECTION -->
<section class="flex inline-flex">
    <div class="w-1/4 flex flex-col mt-8">
        <?php $__currentLoopData = $leftmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href=" <?php echo e(route('menus.show', $item['id'])); ?> " class="bg-[var(--h-color8)]  text-gray-600 w-[150px] h-[50px] my-1 pl-3 flex items-center">
                <?php echo e($item['title_ru']); ?>

            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="p-5 w-full ml-10 flex">
        <div class="container mb-md-5 border-bottom ">
             <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h1 class="first-article__header text-3xl font-bold pt-10 w-[40%] bg-green-300">
                    <a href="<?php echo e(route('blogs.index')); ?>">
                    <?php echo e($new['title_'.app()->getLocale()]); ?> </a>
                </h1>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</section>


<!-- RECENT ITEMS -->

<div class="row py-5 ml-10">
    <h3 class="header3 mb-md-4 py-10 text-3xl font-bold   ">
        <a href="<?php echo e(route('events.index')); ?>">
            <?php echo e(__('sections.new')); ?>

        </a>
    </h3>

    <div class="inline-flex col-md-4 mx-[10%] ">
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a class=" mb-md-4 p-2 " href="<?php echo e(route('stocks.show', $image->id)); ?>">
            <img src="<?php echo e(env('APP_URL').'/'.$image->img); ?>" class="shadow miniature " alt=""  >
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>


<!-- EVENTS ROW -->

<div class="row pt-5 pl-10">
    <h3 class="header3 mb-md-4 py-10 text-3xl font-bold   ">
        <a href="<?php echo e(route('events.index')); ?>">
            <?php echo e(__('sections.events')); ?>

        </a>
    </h3>
    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="inline-flex shadow rounded-full h-40 p-4 bg-white w-60 ">
            <div class="flex flex-col  justify-evenly items-center w-full">
                <h4 class="bg-gray-50 font-bold text-xl rounded  w-full text-center"><a href="/events/<?php echo e($event->id); ?>" class=""><?php echo e($event->name); ?></a></h4>
                    <i class="max-h-20 text-xs leading-tight h-12 text-center">-<?php echo e($event->description); ?></i>
                    <p class="text-xs mx-auto"><?php echo e($event->country); ?></p>
                    <div class="text-xs mx-auto"><?php echo e($event->date); ?></div>
            </div>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<!-- BANNER 2 -->

<div class="row pb-0 ">
    <div class="banner2 h-72">
        <h3 class="banner__header text-3xl font-bold pl-10 pt-20 mt-10">
            <a href="<?php echo e(route('products.index')); ?>"><?php echo e(__('sections.shop')); ?> </a>
        </h3>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/app/rumuseum/resources/views/layouts/default/default.blade.php ENDPATH**/ ?>