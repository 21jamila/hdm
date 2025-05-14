{{-- layouts/studentside.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            min-height: 100vh;
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

        .main-content {
            flex-grow: 1;
            padding: 30px;
        }
    </style>
</head>
<body>

    {{-- Sidebar --}}
    <div class="sidebar">
        <h4>📚 Jamila</h4>
<br><br><br>
        <a href="{{ route('students.dashboard') }}">📄 Documents</a>
        <a href="{{ route('students.history') }}">🕘 Historique</a>
        <br><br><br><br><br>
        <a href="{{ route('students.profile') }}">👤 Mon Profil</a>

        <form action="{{ route('logout') }}" method="POST" class="mt-4">
            @csrf
            <button type="submit" class="btn btn-danger w-100">🚪 Déconnecter</button>
        </form>
    </div>

    {{-- Main Content --}}
    <div class="main-content">
        @yield('content')
    </div>

</body>
</html>
