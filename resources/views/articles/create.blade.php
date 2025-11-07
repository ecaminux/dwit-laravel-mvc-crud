<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('articles.store') }}" method="post">
        <!-- Es importante agregar esta linea para asegurar el intercambio de datos en Laravel -->
        @csrf
        <!-- Aquí los campos correspondientes -->
        <input type="text" name="title" id="title">
        <textarea name="content" id="content"></textarea>
        <textarea name="description" id="description"></textarea>
        <input type="text" name="author" id="author">
        <input type="submit" value="Guardar">
    </form>
    
</body>
</html>