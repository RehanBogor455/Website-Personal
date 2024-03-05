<!-- Side widgets-->
<div class="col-lg-4">
    <!-- Search widget-->
    <div class="card mb-4 border-0">
        <div class="card-header bg-transparent fw-bold fs-5" style="border-bottom: 2px solid black">Pencarian</div>
        <div class="card-body">
            <form action="/artikel">
                <div class="input-grup">
                    <input type="text" name="cari" class="form-control border-0 border-bottom rounded-0" placeholder="Masukan kata kunci pencarian">
                    <button type="submit" class="btn btn-light border-bottom"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
            
        </div>
    </div>
    <!-- Categories widget-->
    <div class="card mb-4 border-0">
        <div class="card-header bg-transparent fw-bold fs-5" style="border-bottom: 2px solid black">Kategori</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1">
                            <a href="/artikel?kategori=<?php echo e($category->slug); ?>"
                                class="text-decoration-none text-dark link-primary d-grid 
                                d-flex justify-content-between"><span>
                                    <?php echo e($category->nama); ?>

                                </span>
                                <span>
                                    <?php if($category->articles): ?>
                                        <?php echo e($category->articles->count()); ?>

                                    <?php endif; ?>
                                </span></a>                                
                                
                    </ul>                       
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Side widget-->
    <div class="card mb-4 border-0">
        <div class="card-header bg-transparent fw-bold fs-5" style="border-bottom: 2px solid black"><?php echo e($label); ?></div>
        <div class="card-body">
            <?php $__currentLoopData = $views; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row mb-3">
                <div class="col-4">
                    <a href="/artikel/<?php echo e($view->slug); ?>"><img src="<?php echo e(asset('images/'.$view->gambar)); ?>" class="img-fluid rounded-0" alt=""></a>
                </div>
                <div class="col-8">
                    <a href="/artikel/<?php echo e($view->slug); ?>" class="text-dark text-decoration-none h6 d-block"><?php echo e($view->judul); ?></a>
                    <small class="text-muted"><?php echo e($view->created_at->format('d F Y')); ?></small>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div><?php /**PATH C:\evvnxx_blg\resources\views/blog/layout/aside.blade.php ENDPATH**/ ?>