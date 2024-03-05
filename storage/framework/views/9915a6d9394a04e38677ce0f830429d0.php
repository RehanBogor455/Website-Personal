

<?php $__env->startSection('content'); ?>
<!-- Blog entries-->
<div class="col-lg-8">
    <!-- Featured blog post-->
    <div class="card mb-4 border-0">
        <a href="/artikel/<?php echo e($articles[0]->slug); ?>"><img class="card-img-top rounded-0" src="<?php echo e(asset('images/' . $articles[0]->gambar)); ?>" alt="gambar article" /></a>
        <div class="card-body px-0">
            <div class="small text-muted">Diposting <?php echo e($articles[0]->created_at->format('d F y')); ?> - Kategori <a href="/artikel?kategori=<?php echo e($articles[0]->category->slug); ?>" class="text-decoration-none"><?php echo e($articles[0]->category->nama); ?></a></div>
            <h2 class="card-title"><?php echo e($articles[0]->judul); ?></h2>
            <p class="card-text"><?php echo e($articles[0]->kutipan); ?></p>
            <a class="text-decoration-none" href="/artikel/<?php echo e($articles[0]->slug); ?>">Lanjut Baca →</a>
            <div class="mt-3">
                <?php $__currentLoopData = $articles[0]->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="/artikel?tag=<?php echo e($tag->slug); ?>" class="badge bg-secondary text-decoration-none link-light"><?php echo e($tag->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- Nested row for non-featured blog posts-->
    <div class="row">
        <?php $__currentLoopData = $articles->skip(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-6">
            <!-- Blog post-->
            <div class="card mb-4 border-0">
                <a href="/artikel/<?php echo e($article->slug); ?>"><img class="card-img-top rounded-0" src="<?php echo e(asset('images/' . $article->gambar)); ?>" alt="gambar article" /></a>
                <div class="card-body px-0">
                    <div class="small text-muted">Diposting <?php echo e($article->created_at->format('d F y')); ?> - Kategori <a href="/artikel?kategori=<?php echo e($article->category->slug); ?>" class="text-decoration-none"><?php echo e($article->category->nama); ?></a></div>
                    <h2 class="card-title"><?php echo e($article->judul); ?></h2>
                    <p class="card-text"><?php echo e($article->kutipan); ?></p>
                    <a class="text-decoration-none" href="/artikel/<?php echo e($article->slug); ?>">Lanjut Baca →</a>
                    <div class="mt-3">
                        <?php $__currentLoopData = $article->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="/artikel?tag=<?php echo e($tag->slug); ?>" class="badge bg-secondary text-decoration-none link-light"><?php echo e($tag->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <!-- Pagination-->
    <hr>
    <?php echo e($articles->links()); ?>

</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('blog.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\evvnxx_blg\resources\views/blog/index.blade.php ENDPATH**/ ?>