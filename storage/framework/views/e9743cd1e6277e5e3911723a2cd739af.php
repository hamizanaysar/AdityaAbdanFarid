<!-- Menghubungkan dengan view template master -->

<!-- isi bagian judul halaman -->
<?php $__env->startSection('judul_halaman', 'PROFIL DATA BANTUAN TUNAI LANGSUNG'); ?>
<!-- isi bagian konten -->
<?php $__env->startSection('konten'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header bg-success">
                <h3 class="card-title"> </h3>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('tunai.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <label class="form-label col-sm-2">Penerima</label>
                        <div class="col-sm-4">
                            <input type="text" name="nama" placeholder="nama Penerima" class="form-control" value="<?php echo e($data->nama_kk); ?>" readonly>


                        </div>
                        <label class="form-label col-sm-2">Jumlah
                            Dana</label>
                        <div class="col-sm-4">
                            <input type="text" name="dana" placeholder="Jumlah Dana" class="form-control" value="<?php echo e($data->jumlah_dana); ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="form-label col-sm-2">Tanggal
                            Terima</label>
                        <div class="col-sm-4">
                            <input type="date" name="tanggal" placeholder="Tanggal Terima Bantuan" class="form-control" value="<?php echo e($data->tgl_bantuan); ?>" readonly>
                        </div>
                        <label class="form-label col-sm-2">Keterangan</label>
                        <div class="col-sm-4">
                            <input type="text" name="keterangan" placeholder="Keterangan" class="form-control" value="<?php echo e($data->keterangan); ?>" readonly>
                        </div>
                    </div>
                    <br>
                    <div class="card-footer text-center">
                        <a href="<?php echo e(route('tunai.index')); ?>" class="btn btn-danger">BATAL</a>
                    </div> </form>
            </div>

        </div><!-- akhir card -->
    </div> <!-- akhir col-12 -->
</div><!-- akhir row -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\appBantuan\resources\views/tunai/show.blade.php ENDPATH**/ ?>