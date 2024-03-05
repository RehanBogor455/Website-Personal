<!-- Page header with logo and tagline-->
<header class="border-bottom mb-4">
    <div class="container-fluid px-0">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo e(asset('images/' . $slides[0]->gambar)); ?>" class="d-block w-100" height="400px" alt="slide">
                <div class="carousel-caption d-md-block" style="top: 120px; z-index: 1;">
                    <h1 class="fw-bolder"><?php echo e($slides[0]->judul); ?></h1>
                    <?php echo $slides[0]->kutipan; ?>

                </div>
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(asset('images/' . $slides[1]->gambar)); ?>" class="d-block w-100" height="400px" alt="slide">
                <div class="carousel-caption d-md-block" style="top: 120px; z-index: 1;">
                    <h1 class="fw-bolder"><?php echo e($slides[1]->judul); ?></h1>
                    <?php echo $slides[1]->kutipan; ?>

                </div>
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(asset('images/' . $slides[2]->gambar)); ?>" class="d-block w-100" height="400px" alt="slide">
                <div class="carousel-caption d-md-block" style="top: 120px; z-index: 1;">
                    <h1 class="fw-bolder"><?php echo e($slides[2]->judul); ?></h1>
                    <?php echo $slides[2]->kutipan; ?>

                </div>
              </div>
            </div>
          </div>
    </div>
</header><?php /**PATH C:\evvnxx_blg\resources\views/blog/layout/slide.blade.php ENDPATH**/ ?>