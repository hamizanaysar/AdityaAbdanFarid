<!-- Menghubungkan dengan view template master -->

<!-- isi bagian judul halaman -->
<?php $__env->startSection('judul_halaman', 'UBAH DATA BANTUAN SEMBAKO'); ?>
<!-- isi bagian konten -->
<?php $__env->startSection('konten'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-success">
                <h3 class="card-title"> </h3>
            </div>
            <div class="card-body">
                <?php $__currentLoopData = $viewsembakos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viewsembako): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="<?php echo e(route('sembako.update',$viewsembako->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group row">
                        <label class="form-label col-sm-2">Penerima</label>
                        <input type="hidden" name="id" value="<?php echo e($viewsembako->id); ?>">
                        <div class="col-sm-4">
                            <select class="form-control" id="nik" name="nik">
                                <option value="<?php echo e($viewsembako->nik_kk); ?>"><?php echo e($viewsembako->nik_kk); ?>|<?php echo e($viewsembako->nama_kk); ?></option>
                                <?php $__currentLoopData = $penduduks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penduduk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($penduduk->nik_kk); ?>"><?php echo e($penduduk->nik_kk); ?>|<?php echo e($penduduk->nama_kk); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <label class="form-label col-sm-2">Jenis
                            Bantuan</label>
                        <div class="col-sm-4">
                            <input type="text" name="jenis" placeholder="Jenis Bantuan" class="form-control" value="<?php echo e($viewsembako->jenis_bantuan); ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="form-label col-sm-2">Tanggal
                            Terima</label>
                        <div class="col-sm-4">
                            <input type="date" name="tanggal" placeholder="Tanggal Terima Bantuan" class="form-control" value="<?php echo e($viewsembako->tgl_bantuan); ?>" required>
                        </div>
                        <label class="form-label col-sm 2">Keterangan</label>
                        <div class="col-sm-4">
                            <input type="text" name="keterangan" placeholder="Keterangan" class="form-control" value="<?php echo e($viewsembako->keterangan); ?>" required>
                        </div>
                    </div>

                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-info" id="simpan">SIMPAN</button>
                        <a href="<?php echo e(route('sembako.index')); ?>" class="btn btn-danger">BATAL</a>
                    </div> </form>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!-- Akhir viewsembako -->
            </div>
        </div><!-- akhir card -->
    </div> <!-- akhir col-12 -->
</div><!-- akhir row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\appBantuan\resources\views/sembako/edit.blade.php ENDPATH**/ ?>