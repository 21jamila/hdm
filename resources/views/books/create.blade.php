@extends('layouts.app')

@section('content')
<div class="container mt-5">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-gradient-primary py-4 rounded-top-4">
                    <h3 class="text-center text-white mb-0">Ajouter un nouveau livre</h3>
                </div>

                <div class="card-body p-5">
                    <form action="{{ route('books.store') }}" method="POST">
                        @csrf

                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label class="form-label text-secondary">ISBN</label>
                                    <input type="text" name="isbn" 
                                           class="form-control rounded-3" 
                                           required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label class="form-label text-secondary">Titre</label>
                                    <input type="text" name="title" 
                                           class="form-control rounded-3" 
                                           required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label class="form-label text-secondary">Éditeur</label>
                                    <input type="text" name="editor" 
                                           class="form-control rounded-3" 
                                           required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label class="form-label text-secondary">Année</label>
                                    <input type="number" name="year" 
                                           class="form-control rounded-3" 
                                           required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label class="form-label text-secondary">Nombre d'exemplaires</label>
                                    <input type="number" name="quantity" 
                                           class="form-control rounded-3" 
                                           required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label class="form-label text-secondary">Type</label>
                                    <input type="text" name="type" 
                                           class="form-control rounded-3" 
                                           required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label class="form-label text-secondary">Tome</label>
                                    <input type="text" name="tome" 
                                           class="form-control rounded-3">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label class="form-label text-secondary">Disponible</label>
                                    <select name="available" 
                                            class="form-select rounded-3" 
                                            required>
                                        <option value="1">Oui</option>
                                        <option value="0">Non</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-3 mt-4">
                            <a href="{{ route('student.dashboard') }}" 
                               class="btn btn-lg btn-secondary rounded-3 px-5">
                                Annuler
                            </a>
                            <button type="submit" 
                                    class="btn btn-lg btn-primary rounded-3 px-5">
                                Ajouter Livre
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-gradient-primary {
        background: linear-gradient(135deg,rgb(0, 0, 0) 0%, #ff6f61 100%);
    }
    
    .form-control, .form-select {
        padding: 12px 20px;
        transition: all 0.3s ease;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: #ff6f61;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }
    
    .btn-primary {
        background-color: #ff6f61;
        border: none;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        background-color: #ff6f61;
        transform: translateY(-1px);
    }
    
    .btn-secondary {
        background-color: #6c757d;
        border: none;
        transition: all 0.3s ease;
    }
    
    .btn-secondary:hover {
        background-color: #ff6f61;
        transform: translateY(-1px);
    }
    
    .rounded-4 {
        border-radius: 1rem !important;
    }
    
    .rounded-top-4 {
        border-top-left-radius: 1rem !important;
        border-top-right-radius: 1rem !important;
    }
</style>
@endsection