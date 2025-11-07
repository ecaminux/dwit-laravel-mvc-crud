<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi blog</title>
    <!-- Agregamos esta linea para importar el css, verificar en dicha ruta -->
    <!-- @ vite(['resources/js/app.js']) -->
    <!-- Para evitar la necesidad de correr vite, se puede agregar directamente en public -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
    <div class="container mt-3">
        <h1>Lista de artículos</h1>
        <div class="d-flex flex-row-reverse">
            <a class="btn btn-primary" href="{{ route('articles.create') }}">Crear nuevo artículo</a>
        </div>
        <div>
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Author</th>
                        <th scope="col">Date created</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->description }}</td>
                            <td>{{ $article->author }}</td>
                            <td>{{ $article->date_created }}</td>
                            <td>
                                <a class="btn btn-info" href="">Ver</a>
                                <a class="btn btn-danger" href="">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>