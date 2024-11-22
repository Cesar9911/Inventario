<?php
// UsuarioRepository.php

include_once 'UsuariosDAO.php';

class UsuarioRepository {
    private $usuarioDAO;

    public function __construct() {
        $this->usuarioDAO = new UsuariosDAO();
    }

    // Delegar creación de usuario
    public function crearUsuario($nombre, $email, $password) {
        return $this->usuarioDAO->crearUsuario($nombre, $email, $password);
    }

    // Delegar obtención de usuarios
    public function obtenerUsuarios() {
        return $this->usuarioDAO->obtenerUsuarios();
    }

    // Delegar obtención de usuario por ID
    public function obtenerUsuarioPorId($id) {
        return $this->usuarioDAO->obtenerUsuarioPorId($id);
    }

    // Delegar actualización de usuario
    public function actualizarUsuario($id, $nombre, $email, $password) {
        return $this->usuarioDAO->actualizarUsuario($id, $nombre, $email, $password);
    }

    // Delegar eliminación de usuario
    public function eliminarUsuario($id) {
        return $this->usuarioDAO->eliminarUsuario($id);
    }
}
?>
