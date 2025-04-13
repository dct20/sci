<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
</head>
<body>
    <h1>Crear Producto</h1>
    <form action="/products/store" method="POST">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description">Descripción:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="price">Precio:</label>
        <input type="number" id="price" name="price" required><br><br>

        <label for="stock">Cantidad en stock:</label>
        <input type="number" id="stock" name="stock" required><br><br>

        <input type="submit" value="Guardar Producto">
    </form>
</body>
</html>
