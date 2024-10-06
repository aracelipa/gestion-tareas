<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestión de Tareas')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 20px;
        }
        .header {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>@yield('title', 'Gestión de Tareas')</h1>
            <nav>
                <a href="{{ route('tareas.index') }}" class="btn btn-outline-primary">Inicio</a>
                <a href="{{ route('tareas.create') }}" class="btn btn-outline-success">Crear Tarea</a>
            </nav>
        </header>
        <hr>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
