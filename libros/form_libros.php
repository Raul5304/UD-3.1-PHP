<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
</head>
<body>
    <h1>Buscador de Libros</h1>
    <form action="result_libros.php" method="post">
        <label for="name">Texto de búsqueda</label>
        <input type="text" id="name" name="name" /><br>

        <label for="search">Buscar en:</label>
        <input type="radio" id="book_title" name="search" value="Título de libro" />
        <label for="book_title">Titulo del líbro</label>
        <input type="radio" id="author_name" name="search" value="Autor de libro" />
        <label for="author_name">Autor del libro</label>
        <input type="radio" id="editor" name="search" value="Editorial" />
        <label for="editor">Editorial</label><br>

        <label for="booktype">Tipo de libro:</label>
        <select id="booktype" name="booktype">
            <option value="narrativa">Narrativa</option>
            <option value="libro de texto">Libro de texto</option>
            <option value="guia">Guías</option>
            <option value="mapas">Mapas</option>
        </select><br>
        <button type="submit">Buscar</button>
    </form>
</body>
</html>