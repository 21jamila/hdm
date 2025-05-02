

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Edit Student</h2>

    <form action="<?php echo e(route('students.update', $student->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo e($student->name); ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo e($student->email); ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Phone:</label>
            <input type="text" name="phone" value="<?php echo e($student->phone); ?>" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Update Student</button>
        <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-secondary">Back</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\DELL\qrmaroc\resources\views/admin/edit.blade.php ENDPATH**/ ?>