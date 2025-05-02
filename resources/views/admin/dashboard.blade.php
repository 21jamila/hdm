@extends('layouts.app')

@section('content')
<div class="container">

    {{-- Tabs for Document Types --}}
    <div class="card shadow mb-4 p-4">
        <h2 class="mb-4">Documents</h2>

        <ul class="nav nav-tabs mb-3" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#livres">Livres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#magazines">Magazines</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#dictionnaires">Dictionnaires</a>
            </li>
        </ul>

        <div class="mb-3 d-flex gap-2">
            <input type="text" class="form-control w-25" placeholder="Chercher par...">
            <button class="btn btn-secondary">Chercher</button>
            <button class="btn btn-warning">Détaille</button>
        </div>

        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="livres">
                <table class="table table-bordered bg-white">
                    <thead class="table-dark">
                        <tr>
                            <th>ISBN</th><th>Titre</th><th>Éditeur</th><th>Année</th>
                            <th>Nombre</th><th>Type</th><th>Tome</th><th>Disponible</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>A</td><td>La colère</td><td>Ouma</td><td>2009</td><td>223</td><td>Police</td><td>Tome 1</td><td>26</td></tr>
                        <tr><td>ISFC3</td><td>Gonzano</td><td>Simba</td><td>2015</td><td>200</td><td>Drama</td><td>Tome 3</td><td>14</td></tr>
                        <tr><td>KSH4D</td><td>Lumière</td><td>SAHA</td><td>2011</td><td>133</td><td>Science</td><td>Tome 3</td><td>22</td></tr>
                    </tbody>
                </table>
            </div>

            {{-- Add empty tab placeholders if needed --}}
            <div class="tab-pane fade" id="magazines">
                <p>Pas encore de magazines ajoutés.</p>
            </div>
            <div class="tab-pane fade" id="dictionnaires">
                <p>Pas encore de dictionnaires ajoutés.</p>
            </div>
        </div>
    </div>
</div>
<style>
    .card {
        border-radius: 1rem;
    }
    .btn {
        border-radius: 0.5rem;
    }
    .table th, .table td {
        vertical-align: middle;
    }
</style>

@endsection
