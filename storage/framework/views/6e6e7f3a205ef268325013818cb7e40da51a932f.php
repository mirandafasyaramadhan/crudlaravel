<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Data mahasiswa</title>
    </head>
    <body style="background-image: url(../assets/img/BGF.jpg);">

        <div class="container">
            <div  class="card mt-5" style="border-radius:5%">
                
                <div class="card-body">
                <div style = "background-color: indianred ; border-radius:5px" class="card-header text-center">
                    Data Mahasiswa
                </div>
                    <a href="/mahasiswa/tambah" class="btn btn-success mt-3">Input mahasiswa Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Jenis Kelamin</th>
                                <th>Nama Dosen</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($p->Nama); ?></td>
                                <td><?php echo e($p->NIM); ?></td>
                                <td><?php echo e($p->JenisKelamin); ?></td>
                                <td><?php echo e($p->NamaDosen); ?></td>
                                <td>
                                    <a href="/mahasiswa/edit/<?php echo e($p->id); ?>" class="btn btn-info">Edit</a>
                                    <a href="/mahasiswa/hapus/<?php echo e($p->id); ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html><?php /**PATH C:\xampp\htdocs\pbwfinal\resources\views/mahasiswa.blade.php ENDPATH**/ ?>