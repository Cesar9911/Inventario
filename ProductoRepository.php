<?php
// ProductoRepository.php

include_once 'ProductoDAO.php';

class ProductoRepository {
    private $productoDAO;

    public function __construct() {
        $this->productoDAO = new ProductoDAO();
    }

    // Delegar creación de producto
    public function crearProducto($nombre, $descripcion, $precio, $stock) {
        return $this->productoDAO->crearProducto($nombre, $descripcion, $precio, $stock);
    }

    // Delegar obtención de productos
    public function obtenerProductos() {
        return $this->productoDAO->obtenerProductos();
    }

    // Delegar obtención de producto por ID
    public function obtenerProductoPorId($id) {
        return $this->productoDAO->obtenerProductoPorId($id);
    }

    // Delegar actualización de producto
    public function actualizarProducto($id, $nombre, $descripcion, $precio, $stock) {
        return $this->productoDAO->actualizarProducto($id, $nombre, $descripcion, $precio, $stock);
    }

    // Delegar eliminación de producto
    public function eliminarProducto($id) {
        return $this->productoDAO->eliminarProducto($id);
    }
}
?>
