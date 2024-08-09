<!-- Menghubungkan dengan view template master -->

<!-- isi bagian judul halaman -->
<?php $__env->startSection('judul_halaman', 'HALAMAN UTAMA | PRAKTIKUM WEB II'); ?>
<!-- isi bagian konten -->
<?php $__env->startSection('konten'); ?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bsride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo e(asset('/lib/img/rumah.jpg')); ?>" class="d-block w-100" width="200" height="400px">
        </div>
        <div class="carousel-item">
            <img src="<?php echo e(asset('/lib/img/blt.jpeg')); ?>"" class=" d-block w-100" width="200" height="400px">
        </div>
        <div class="carousel-item">
            <img src="<?php echo e(asset('/lib/img/barito.jpg')); ?>" class="d-block w-100" width="200" height="400px">
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\appBantuan\resources\views/home.blade.php ENDPATH**/ ?>