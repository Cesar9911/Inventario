<?php
// UsuarioFacade.php

include_once 'UsuarioRepository.php';

class UsuarioFacade {
    private $usuarioRepo;

    public function __construct() {
        $this->usuarioRepo = new UsuarioRepository();
    }

    public function crearUsuario($nombre, $email, $password) {
        return $this->usuarioRepo->crearUsuario($nombre, $email, $password);
    }

    public function obtenerUsuarios() {
        return $this->usuarioRepo->obtenerUsuarios();
    }

    public function obtenerUsuarioPorId($id) {
        return $this->usuarioRepo->obtenerUsuarioPorId($id);
    }

    public function actualizarUsuario($id, $nombre, $email, $password) {
        return $this->usuarioRepo->actualizarUsuario($id, $nombre, $email, $password);
    }

    public function eliminarUsuario($id) {
        return $this->usuarioRepo->eliminarUsuario($id);
    }
}
?>
