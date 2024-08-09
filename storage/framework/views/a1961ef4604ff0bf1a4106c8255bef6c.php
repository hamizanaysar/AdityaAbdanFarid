<!-- Menghubungkan dengan view template master -->


<!-- isi bagian judul halaman -->
<?php $__env->startSection('judul_halaman', 'HALAMAN UTAMA DATA PENDUDUK'); ?>

<!-- isi bagian konten -->
<?php $__env->startSection('konten'); ?>
<a href="<?php echo e(route('penduduk.create')); ?>" type="button" class="btn btn-success" id="btnModal">
    Tambah Data
</a>
<hr>
<?php if(Session::has('pesan')): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(Session::get('pesan')); ?>

</div>
<?php endif; ?>

<div class="table-responsive margin">
    <table id="table-penduduk" class="table table-bordered">
        <thead class="table-success">
            <tr>
                <th style="width: 10px">#</th>
                <th style="width: 100px">NIK</th>
                <th style="width: 100px">Nama Kepala Keluarga</th>
                <th style="width: 100px;">Jenis Kelamin</th>
                <th style="width: 100px;">Tanggal Lahir</th>
                <th style="width: 100px;">Pendidikan</th>
                <th style="width: 100px;">Pekerjaan</th>
                <th style="width: 100px;">Penghasilan per Bulan</th>
                <th style="width: 100px;">Alamat</th>
                <th style="width: 50px;"></th>
            </tr>
        </thead>
        <tbody>
            <?php if($penduduks->count()>0): ?>
            <?php $__currentLoopData = $penduduks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($data->nik_kk); ?></td>
                <td><?php echo e($data->nama_kk); ?></td>
                <td><?php echo e($data->jeniskelamin_kk); ?></td>
                <td><?php echo e($data->tgllahir_kk); ?></td>
                <td><?php echo e($data->pendidikan_kk); ?></td>
                <td><?php echo e($data->pekerjaan_kk); ?></td>
                <td><?php echo e($data->penghasilan_kk); ?></td>
                <td><?php echo e($data->alamat_kk); ?></td>
                <td>
                    <div class="btn-group" role="group" aria label="basic example">
                        <a href="<?php echo e(route('penduduk.show',$data->nik_kk)); ?>" class="btn btn-small btn-secondary">Detail</a>
                        <a href="<?php echo e(route('penduduk.edit',$data->nik_kk)); ?>" class="btn btn-small btn-warning">Edit</a>
                        <form action="<?php echo e(route('penduduk.destroy',$data->nik_kk)); ?>" method="POST" onsubmit="return confirm('Apakah yakin menghapus data ini?')">
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
                <td class="text-center" colspan="10">Data Masih
                    Kosong</td>
            </tr>
            <?php endif; ?>
        </tbody>

    </table>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\appBantuan\resources\views/penduduk/penduduk.blade.php ENDPATH**/ ?>