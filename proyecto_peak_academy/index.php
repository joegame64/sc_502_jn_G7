<!DOCTYPE html>
<php lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peak Academy</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/PeakAcademy.css">
</head>

<body>
    <!-- Header de la página -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="logo" href="../index.php">
                <img src="imagenes/peaklogoo.png" alt="Peak Academy Logo" width="150" height="75">
            </a>

            <!-- Menú de navegación -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/peakPracticas.php">Practicas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/peakNotas.php">Notas</a>
                    </li>
                </ul>

                <!-- Dropdown de acciones -->
                <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Más Acciones
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="views/peakReportes.php">Reportes</a></li>
                        <li><a class="dropdown-item" href="views/peakMatricula.php">Matricular</a></li>
                        <li><a class="dropdown-item" href="views/peakActividades.php">Eventos</a></li>
                        <li><a class="dropdown-item" href="views/peakReportes.php">Control de Activos</a></li>
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

<!--contenido de la pagina -->

    <!--Cards de la pagina -->
    <div class="container-custom">
        <div class="row-custom">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Notas de los Estudiantes</h5>
                    <p class="card-text">Modifica las notas de tus Estudiantes</p>
                    <a href="views/peakNotas.php" class="btn btn-primary">Ir a Notas</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Reportes</h5>
                    <p class="card-text">Conversa con los padres de tus Estudiantes</p>
                    <a href="views/peakReportes.php" class="btn btn-primary">Ir a Reportes</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Matricular</h5>
                    <p class="card-text">Matricula los próximos cursos</p>
                    <a href="views/peakMatricula.php" class="btn btn-primary">Ir a Matricular</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Prácticas</h5>
                    <p class="card-text">Prácticas para tus Estudiantes</p>
                    <a href="views/peakPracticas.php" class="btn btn-primary">Ir a Prácticas</a>
                </div>
            </div>
        </div>
    </div>

<!-- Footer de la página -->
<div class="footer">
    <footer style="background-color: rgb(226, 226, 226);">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <h5 class="mb-3" style="letter-spacing: 2px; color: #818963;">Peak Academy</h5>
                    <p>
                        Somos una Pagina que ayuda a los docentes a gestionar las
                        Notas, Reportes, Matriculas de los Docentes y Estudiantes
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3" style="letter-spacing: 2px; color: #818963;">Links</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1"><a href="#!" style="color: #4f4f4f;">Preguntas Frecuentes</a></li>
                        <li class="mb-1"><a href="#!" style="color: #4f4f4f;">Como Usar</a></li>
                        <li class="mb-1"><a href="#!" style="color: #4f4f4f;">Ayuda</a></li>
                        <li><a href="#!" style="color: #4f4f4f;">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-1" style="letter-spacing: 2px; color: #818963;">Atención al Cliente</h5>
                    <table class="table" style="color: #4f4f4f; border-color: #666;">
                        <tbody>
                            <tr><td>Lun - Vier:</td><td>8am - 9pm</td></tr>
                            <tr><td>Sab:</td><td>10am - 12am</td></tr>
                            <tr><td>Dom:</td><td>Cerrado</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Copyright:
            <a class="text-dark" href="">AmbienteWeb.com</a>
        </div>
    </footer>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
