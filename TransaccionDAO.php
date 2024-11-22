<?php
// TransaccionDAO.php

include_once 'DatabaseConnection.php';

class TransaccionDAO {
    private $conn;

    public function __construct() {
        $database = new DatabaseConnection();
        $this->conn = $database->getConnection();
    }

    // Crear una nueva transacción (compra o venta)
    public function crearTransaccion($producto_id, $cantidad, $tipo_transaccion, $fecha) {
        $query = "INSERT INTO transacciones (producto_id, cantidad, tipo_transaccion, fecha) 
                  VALUES (:producto_id, :cantidad, :tipo_transaccion, :fecha)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':producto_id', $producto_id);
        $stmt->bindParam(':cantidad', $cantidad);
        $stmt->bindParam(':tipo_transaccion', $tipo_transaccion);
        $stmt->bindParam(':fecha', $fecha);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Obtener todas las transacciones
    public function obtenerTransacciones() {
        $query = "SELECT * FROM transacciones";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
