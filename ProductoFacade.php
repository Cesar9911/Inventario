<?php
// ProductoFacade.php

include_once 'ProductoRepository.php';

class ProductoFacade {
    private $productoRepo;

    public function __construct() {
        $this->productoRepo = new ProductoRepository();
    }

    public function crearProducto($nombre, $descripcion, $precio, $stock) {
        return $this->productoRepo->crearProducto($nombre, $descripcion, $precio, $stock);
    }

    public function obtenerProductos() {
        return $this->productoRepo->obtenerProductos();
    }

    public function obtenerProductoPorId($id) {
        return $this->productoRepo->obtenerProductoPorId($id);
    }

    public function actualizarProducto($id, $nombre, $descripcion, $precio, $stock) {
        return $this->productoRepo->actualizarProducto($id, $nombre, $descripcion, $precio, $stock);
    }

    public function eliminarProducto($id) {
        return $this->productoRepo->eliminarProducto($id);
    }
}
?>
