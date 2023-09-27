<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php if(session('status')): ?>
                    <h6 class="alert alert-success"> <?php echo e(session('status')); ?></h6>
                <?php endif; ?>

                <div class="card">
                    <h4>Add Pasien with Image
                            <a href="<?php echo e(url('pasiens')); ?>"class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(url('add-pasiens')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="form-group mb-3">
                            <label for="">Nama pasien</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">NIK pasien</label>
                            <input type="text" name="nik" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email pasien</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Alamat pasien</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Photo pasien</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="col-sm-4 text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Add Pasien</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php /**PATH C:\laragon\www\tugas3\resources\views/pasien/create.blade.php ENDPATH**/ ?>