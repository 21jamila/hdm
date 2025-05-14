<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [AuthController::class, 'register']);
});

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    // Dashboard Route (StudentController will pass $students)
    Route::get('/dashboard', [StudentController::class, 'index'])->name('dashboard');
    
    // Resource Routes for Students (Create, Store, Edit, Update, Delete)
    Route::resource('students', StudentController::class);

    // Logout Route
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
Route::resource('students', StudentController::class);
Route::get('/admin/students-list', [App\Http\Controllers\AdminController::class, 'showStudents'])->name('admin.students.list');
Route::get('/modifier-adherent/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('modifier.adherent');

Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
Route::middleware(['auth'])->group(function () {
    Route::post('/borrow/{book}', [StudentController::class, 'borrow'])->name('students.borrow');
});
// Show the book creation form
Route::get('/books/create', [App\Http\Controllers\AdminController::class, 'create'])->name('books.create');

// Store the book
Route::post('/books', [App\Http\Controllers\AdminController::class, 'store'])->name('books.store');
<?php



// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    // Dashboard Route (StudentController will pass $students)
    Route::get('/dashboard', [StudentController::class, 'index'])->name('dashboard');
    
    // Resource Routes for Students (Create, Store, Edit, Update, Delete)
    Route::resource('students', StudentController::class);

    // Logout Route
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
Route::resource('students', StudentController::class);
Route::get('/admin/students-list', [App\Http\Controllers\AdminController::class, 'showStudents'])->name('admin.students.list');
Route::get('/modifier-adherent/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('modifier.adherent');

Route::middleware(['auth'])->group(function () {
    Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
});
Route::middleware(['auth'])->group(function () {
    Route::post('/borrow/{book}', [StudentController::class, 'borrow'])->name('students.borrow');
});
// Show the book creation form
Route::get('/books/create', [App\Http\Controllers\AdminController::class, 'create'])->name('books.create');

// Store the book
Route::post('/books', [App\Http\Controllers\AdminController::class, 'store'])->name('books.store');



// Student dashboard (available books)
Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('students.dashboard');

// Borrow history
Route::get('/student/history', [StudentController::class, 'history'])->name('students.history');

// Profile view/edit
Route::get('/student/profile', [StudentController::class, 'profile'])->name('students.profile');

// Borrow action
Route::post('/student/borrow/{book}', [StudentController::class, 'borrow'])->name('students.borrow');
Route::get('/student/books', [StudentController::class, 'books'])->name('students.books');
Route::middleware(['auth'])->group(function () {
    Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('students.dashboard');
});

