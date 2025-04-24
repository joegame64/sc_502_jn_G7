<?php
session_start();

// Redirigir si no está logueado
if (!isset($_SESSION['usuario'])) {
    header('Location: ../login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peak Academy</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/PeakAcademy.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Header de la página -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="logo" href="../index.php">
                <img src="../imagenes/peaklogoo.png" alt="Peak Academy Logo">
            </a>

            <!-- Menú de navegación -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../views/index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../views/peakPracticas.php">Prácticas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../views/peakReportes.php">Reportes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../views/peakArticulos.php">Recursos Educativos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../views/registro.php">Crear Usuario</a>
                    </li>
                </ul>

                <!-- Dropdown de acciones -->
                <div class="btn-group me-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Más Acciones
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../views/peakMatricula.php">Matricular</a></li>
                        <li><a class="dropdown-item" href="../views/peakActividades.php">Eventos</a></li>
                        <li><a class="dropdown-item" href="../views/peakActivos.php">Control de Activos</a></li>
                    </ul>
                </div>

                <!-- Botón cerrar sesión -->
                <a href="../includes/logout.php" class="btn btn-outline-danger">Cerrar sesión</a>
            </div>
        </div>
    </nav>


    <div class="container main-content">


</div>

