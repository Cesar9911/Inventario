<?php
// admin_productos.php

include_once 'ProductoFacade.php';

$productoFacade = new ProductoFacade();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['crear'])) {
        // Crear un producto
        $productoFacade->crearProducto($_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['stock']);
    }
}

$productos = $productoFacade->obtenerProductos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Productos</title>
</head>
<body>
    <h1>Administración de Productos</h1>
    <form method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" required>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" required>
        <label for="stock">Stock:</label>
        <input type="number" name="stock" required>
        <button type="submit" name="crear">Crear Producto</button>
    </form>

    <h2>Productos</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?php echo $producto['id']; ?></td>
                    <td><?php echo $producto['nombre']; ?></td>
                    <td><?php echo $producto['descripcion']; ?></td>
                    <td><?php echo $producto['precio']; ?></td>
                    <td><?php echo $producto['stock']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
