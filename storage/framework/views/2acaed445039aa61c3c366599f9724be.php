<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>dashboard - <?php echo e($title); ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo e(asset('blog')); ?>/assets/LogoGweh.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo e(asset('admin')); ?>/css/styles.css" rel="stylesheet" />
        
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
        
        <link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        
        <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
        
        <link rel="stylesheet" href="<?php echo e(asset('mystyle.css')); ?>">

        <style>
            .ck-editor__editable{
                min-height: 100px;
            }
        </style>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php echo $__env->make('dashboard.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper" style="background-color: #ECECEC">
                <!-- Top navigation-->
                <?php echo $__env->make('dashboard.layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- Page content-->
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo e(asset('admin')); ?>/js/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        
        <script type="text/javascript" src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>

            <script>
                function tampilGambar(){
                    let gambar = document.getElementById('gambar');
                    let tampilGambar = document.querySelector('.tampil-gambar');

                    tampilGambar.style.display = 'block';

                    const ofReader = new FileReader();
                    ofReader.readAsDataURL(gambar.files[0]);

                    ofReader.onload = function (ofRevent) {
                    tampilGambar.src = ofRevent.target.result;
                    
                        }
                    }

                    ClassicEditor
		            .create( document.querySelector( '#editor' ) )
		            .catch( error => {
			        console.error( error );
		            } );

                    new DataTable('#myTable');
            </script>

            <?php if($title == 'About' || $title == 'Artikel'): ?>
            <script>
                $('#tokenfield').tokenfield({
                    autocomplete: {
                        source: [<?php echo $source; ?>],
                        delay: 100
                     },
                    showAutocompleteOnFocus: true
                })
            </script>
            <?php endif; ?>
    </body>
</html>
<?php /**PATH C:\evvnxx_blg\resources\views/dashboard/layout/main.blade.php ENDPATH**/ ?>