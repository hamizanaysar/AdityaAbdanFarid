<!DOCTYPE html>
<html>

<head>
    <title>Contoh Laporan</title>
    <link rel="stylesheet" href="<?php echo e(asset('/lib/css/bootstrap.min.css')); ?>">
</head>

<body>
    <h1 align="center"><?php echo e($judul); ?></h1>
    <p>Tanggal Cetak : <?php echo e($tanggal); ?></p>
    <p>
        <hr>
    </p>

    <table class="table table-bordered">
        <tr>
            <th style="width: 10px">No.</th>
            <th style="width: 100px">NIK</th>
            <th style="width: 100px">Nama Kepala Keluarga</th>
            <th style="width: 100px;">Jenis Kelamin</th>
            <th style="width: 100px;">Pekerjaan</th>
            <th style="width: 100px;">Tanggal Bantuan</th>
            <th style="width: 100px;">Total Renovasi</th>
            <th style="width: 100px;">Keterangan Bedah Rumah</th>
        </tr>
        <tbody>
            <?php if($viewrumah->count()>0): ?>
            <?php $__currentLoopData = $viewrumah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($data->nik_kk); ?></td>
                <td><?php echo e($data->nama_kk); ?></td>
                <td><?php echo e($data->jeniskelamin_kk); ?></td>
                <td><?php echo e($data->pekerjaan_kk); ?></td>
                <td><?php echo e($data->tgl_bantuan); ?></td>
                <td><?php echo e($data->jumlah_dana); ?></td>
                <td><?php echo e($data->keterangan); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <tr>
                <td class="text-center" colspan="10">Data Masih Kosong</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>

</html><?php /**PATH C:\laragon\www\appBantuan\resources\views/rumah/laporan.blade.php ENDPATH**/ ?>