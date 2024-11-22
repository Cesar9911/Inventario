<?php
// DatabaseConnection.php

class DatabaseConnection {
    private $host = 'localhost';
    private $db = 'u230126021_InvenTrack';
    private $user = 'u230126021_JulioMacias';
    private $pass = 'Juliomacias991#';
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        $this->conn = null;
    }
}
?>
