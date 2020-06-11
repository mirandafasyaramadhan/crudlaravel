<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Data Mahasiswa</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Mahasiswa
                </div>
                <div class="card-body">
                    <a href="/pegawai" class="btn btn-secondary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="POST" action="/mahasiswa/update/<?php echo e($mahasiswa->id); ?>">
 
                        <?php echo e(csrf_field()); ?>

 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="Nama" class="form-control" value=" <?php echo e($mahasiswa->Nama); ?>">
 
                            <?php if($errors->has('Nama')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('Nama')); ?>

                                </div>
                            <?php endif; ?>
 
                        </div>
 
                        <div class="form-group">
                            <label>NIM</label>
                            <input type="text" name="NIM" class="form-control" value=" <?php echo e($mahasiswa->NIM); ?>">
 
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
 
                             <?php if($errors->has('JenisKelamin')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('JenisKelamin')); ?>

                                </div>
                            <?php endif; ?>
 
                        </div>

                        <div class="form-group">
				       <label>DOSEN WALI</label>
                       <div class="col-md-6">
                       <select name="province" id="dosenwali" class="form-control" value=" <?php echo e($mahasiswa->id_doswal); ?>">
                       <option value="">Pilih Dosen Wali</option>
                        <?php $__currentLoopData = $dosenwali; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $NamaDosen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <option value="<?php echo e($id); ?>"><?php echo e($NamaDosen); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                         </div>
                        </div>

                         
                        <?php if($errors->has('province')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('province')); ?>

                                </div>
                            <?php endif; ?>
 
			     	</div>

                     <div class="form-group">
                            <button type="submit" class="btn btn-success" value="submit" name="submit">Simpan</button>
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html><?php /**PATH C:\xampp\htdocs\pbwfinal\resources\views/edit.blade.php ENDPATH**/ ?>