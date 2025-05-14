{{-- resources/views/students/dashboard.blade.php --}}
@extends('layouts.studentside')

@section('content')
<style>
    .dashboard-container {
        max-width: 1000px;
        margin: 30px auto;
        padding: 20px;
        background-color: #fffaf3;
        border: 1px solid #d2b48c;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(139, 69, 19, 0.1);
        color: #5c4033;
        font-family: Arial, sans-serif;
    }

    .dashboard-container h2 {
        text-align: center;
        font-size: 32px;
        color: #8b4513;
        margin-bottom: 20px;
    }

    .dashboard-container h3 {
        margin-top: 30px;
        font-size: 24px;
        color: #a0522d;
        border-bottom: 2px solid #deb887;
        padding-bottom: 5px;
    }

    .success-message {
        color: green;
        font-weight: bold;
        margin-bottom: 15px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }

    th, td {
        border: 1px solid #d2b48c;
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #f5deb3;
        color: #5c4033;
    }

    tr:nth-child(even) {
        background-color: #fdf5e6;
    }

    button {
        background-color: #a0522d;
        color: white;
        border: none;
        padding: 8px 14px;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #8b4513;
    }

    .not-available {
        color: #a9a9a9;
        font-style: italic;
    }
</style>
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
<div class="dashboard-container">
@if(Auth::check())
    <h2>Welcome, {{ Auth::user()->name }}</h2>
@else
    <h2>Welcome, Guest</h2>
@endif


    @if(session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif
    
<!-- 
    <h3>Available Books</h3>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @forelse($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>
                    @if($book->borrowed_by)
                        Borrowed
                    @else
                        Available
                    @endif
                </td>
                <td>
                    @if(!$book->borrowed_by)
                        <form action="{{ route('students.borrow', $book->id) }}" method="POST">
                            @csrf
                            <button type="submit">Borrow</button>
                        </form>
                    @else
                        <span class="not-available">Not available</span>
                    @endif
                </td>
            </tr>
        @empty
            <tr><td colspan="4">No books found.</td></tr>
        @endforelse
        </tbody>
    </table> -->
    <div class="card shadow mb-4 p-4">
      
      

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
@endsection
