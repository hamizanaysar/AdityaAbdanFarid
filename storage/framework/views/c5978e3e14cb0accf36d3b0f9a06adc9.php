

<!-- isi bagian judul halaman -->
<?php $__env->startSection('judul_halaman', 'UBAH DATA BANTUAN BEDAH
RUMAH'); ?>


<!-- isi bagian konten -->
<?php $__env->startSection('konten'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header bg-success">
                <h3 class="card-title"> </h3>
            </div>
            <div class="card-body">
                <?php $__currentLoopData = $viewrumah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rumah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="<?php echo e(route('rumah.update',$rumah->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group row">
                        <label class="form-label col-sm-2">Penerima</label>
                        <div class="col-sm-4">
                            <select class="form-control" id="nik" name="nik">
                                <option value="<?php echo e($rumah->nik_kk); ?>"><?php echo e($rumah->nik_kk); ?>|<?php echo e($rumah->nama_kk); ?></option <?php $__currentLoopData = $penduduks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penduduk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <option value="<?php echo e($penduduk->nik_kk); ?>"><?php echo e($penduduk->nik_kk); ?>|<?php echo e($penduduk->nama_kk); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <label class="form-label col-sm-2">Jumlah
                            Dana</label>
                        <div class="col-sm-4">
                            <input type="text" name="dana" placeholder="Jumlah Dana" class="form-control" value="<?php echo e($rumah->jumlah_dana); ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="form-label col-sm-2">Tanggal
                            Terima</label>
                        <div class="col-sm-4">
                            <input type="date" name="tanggal" placeholder="Tanggal Terima Bantuan" class="form-control" value="<?php echo e($rumah->tgl_bantuan); ?>" required>
                        </div>
                        <label class="form-label col-sm-2">Keterangan</label>
                        <div class="col-sm-4">
                            <input type="text" name="keterangan" placeholder="Keterangan" class="form-control" value="<?php echo e($rumah->keterangan); ?>" required>
                        </div>
                    </div>

                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-info" id="simpan">SIMPAN</button>
                        <a href="<?php echo e(route('rumah.index')); ?>" class="btn btn-danger">BATAL</a>
                    </div> </form>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div><!-- akhir card -->
    </div> <!-- akhir col-12 -->
</div><!-- akhir row -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\appBantuan\resources\views/rumah/edit.blade.php ENDPATH**/ ?>