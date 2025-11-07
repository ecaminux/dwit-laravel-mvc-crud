<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('articles.create') }}" method="post">
        <input type="text" name="title" id="">
        <textarea name="content" id=""></textarea>
        <textarea name="description" id=""></textarea>
        <input type="text" name="author" id="">
        <input type="submit" value="Guardar">
    </form>
    
</body>
</html>