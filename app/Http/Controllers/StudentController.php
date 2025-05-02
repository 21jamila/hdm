<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Book;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show student dashboard with all books
    public function dashboard()
    {
        $books = Book::all();
        return view('students.dashboard', compact('books'));
    }

    // Borrow a book
    public function borrow(Request $request, Book $book)
    {
        $user = auth();

        if (!$user) {
            return redirect()->route('login')->with('error', 'You must be logged in to borrow a book.');
        }

        // Update the book with student info
        $book->borrowed_by = $user->id;
        $book->due_date = now()->addDays(14); // 2-week limit
        $book->save();

        return back()->with('success', 'Book borrowed successfully!');
    }

    // Show list of students (admin)
    public function index()
    {
        $students = Student::all();
        return view('admin.dashboard', compact('students'));
    }

    // Show form to create a new student
    public function create()
    {
        return view('students.create');
    }

    // Store new student
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone' => 'nullable|string|max:20',
        ]);

        Student::create($validated);

        return redirect()->route('dashboard')->with('success', 'Student added successfully!');
    }

    // Show form to edit a student
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.edit', compact('student'));
    }

    // Update a student
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone' => 'nullable|string|max:20',
        ]);

        $student->update($validated);

        return redirect()->route('dashboard')->with('success', 'Student updated successfully!');
    }

    // Delete a student
    public function destroy($id)
    {
        Student::findOrFail($id)->delete();
        return redirect()->route('dashboard')->with('success', 'Student deleted successfully!');
    }
}
