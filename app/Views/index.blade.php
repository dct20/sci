<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
</head>
<body>
    <h1>Listado de Productos</h1>
    <a href="/products/create">Crear Producto</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Cantidad en stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí irían los productos, por ahora los estamos mostrando manualmente -->
            <tr>
                <td>1</td>
                <td>Producto 1</td>
                <td>Descripción del producto 1</td>
                <td>20.00</td>
                <td>100</td>
                <td>
                    <a href="/products/edit/1">Editar</a> | 
                    <a href="/products/delete/1">Eliminar</a>
                </td>
            </tr>
            <!-- Aquí acabaría el ciclo de productos -->
        </tbody>
    </table>
</body>
</html>
