<!-- Menghubungkan dengan view template master -->


<!-- isi bagian judul halaman -->
<?php $__env->startSection('judul_halaman', 'TAMBAH DATA BANTUAN
SEMBAKO'); ?>


<!-- isi bagian konten -->
<?php $__env->startSection('konten'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header bg-success">
                <h3 class="card-title"> </h3>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('sembako.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <label class="form-label col-sm-2">Penerima</label>
                        <div class="col-sm-4">
                            <select class="form-control" id="nik" name="nik">
                                <?php $__currentLoopData = $penduduks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penduduk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($penduduk->nik_kk); ?>"><?php echo e($penduduk->nik_kk); ?>|<?php echo e($penduduk->nama_kk); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <label class="form-label col-sm-2">Jenis
                            Bantuan</label>
                        <div class="col-sm-4">
                            <input type="text" name="jenis" placeholder="Jenis Bantuan" class="form-control" value="<?php echo e(old('jenis')); ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="form-label col-sm-2">Tanggal
                            Terima</label>
                        <div class="col-sm-4">
                            <input type="date" name="tanggal" placeholder="Tanggal Terima Bantuan" class="form-control" value="<?php echo e(old('tanggal')); ?>" required>
                        </div>
                        <label class="form-label col-sm 2">Keterangan</label>
                        <div class="col-sm-4">
                            <input type="text" name="keterangan" placeholder="Keterangan" class="form-control" value="<?php echo e(old('keterangan')); ?>" required>
                        </div>
                    </div>

                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-info" id="simpan">SIMPAN</button>
                        <a href="<?php echo e(route('sembako.index')); ?>" class="btn btn-danger">BATAL</a>
                    </div> </form>
            </div>

        </div><!-- akhir card -->
    </div> <!-- akhir col-12 -->
</div><!-- akhir row -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\appBantuan\resources\views/sembako/create.blade.php ENDPATH**/ ?>