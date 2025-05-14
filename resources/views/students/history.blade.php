@extends('layouts.studentside')

@section('content')
<style>
    .history-container {
        padding: 30px;
        max-width: 900px;
        margin: auto;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .history-container h1 {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #333;
        text-align: center;
    }

    .history-container h2 {
        font-size: 20px;
        margin-bottom: 20px;
        color: #666;
        text-align: center;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        background-color: white;
    }

    .table th, .table td {
        padding: 12px 15px;
        text-align: left;
        border: 1px solid #ddd;
    }

    .table th {
        background-color:rgb(195, 135, 60);
        color: white;
    }

    .table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .no-data {
        text-align: center;
        font-style: italic;
        color: #999;
    }
</style>

<div class="history-container">
    <h1>Historique</h1>
    <h2>Gestion des retours</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Livre</th>
                <th>Date d'emprunt</th>
            </tr>
        </thead>
        <tbody>
            @forelse($borrowedBooks as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->pivot->created_at }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="2" class="no-data">Aucun livre emprunté pour le moment.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
