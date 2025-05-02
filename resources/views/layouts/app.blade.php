<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f1f3f5;
        }

        .sidebar {
            width: 250px;
            background: #2f2f2f;
            color: white;
            padding: 20px;
            box-shadow: 2px 0 8px rgba(0, 0, 0, 0.1);
        }

        .sidebar h4 {
            color: #ff6f61;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 12px 15px;
            text-decoration: none;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: 0.3s;
            font-size: 15px;
        }

        .sidebar a:hover {
            background: #ff6f61;
            color: white;
        }

        .sidebar .btn {
            border-radius: 8px;
        }

        .main-content {
            flex-grow: 1;
            padding: 30px;
            background: #f8f9fa;
        }

        .nav-tabs .nav-link.active {
            background-color: #ff6f61;
            color: white;
            font-weight: bold;
        }

        .nav-tabs .nav-link {
            color: #333;
        }

        table {
            border-radius: 8px;
            overflow: hidden;
        }

        .table th {
            background-color: #343a40;
            color: white;
        }
    </style>
</head>
<body>

    {{-- Sidebar --}}
    <div class="sidebar">
        <h4>📚 Admin1</h4>
        <a href="{{ route('dashboard') }}">📄 Documents</a>
        <a href="{{ route('books.create') }}" class="btn  mb-3">➕ Ajouter Livre</a>
        <a href="{{ route('dashboard') }}">✏️ Modifier Document</a>
        <br><br><br><br>
        <a href="{{ route('admin.students.list') }}">👥 Adhérents</a>
        <a href="{{ route('students.create') }}">➕ Ajouter adhérent</a>
        <a href="{{ route('admin.students.list') }}">✏️ Modifier adhérent</a>
        <br><br>
        <form action="{{ route('logout') }}" method="POST" class="mt-4">
            @csrf
            <button type="submit" class="btn btn-danger w-100">Déconnecter</button>
            
        </form>
    </div>

    {{-- Main Content --}}
    <div class="main-content">
        @yield('content')
    </div>

</body>
</html>
