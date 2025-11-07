<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi blog</title>
</head>
<body>
    <h1>Lista de artículos</h1>
    <a href="{{ routes('') }}"></a>
    <?php $articles = []; ?>
    @foreach ($articles as $article)
        <h3>{{ $article->description }}</h3>
    @endforeach

</body>
</html>