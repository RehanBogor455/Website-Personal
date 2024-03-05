

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center mt-5 mb-3">
    <div class="col-lg-4">
        <form action="/login" method="post">
            <?php echo csrf_field(); ?>
            <div class="px-2 text-center">
                <img src="<?php echo e(asset('blog')); ?>/assets/LogoGweh.png" alt="" class="mt-2">
                <h3 class="mt-2"><?php echo e(config('app.name')); ?></h3>
                <?php if(session()->has('Gagal')): ?>
                <div class="alert alert-danger text-start mt-3">
                    <?php echo e(session('Gagal')); ?>

                </div>
                <?php endif; ?>
                <input type="email" name="email" class="form-control rounded py-2 px-3 mt-4 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>" placeholder="masukan email anda">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback text-start ps-3">
                    <?php echo e($message); ?>

                </div>  
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                
                <input type="password" name="password" class="form-control rounded py-2 px-3 mt-4 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="masukan passworld anda">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback text-start ps-3">
                    <?php echo e($message); ?>

                </div> 
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="d-grid mb-3">
                    <button type="submit" name="submid" class="btn btn-primary rounded mt-4">Login</button>
                </div>
                <hr class="mb-5">
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('blog.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\evvnxx_blg\resources\views/blog/login.blade.php ENDPATH**/ ?>