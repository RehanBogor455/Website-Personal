

<?php $__env->startSection('content'); ?>
<div class="container-fluid px-4">
    <div class="card mt-3">
        <div class="card-body px-4">
            <div class="d-flex justify-content-between col-lg">
                <h1 class="mt-2 mb-4 text-center">Edit Slide</h1>
                <div class="mt-3 text-md-end">
                    <a href="/dashboard/slide" class="btn btn-transparant text-primary mb-2"><i class="fa-solid fa-arrow-left"></i>Kembali</a>
                </div>
            </div>
            <div class="col-lg">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger"><?php echo e(('Update Slide GAGAL..')); ?></div>
                <?php endif; ?>
                <form action="/dashboard/slide/<?php echo e($data->id); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="mb-3">
                        <label for="judul" class="form-label">headline</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="judul" id="judul" value="<?php echo e(old('judul', $data->judul)); ?>">
                        <?php $__errorArgs = ['judul'];
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
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="hidden" value="<?php echo e($data->gambar); ?>" name="gambarLama">
                        <?php if($data->gambar): ?>
                            <img src="<?php echo e(asset('images/' . $data->gambar)); ?>" alt="" class="img-fluid tampil-gambar mb-3 col-lg-5 d-block">
                        
                        <?php else: ?>
                            <img src="" width="500px" alt="" class="img-fluid tampil-gambar mb-3 col-lg-5">
                        <?php endif; ?>
                        <input type="file" class="form-control <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="gambar" id="gambar" onchange="tampilGambar()">
                        <?php $__errorArgs = ['gambar'];
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
                        <label for="kutipan" class="form-label">Kutipan</label>
                        <?php $__errorArgs = ['kutipan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <textarea name="kutipan" id="editor" class="form-control"> <?php echo e(old('kutipan', $data->kutipan)); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-save"></i> Update </button>
                </form>
            </div>
        </div>
    </div>
</div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\evvnxx_blg\resources\views/dashboard/slide/slide-edit.blade.php ENDPATH**/ ?>