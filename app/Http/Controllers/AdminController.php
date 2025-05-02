<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Book;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showStudents()
{
    $students = Student::all();
    return view('admin.students-list', compact('students'));
}
public function create()
{
    return view('books.create');
}

public function store(Request $request)
{
    $request->validate([
        'isbn' => 'required|string|unique:books,isbn',
        'title' => 'required|string',
        'editor' => 'required|string',
        'year' => 'required|integer',
        'quantity' => 'required|integer',
        'type' => 'required|string',
        'tome' => 'nullable|string',
        'available' => 'required|boolean',
    ]);

    Book::create([
        'isbn' => $request->isbn,
        'title' => $request->title,
        'editor' => $request->editor,
        'year' => $request->year,
        'quantity' => $request->quantity,
        'type' => $request->type,
        'tome' => $request->tome,
        'available' => $request->available,
    ]);

    return redirect()->route('student.dashboard')->with('success', 'Livre ajouté avec succès !');
}

}
