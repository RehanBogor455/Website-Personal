

<?php $__env->startSection('content'); ?>
<!-- Blog entries-->
<div class="col-lg-8">
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <header class="mb-4">
            <h1 class="fw-bolder mb-1"><?php echo e($user->name); ?></h1>
    </header>
    <figure class="mb-4"><img src="<?php echo e(asset('images/' . $user->foto)); ?>" class="img-fluid" alt=""></figure>
    <section class="mb-4"><?php echo $user->words; ?></section>

    <h1 class="mt-5 mb-4 fw-bold">Keahlian</h1>
    <?php $__currentLoopData = explode(', ', $user->keahlian); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <span class="text-secondary me-3 h-3"><i class="devicon-<?php echo e(strtolower($lang)); ?>-plain"></i></span>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <h1 class="mt-5 mb-4 fw-bold">Kontak</h1>
    <h5 class="text-secondary mb-3"><i class="fa-solid fa-location-crosshairs"></i><span class="ms-2"><?php echo e($user->alamat); ?></span></h5>
    <h5 class="text-secondary mb-3"><i class="fa-solid fa-envelope"></i><span class="ms-2"><?php echo e($user->email); ?></span></h5>
    <h5 class="text-secondary mb-3"><i class="fa-solid fa-square-phone"></i><span class="ms-2"><?php echo e($user->telpon); ?></span></h5>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('blog.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\evvnxx_blg\resources\views/blog/tentang.blade.php ENDPATH**/ ?>