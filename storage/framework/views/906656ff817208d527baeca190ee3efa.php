

<?php $__env->startSection('content'); ?>
    <h1>All Tasks</h1>

    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
            <h2><?php echo e($task->title); ?></h2>

            <p>
                Status:
                <span class="<?php echo e($task->status); ?>">
                    <?php echo e(ucfirst($task->status)); ?>

                </span>
            </p>

            <p>Date: <?php echo e($task->task_date->format('F d, Y')); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\MARK JOHN\example-app\resources\views/tasks.blade.php ENDPATH**/ ?>