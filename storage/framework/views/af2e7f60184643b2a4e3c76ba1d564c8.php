

<?php $__env->startSection('content'); ?>
<div class="container">
    
    <hr>
    <h3>Liste des étudiants</h3>
    <table class="table table-striped bg-white">
        <thead>
            <tr><th>ID</th><th>Nom</th><th>Email</th><th>Téléphone</th><th>Actions</th></tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($student->id); ?></td>
                <td><?php echo e($student->name); ?></td>
                <td><?php echo e($student->email); ?></td>
                <td><?php echo e($student->phone); ?></td>
                <td>
                    <a href="<?php echo e(route('students.edit', $student->id)); ?>" class="btn btn-sm btn-warning">Modifier</a>
                    <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Confirmer la suppression?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if($students->isEmpty()): ?>
            <tr><td colspan="5" class="text-center">Aucun étudiant trouvé.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\DELL\qrmaroc\resources\views/admin/index.blade.php ENDPATH**/ ?>