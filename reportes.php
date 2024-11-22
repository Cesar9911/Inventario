<?php
// reportes.php

include_once 'TransaccionFacade.php';
include_once 'ProductoFacade.php';

$transaccionFacade = new TransaccionFacade();
$productoFacade = new ProductoFacade();

// Obtener transacciones de ventas y compras
$transacciones = $transaccionFacade->obtenerTransacciones();

// Obtener productos
$productos = $productoFacade->obtenerProductos();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes de Inventario</title>
</head>
<body>
    <h1>Reportes de Inventario</h1>
    <h2>Transacciones</h2>
    <table>
        <thead>
            <tr>
                <th>ID Producto</th>
                <th>Cantidad</th>
                <th>Tipo de Transacción</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transacciones as $transaccion): ?>
                <tr>
                    <td><?php echo $transaccion['producto_id']; ?></td>
                    <td><?php echo $transaccion['cantidad']; ?></td>
                    <td><?php echo $transaccion['tipo_transaccion']; ?></td>
                    <td><?php echo $transaccion['fecha']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Inventario Actual</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
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
