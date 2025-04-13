<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <form action="/products/update/1" method="POST">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="Producto 1" required><br><br>

        <label for="description">Descripción:</label>
        <textarea id="description" name="description" required>Descripción del producto 1</textarea><br><br>

        <label for="price">Precio:</label>
        <input type="number" id="price" name="price" value="20.00" required><br><br>

        <label for="stock">Cantidad en stock:</label>
        <input type="number" id="stock" name="stock" value="100" required><br><br>

        <input type="submit" value="Actualizar Producto">
    </form>
</body>
</html>
