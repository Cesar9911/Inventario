<?php
// ProductoDAO.php

include_once 'DatabaseConnection.php';

class ProductoDAO {
    private $conn;

    public function __construct() {
        $database = new DatabaseConnection();
        $this->conn = $database->getConnection();
    }

    // Crear un nuevo producto
    public function crearProducto($nombre, $descripcion, $precio, $stock) {
        $query = "INSERT INTO productos (nombre, descripcion, precio, stock) VALUES (:nombre, :descripcion, :precio, :stock)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':stock', $stock);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Leer todos los productos
    public function obtenerProductos() {
        $query = "SELECT * FROM productos";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Leer un producto específico por ID
    public function obtenerProductoPorId($id) {
        $query = "SELECT * FROM productos WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Actualizar un producto
    public function actualizarProducto($id, $nombre, $descripcion, $precio, $stock) {
        $query = "UPDATE productos SET nombre = :nombre, descripcion = :descripcion, precio = :precio, stock = :stock WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':precio', $precio);
        $stmt->bindParam(':stock', $stock);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Eliminar un producto
    public function eliminarProducto($id) {
        $query = "DELETE FROM productos WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
