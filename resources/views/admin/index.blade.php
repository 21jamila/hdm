@extends('layouts.app')

@section('content')
<div class="container">
    {{-- Manage Students --}}
    <hr>
    <h3>Liste des étudiants</h3>
    <table class="table table-striped bg-white">
        <thead>
            <tr><th>ID</th><th>Nom</th><th>Email</th><th>Téléphone</th><th>Actions</th></tr>
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
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Confirmer la suppression?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @if($students->isEmpty())
            <tr><td colspan="5" class="text-center">Aucun étudiant trouvé.</td></tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
