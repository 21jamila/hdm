

<?php $__env->startSection('content'); ?>
<div class="container">

    
    <div class="card shadow mb-4 p-4">
        <h2 class="mb-4">Modifie et supprimer un adhérent</h2>

        <!-- Tabs for Document Types -->
        <ul class="nav nav-tabs mb-3" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#professeur">Professeur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#etudiant">Étudiant</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#externes">Externes</a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="professeur">
                <p>Formulaire pour modifier un professeur</p>
                <!-- Form content for professeur here -->
            </div>
            <div class="tab-pane fade" id="etudiant">
                <p>Formulaire pour modifier un étudiant</p>
                <!-- Form content for étudiant here -->
            </div>
            <div class="tab-pane fade" id="externes">
                <p>Formulaire pour modifier un externe</p>
                <!-- Form content for externe here -->
            </div>
        </div>

        <!-- Search and Button -->
        <div class="mb-3 d-flex gap-2">
            <input type="text" class="form-control w-25" placeholder="Chercher par...">
            <button class="btn btn-secondary">Chercher un NOM</button>
        </div>
    </div>

    
    <hr>
    <h3>Liste des étudiants</h3>
    <table class="table table-striped bg-white">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Actions</th>
            </tr>
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
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Confirmer la suppression?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if($students->isEmpty()): ?>
            <tr>
                <td colspan="5" class="text-center">Aucun étudiant trouvé.</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\DELL\qrmaroc\resources\views/admin/students-list.blade.php ENDPATH**/ ?>