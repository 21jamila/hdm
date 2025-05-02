@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Student</h2>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" value="{{ $student->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" value="{{ $student->email }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Phone:</label>
            <input type="text" name="phone" value="{{ $student->phone }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Update Student</button>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
