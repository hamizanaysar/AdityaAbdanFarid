<!-- Menghubungkan dengan view template master -->


<!-- isi bagian judul halaman -->
<?php $__env->startSection('judul_halaman', 'LIHAT DATA PENDUDUK'); ?>


<!-- isi bagian konten -->
<?php $__env->startSection('konten'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header bg-success">
                <h5 align="center" class="card-title"><strong>
                        <font color="white">Detail Data</font>
                    </strong></h5>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label class="form-label col-sm-2">NIK</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <input type="text" name="nik" class="form-control" value="<?php echo e($data->nik_kk); ?>" readonly>
                        </div>
                    </div>
                    <label class="form-label col-sm-2">Nama
                        Lengkap</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama" class="form-control" value="<?php echo e($data->nama_kk); ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="form-label col-sm-2">Jenis
                        Kelamin</label>
                    <div class="col-sm-4">
                        <input type="text" name="jeniskelamin" class="form-control" value="<?php echo e($data->jeniskelamin_kk); ?>" readonly>
                    </div>
                    <label class="form-label col-sm-2">Tanggal
                        Lahir</label>
                    <div class="col-sm-4">
                        <input type="date" name="tgllahir" placeholder="Tanggal Lahir" class="form-control" value="<?php echo e($data->tgllahir_kk); ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="form-label col-sm-2">Pendidikan</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <input type="text" name="pendidikan" class="form control" value="<?php echo e($data->pendidikan_kk); ?>" readonly>
                        </div>
                    </div>
                    <label class="form-label col-sm-2">Pekerjaan</label>
                    <div class="col-sm-4">
                        <input type="text" name="pekerjaan" class="form control" value="<?php echo e($data->pekerjaan_kk); ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="form-label col-sm-2">Penghasilan</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <input type="text" name="penghasilan" class="form-control" value="<?php echo e($data->penghasilan_kk); ?>" readonly>
                        </div>
                    </div>
                    <label class="form-label col-sm-2">Alamat</label>
                    <div class="col-sm-4">
                        <input type="text" name="alamat" class="form control" value="<?php echo e($data->alamat_kk); ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="form-label col-sm-2">Created at</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <input type="text" name="create" class="form control" value="<?php echo e($data->created_at); ?>" readonly>
                        </div>
                    </div>
                    <label class="form-label col-sm-2">Updated_at</label>
                    <div class="col-sm-4">
                        <input type="text" name="update" class="form control" value="<?php echo e($data->updated_at); ?>" readonly>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="<?php echo e(route('penduduk.index')); ?>" class="btn btn-warning">KEMBALI</a>
                </div>
            </div>
        </div><!-- akhir card -->
    </div> <!-- akhir col-12 -->
</div><!-- akhir row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\appBantuan\resources\views/penduduk/show.blade.php ENDPATH**/ ?>