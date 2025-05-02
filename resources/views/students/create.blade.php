@extends('layouts.app')

@section('content')
<div class="container mt-5">
    
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

       

      
    </div>

    <div class="card shadow p-4">
        <h2 class="mb-4">Ajouter un étudiant</h2>

        <form action="{{ route('students.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nom :</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Email :</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">phone :</label>
                <input type="number" name="phone" id="phone" class="form-control" required>
            </div>

            <div class="d-flex gap-2 mt-4">
                <button type="submit" class="btn btn-primary">➕ Ajouter</button>
                <a href="{{ route('dashboard') }}" class="btn btn-secondary">⬅️ Retour</a>
            </div>
        </form>
    </div>
</div>
@endsection
