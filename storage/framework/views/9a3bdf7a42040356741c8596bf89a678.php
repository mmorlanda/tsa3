

<?php $__env->startSection('content'); ?>
    <h1>Profile</h1>

    <div class="card">
        <p><strong>Username:</strong> <?php echo e($user->username); ?></p>
        <p><strong>Full Name:</strong> <?php echo e($user->full_name); ?></p>
        <p><strong>Email:</strong> <?php echo e($user->email); ?></p>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\MARK JOHN\example-app\resources\views/profile.blade.php ENDPATH**/ ?>