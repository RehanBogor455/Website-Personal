

<?php $__env->startSection('content'); ?>
<div class="container-fluid px-4">
    <div class="card mt-3">
        <div class="card-body px-4">
            <div class="d-flex justify-content-between col-lg">
                <h1 class="mt-2 mb-4 text-center">Edit Kategori</h1>
                <div class="mt-3 text-md-end col-lg">
                    <a href="/dashboard/kategori" class="btn btn-transparant text-primary mb-2"><i class="fa-solid fa-arrow-left"></i>Kembali</a>
                </div>
            </div>

            <div class="col-lg">
                <?php if(Session::get('info')): ?>
                    <div class="alert alert-info"><?php echo e(Session::get('info')); ?></div>
                <?php elseif($errors->any()): ?>
                    <div class="alert alert-danger"><?php echo e('Edit Kategori Gagal..'); ?></div>
                <?php endif; ?>

                <form action="/dashboard/kategori/<?php echo e($data->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="kategori" name="nama" value="<?php echo e(old('nama', $data->nama)); ?>" onkeyup="getSlug()">
                        <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="slug" name="slug" value="<?php echo e(old('slug', $data->slug)); ?>" readonly>
                        <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>    
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label> 
                        <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <textarea name="deskripsi" class="form-control"><?php echo e(old('deskripsi', $data->deskripsi)); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-save"></i> Update</button>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
    function getSlug(){
        $.get('<?php echo e(url('/slug-kategori')); ?>', {'kategori': $('#kategori').val()},
            function (data){
                $('#slug').val(data.slug)
            }
        )
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\evvnxx_blg\resources\views/dashboard/kategori/kategori-edit.blade.php ENDPATH**/ ?>