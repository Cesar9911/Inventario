<?php
// Iniciar sesión si no está iniciada
session_start();

// Incluir archivos necesarios
require_once 'config.php'; // Archivo de configuración para la base de datos
require_once 'functions.php'; // Funciones generales del sistema

// Verificar si el usuario está autenticado (por ejemplo, si está logueado)
if (!isset($_SESSION['user_id'])) {
    // Redirigir al login si el usuario no está autenticado
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InvenTrack - Sistema de Inventarios</title>
    
    <!-- Enlace a la CDN de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-pzjw8f+ua7Kw1TIq0r6b9wME6tcZbR1xgI70mMyyXU6C7Y7wV1EYp0XoYUK2nDdR" crossorigin="anonymous">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">InvenTrack</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="inventory.php">Inventario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reports.php">Reportes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Bienvenido al Sistema de Gestión de Inventarios</h1>
                <p class="text-center">Desde aquí puedes gestionar productos, realizar ventas y generar reportes.</p>
            </div>
        </div>

        <!-- Resumen del Inventario -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h4>Resumen del Inventario</h4>
                    </div>
                    <div class="card-body">
                        <p>Visualiza el estado actual de tu inventario.</p>
                        <a href="inventory.php" class="btn btn-primary">Ir al Inventario</a>
                    </div>
                </div>
            </div>

            <!-- Generar Reportes -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h4>Generar Reportes</h4>
                    </div>
                    <div class="card-body">
                        <p>Genera reportes sobre las transacciones realizadas.</p>
                        <a href="reports.php" class="btn btn-success">Ir a Reportes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 InvenTrack - Todos los derechos reservados.</p>
    </footer>

    <!-- Scripts de Bootstrap (requiere jQuery y Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zyA2vZ1heB6bYd8v8b27O+I3FjC6d+J1z5DPzCmT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0r6b9wME6tcZbR1xgI70mMyyXU6C7Y7wV1EYp0XoYUK2nDdR" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0r6b9wME6tcZbR1xgI70mMyyXU6C7Y7wV1EYp0XoYUK2nDdR" crossorigin="anonymous"></script>
</body>

</html>
