<!DOCTYPE html>
<php lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peak Academy</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/PeakAcademy.css">
</head>

<body>
    <!-- Header de la página -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="logo" href="../index.php">
                <img src="../imagenes/peaklogoo.png" alt="Peak Academy Logo" width="150" height="75">
            </a>

            <!-- Menú de navegación -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../views/peakPracticas.php">Practicas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../views/peakNotas.php">Notas</a>
                    </li>
                </ul>

                <!-- Dropdown de acciones -->
                <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Más Acciones
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Reportes</a></li>
                        <li><a class="dropdown-item" href="#">Matricular</a></li>
                        <li><a class="dropdown-item" href="#">Eventos</a></li>
                        <li><a class="dropdown-item" href="#">Control de Activos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="content">
        <div id="textCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div>¡Bienvenidos a nuestra plataforma!</div>
                </div>
                <div class="carousel-item">
                    <div>Reporta, Advierte y habla con Los Padres de Familia</div>
                </div>
                <div class="carousel-item">
                    <div>Mantenlos al tanto de todo lo que pasa 💡</div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#textCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#textCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
