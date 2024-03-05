<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo e(config('app.name')); ?> - <?php echo e($title); ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo e(asset('blog')); ?>/assets/LogoGweh.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
        <link href="<?php echo e(asset('blog')); ?>/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo e(asset('mystyle.css')); ?>">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>
    <body>
        <?php echo $__env->make('blog.layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <?php if(Request::is('/')): ?>
        <?php echo $__env->make('blog.layout.slide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>

        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <?php echo $__env->yieldContent('content'); ?>

                <?php if($title != 'Login'): ?>
                <?php echo $__env->make('blog.layout.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-4 bg-dark mt-4">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; evvnxx 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo e(asset('blog')); ?>/js/scripts.js"></script>
    </body>
</html>
<?php /**PATH C:\evvnxx_blg\resources\views/blog/layout/main.blade.php ENDPATH**/ ?>