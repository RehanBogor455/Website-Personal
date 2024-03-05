

<?php $__env->startSection('content'); ?>
<div class="container-fluid px-4">
    <div class="card mt-3">
        <div class="card-body px-4">
            <div class="d-flex justify-content-between col-lg">
                <h1 class="mt-2 mb-4 text-center">Artikel</h1>
            </div>

            <?php if(Session::get('info')): ?>
                <div class="alert alert-info">
                    <?php echo e(Session::get('info')); ?>

                </div>
            <?php endif; ?>

            <a href="/dashboard/artikel/create" class="btn btn-outline-primary mb-3"><i class="fa fa-plus"></i>Artikel Baru</a>

            <table class="table table-hover table-sm" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Artikel</th>
                        <th>Kategori</th>
                        <th>Tag</th>
                        <th>Oprasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php ($no = 1); ?>
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($no++); ?></td>
                            <td><?php echo e($article->judul); ?></td>
                            <td><?php echo e($article->category->nama); ?></td>
                            <td>
                                <?php $__currentLoopData = $article->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <button class="btn btn-sm btn-outline-dark mb-1>" type<"button"><?php echo e($tag->name); ?></button>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td class="col-1">
                                <a href="/dashboard/artikel/<?php echo e($article->id); ?>/edit" class="btn btn-warning btn-sm" title="edit kategory"><i class="fa fa-pen"></i></a>
                                <form action="/dashboard/artikel/<?php echo e($article->id); ?>" method="post" class="d-inline" onsubmit="return confirm('Anda yakin akan menghapus artikel ini ?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm" title="hapus kategori"><i class="fa-solid fa-trash-can-arrow-up"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\evvnxx_blg\resources\views/dashboard/artikel/index.blade.php ENDPATH**/ ?>