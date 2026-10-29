<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks for Today</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 900px;
            margin: 0 auto;
            padding: 30px;
            background: #f4f6f8;
            color: #222;
        }

        nav {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        nav a {
            color: #2563eb;
            text-decoration: none;
            font-weight: bold;
        }

        .card {
            background: white;
            padding: 20px;
            margin-bottom: 12px;
            border-radius: 8px;
            box-shadow: 0 2px 5px #00000015;
        }

        .completed {
            color: green;
        }

        .pending {
            color: darkorange;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('welcome') }}">Welcome</a>
        <a href="{{ route('tasks') }}">All Tasks</a>
        <a href="{{ route('profile') }}">Profile</a>
        <a href="{{ route('about') }}">About</a>
    </nav>

    @yield('content')
</body>
</html>