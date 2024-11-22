<?php
// admin_transacciones.php

include_once 'TransaccionFacade.php';
include_once 'ProductoFacade.php';

$transaccionFacade = new TransaccionFacade();
$productoFacade = new ProductoFacade();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['crear'])) {
        // Crear una transacción
        $transaccionFacade->crearTransaccion($_POST['producto_id'], $_POST['cantidad'], $_POST['tipo_transaccion'], $_POST['fecha']);
        
        // Actualizar el stock de productos
        if ($_POST['tipo_transaccion'] === 'venta') {
            $productoFacade->actualizarProducto($_POST['producto_id'], null, null, null, -$_POST['cantidad']);
        } elseif ($_POST['tipo_transaccion'] === 'compra') {
            $productoFacade->actualizarProducto($_POST['producto_id'], null, null, null, $_POST['cantidad']);
        }
    }
}

$transacciones = $transaccionFacade->obtenerTransacciones();
$productos = $productoFacade->obtenerProductos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Transacciones</title>
</head>
<body>
    <h1>Administración de Transacciones</h1>
    <form method="POST">
        <label for="producto_id">Producto:</label>
        <select name="producto_id" required>
            <?php foreach ($productos as $producto): ?>
                <option value="<?php echo $producto['id']; ?>"><?php echo $producto['nombre']; ?></option>
            <?php endforeach; ?>
        </select>
        
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required>

        <label for="tipo_transaccion">Tipo de Transacción:</label>
        <select name="tipo_transaccion" required>
            <option value="compra">Compra</option>
            <option value="venta">Venta</option>
        </select>

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" required>

        <button type="submit" name="crear">Registrar Transacción</button>
    </form>

    <h2>Historial de Transacciones</h2>
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
</body>
</html>
