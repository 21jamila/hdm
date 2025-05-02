@extends('layouts.app')

@section('content')
<div class="container">

    {{-- Adhérent Navigation Section --}}
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

    {{-- Manage Students --}}
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
            @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Confirmer la suppression?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @if($students->isEmpty())
            <tr>
                <td colspan="5" class="text-center">Aucun étudiant trouvé.</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
