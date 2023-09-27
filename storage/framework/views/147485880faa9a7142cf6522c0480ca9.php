<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>nama</td>
            <td>nik</td>
            <td>email</td>
            <td>alamat</td>
            <td>photo</td>
        </tr>

        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($data->nama); ?></td>
            <td><?php echo e($data->nik); ?></td>
            <td><?php echo e($data->email); ?></td>
            <td><?php echo e($data->alamat); ?></td>
            <td>
                <img src="/upload/pasiens/<?php echo e($data->photo); ?>" height="auto" width="120">
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <!-- <h1>haii</h1> -->
</body>
</html><?php /**PATH C:\laragon\www\tugas3\resources\views/home.blade.php ENDPATH**/ ?>