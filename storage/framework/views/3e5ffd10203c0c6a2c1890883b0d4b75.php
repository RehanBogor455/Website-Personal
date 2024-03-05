

<?php $__env->startSection('content'); ?>
<!-- Blog entries-->
<div class="col-lg-8">
    <header class="mb-4">
        <h1 class="fw-boldder mb-1"><?php echo e($article->judul); ?></h1>
        <div class="text-muted fst-italic mb-2">
            Diposting <?php echo e($article->created_at->format('d F y') . ' oleh ' . $article->user->name); ?> - Kategori <a href="/artikel?kategori=<?php echo e($article->category->slug); ?>" class="text-decoration-none"><?php echo e($article->category->nama); ?> </a>
        </div>
        <?php $__currentLoopData = $article->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="/artikel?tag=<?php echo e($tag->slug); ?>" class="badge bg-secondary text-decoration-none link-light"><?php echo e($tag->name); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </header>

    <figure class="mb-4"><img src="<?php echo e(asset('images/' . $article->gambar)); ?>" class="img-fluid" alt=""></figure>
    <section class="mb-4"><?php echo $article->isi; ?></section>

    <a href="/artikel" class="text-decoration-none mb-3"><i class="fa-solid fa-arrow-left"></i>Kembali ke Artikel</a>


</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('blog.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\evvnxx_blg\resources\views/blog/detail.blade.php ENDPATH**/ ?>