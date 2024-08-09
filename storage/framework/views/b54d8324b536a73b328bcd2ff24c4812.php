<!-- Menghubungkan dengan view template master -->

<!-- isi bagian judul halaman -->
<?php $__env->startSection('judul_halaman', 'HALAMAN UTAMA BANTUAN DATA TUNAI/BLT'); ?>
<!-- isi bagian konten -->
<?php $__env->startSection('konten'); ?>
<a href="<?php echo e(route('tunai.create')); ?>" type="button" class="btn btn-success">
    Tambah Data
</a>
<hr>
<?php if(Session::has('pesan')): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(Session::get('pesan')); ?>

</div>
<?php endif; ?>
<div class="table-responsive margin">
    <table id="table-sembako" class="table table-bordered">
        <thead class="table-success">
            <tr>
                <th style="width: 10px">#</th>
                <th style="width: 100px">NIK</th>
                <th style="width: 100px">Nama Kepala Keluarga</th>
                <th style="width: 100px;">Jenis Kelamin</th>
                <th style="width: 100px;">Pekerjaan</th>
                <th style="width: 100px;">Tanggal Bantuan</th>
                <th style="width: 100px;">Jumlah Dana</th>
                <th style="width: 100px;">Keterangan</th>
                <th style="width: 50px;"></th>
            </tr>
        </thead>
        <tbody>
            <?php if($viewtunai->count()>0): ?>
            <?php $__currentLoopData = $viewtunai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($data->nik_kk); ?></td>
                <td><?php echo e($data->nama_kk); ?></td>
                <td><?php echo e($data->jeniskelamin_kk); ?></td>
                <td><?php echo e($data->pekerjaan_kk); ?></td>
                <td><?php echo e($data->tgl_bantuan); ?></td>
                <td><?php echo e($data->jumlah_dana); ?></td>
                <td><?php echo e($data->keterangan); ?></td>
                <td>
                    <div class="btn-group" role="group" aria label="basic example">
                        <a href="<?php echo e(route('tunai.show',$data->id)); ?>" class="btn btn-small btn-secondary">Detail</a>
                        <a href="<?php echo e(route('tunai.edit',$data->id)); ?>" class="btn btn-small btn-warning">Edit</a>
                        <form action="<?php echo e(route('tunai.destroy',$data->id)); ?>" method="POST" onsubmit="return confirm('Apakah yakin menghapus data ini?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-small btn-danger">
                                Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <tr>
                <td class="text-center" colspan="10">Data Masih Kosong</td>
            </tr>
            <?php endif; ?>
        </tbody>

    </table>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\appBantuan\resources\views/tunai/tunai.blade.php ENDPATH**/ ?>