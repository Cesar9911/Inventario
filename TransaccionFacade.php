<?php
// TransaccionFacade.php

include_once 'TransaccionRepository.php';

class TransaccionFacade {
    private $transaccionRepo;

    public function __construct() {
        $this->transaccionRepo = new TransaccionRepository();
    }

    // Crear una transacción
    public function crearTransaccion($producto_id, $cantidad, $tipo_transaccion, $fecha) {
        return $this->transaccionRepo->crearTransaccion($producto_id, $cantidad, $tipo_transaccion, $fecha);
    }

    // Obtener todas las transacciones
    public function obtenerTransacciones() {
        return $this->transaccionRepo->obtenerTransacciones();
    }
}
?>
