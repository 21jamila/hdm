<a href="{{ route('modifier.adherent', ['id' => $adherent->id]) }}">✏️ Modifier adhérent</a>

<div class="card shadow mb-4 p-4">
    <h2 class="mb-4">Modifie et supprimer un adherent</h2>

    <!-- Tabs for Document Types -->
    <ul class="nav nav-tabs mb-3" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#professeur">professeur</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#etudiant">étudiant</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#externes">externes</a>
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
            <!-- Form content for etudiant here -->
        </div>
        <div class="tab-pane fade" id="externes">
            <p>Formulaire pour modifier un externe</p>
            <!-- Form content for externe here -->
        </div>
    </div>

    <!-- Search and Button -->
    <div class="mb-3 d-flex gap-2">
        <input type="text" class="form-control w-25" placeholder="Chercher par...">
        <button class="btn btn-secondary">Chercher un cin</button>
    </div>
</div>
