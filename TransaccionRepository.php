<?php
// TransaccionRepository.php

include_once 'TransaccionDAO.php';

class TransaccionRepository {
    private $transaccionDAO;

    public function __construct() {
        $this->transaccionDAO = new TransaccionDAO();
    }

    // Delegar la creación de una transacción
    public function crearTransaccion($producto_id, $cantidad, $tipo_transaccion, $fecha) {
        return $this->transaccionDAO->crearTransaccion($producto_id, $cantidad, $tipo_transaccion, $fecha);
    }

    // Delegar la obtención de las transacciones
    public function obtenerTransacciones() {
        return $this->transaccionDAO->obtenerTransacciones();
    }
}
?>
