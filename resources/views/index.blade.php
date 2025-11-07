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
        <h1>Bienvenidos al Blog</h1>
        <div class="d-flex flex-row-reverse">
            <a class="btn btn-primary" href="{{ route('articles.index') }}">Administrar artículos</a>
        </div>
        <div class="row mt-5">
            @foreach ($articles as $article)
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="card border-secondary">
                        <div class="card-body">
                            <h4 class="card-title">{{ $article->title }}</h4>
                            <p class="card-text">{{ $article->description }}</p>
                            <hr>
                            <span>{{ $article->author }}</span> at 
                            <small>{{ $article->date_created }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>