@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">📘 Mes Livres Disponibles</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered bg-white">
        <thead class="table-light">
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Emprunter</th>
                <th>Date limite</th>
            </tr>
        </thead>
        <tbody>
            @forelse($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>
                    @if(!$book->borrowed_by)
                    <form action="{{ route('student.borrow', $book->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-primary">📚 Emprunter</button>
                    </form>
                    @else
                        Emprunté
                    @endif
                </td>
                <td>
                    {{ $book->due_date ? $book->due_date->format('d/m/Y') : '-' }}
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Aucun livre trouvé.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
