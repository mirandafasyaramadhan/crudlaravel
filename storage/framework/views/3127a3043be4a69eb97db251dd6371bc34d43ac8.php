<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Data mahasiswa</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Mahasiswa
                </div>
                <div class="card-body">
                    <a href="/mahasiswa" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/mahasiswa/store">
 
                        <?php echo e(csrf_field()); ?>

 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="Nama" class="form-control" placeholder="Nama mahasiswa ..">
 
                            <?php if($errors->has('Nama')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('Nama')); ?>

                                </div>
                            <?php endif; ?>
 
                        </div>
 
                        <div class="form-group">
                            <label>NIM</label>
                            <input name="NIM" class="form-control" placeholder="NIM mahasiswa ..">
 
                             <?php if($errors->has('NIM')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('NIM')); ?>

                                </div>
                            <?php endif; ?>
 
                        </div>
                        
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div class="col-sm-10">
				  	    <div class="form-check">
						<input type="radio" class="form-check-input" name="JenisKelamin" value="L" required>
						<label class="form-check-label">LAKI-LAKI</label>
					    </div>
				  	    <div class="form-check">
						<input type="radio" class="form-check-input" name="JenisKelamin" value="P" required>
						<label class="form-check-label">PEREMPUAN</label>
 
                             <?php if($errors->has('Jenis Kelamin')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('Jenis kelamin')); ?>

                                </div>
                            <?php endif; ?>
 
                        </div>
                         
                        <div class="form-group">
				       <label>DOSEN WALI</label>
                       <div class="col-md-6">
                       <select name="province" id="dosenwali" class="form-control">
                       <option value="">Pilih Dosen Wali</option>
                        <?php $__currentLoopData = $dosenwali; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $nama_dosen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <option value="<?php echo e($id); ?>"><?php echo e($nama_dosen); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                         </div>
                        </div>

                         
                        <?php if($errors->has('Nama Dosen')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('Nama Dosen')); ?>

                                </div>
                            <?php endif; ?>
 
			     	</div>
                     
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>


<form method="post" action="/mahasiswa/store">
<?php /**PATH C:\xampp\htdocs\pbwfinal\resources\views/mahasiswa_tambah.blade.php ENDPATH**/ ?>