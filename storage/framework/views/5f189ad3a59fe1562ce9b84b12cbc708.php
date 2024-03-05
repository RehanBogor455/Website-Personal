

<?php $__env->startSection('content'); ?>
<div class="container-fluid px-4">
    <div class="card mt-3">
        <div class="card-body px-4">
            <div class="d-flex justify-content-between col-lg">
                <h1 class="mt-2 mb-4 text-center">Kategori</h1>
            </div>

            <?php if(Session::get('info')): ?>
                <div class="alert alert-info">
                    <?php echo e(Session::get('info')); ?>

                </div>
            <?php endif; ?>

            <a href="/dashboard/kategori/create" class="btn btn-outline-primary mb-3"><i class="fa fa-plus"></i> Kategori Baru</a>

            <table class="table table-hover table-sm" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi</th>
                        <th>Oprasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php ($no = 1); ?>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($no++); ?></td>
                            <td><?php echo e($category->nama); ?></td>
                            <td><?php echo e($category->deskripsi); ?></td>
                            <td>
                                <a href="/dashboard/kategori/<?php echo e($category->id); ?>/edit" class="btn btn-warning btn-sm" title="edit kategory"><i class="fa fa-pen"></i></a>
                                <form action="/dashboard/kategori/<?php echo e($category->id); ?>" method="post" class="d-inline" onsubmit="return confirm('Anda yakin akan menghapus kategori ini ?')">
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
<?php echo $__env->make('dashboard.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\evvnxx_blg\resources\views/dashboard/kategori/index.blade.php ENDPATH**/ ?>