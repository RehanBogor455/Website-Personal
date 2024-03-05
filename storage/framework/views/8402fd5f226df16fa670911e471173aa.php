

<?php $__env->startSection('content'); ?>
<div class="container-fluid px-4">
    <div class="card mt-3">
        <div class="card-body px-4">
        <h1 class="mt-2 mb-4 ">Slide</h1>

        <?php if(Session::get('info')): ?>
            <div class="alart alart-info"><?php echo e(Session::get('info')); ?></div>
        <?php endif; ?>

        <a href="/dashboard/slide/create" class="btn btn-outline-primary mb-2" title="tambah slide"><i class="fa-solid fa-plus"></i> Slide Baru </a>


        <table class="table table-hover table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Headline</th>
                    <th>Operasi</th>
                </tr>
            </thead>
            <tbody>
                <?php ($no = 1); ?>
                <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no++); ?></td>
                    <td>
                        <img src="<?php echo e(asset('images/' . 
                        $slide->gambar)); ?>" width="250px" alt="slide">
                    </td>
                    <td class="col-7"><?php echo e($slide->judul); ?></td>
                    <td class="col-1">
                        <a href="/dashboard/slide/<?php echo e($slide->id); ?>/edit" class="btn btn-warning btn-sm" title="edit slide"><i class="fa fa-pen"></i></a>
                        <form action="/dashboard/slide/<?php echo e($slide->id); ?>" method="post" class="d-inline" onsubmit="return confirm('Anda yakin akan menghapus slide ini ?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm" title="hapus slide"><i class="fa-solid fa-trash-can-arrow-up"></i></button>
                        </form>
                    </td>
                </tr>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\evvnxx_blg\resources\views/dashboard/slide/index.blade.php ENDPATH**/ ?>