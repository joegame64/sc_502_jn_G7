<?php include '../core/header.php'; ?>

<!-- Contenedor Principal -->
<div class="container mt-5">
    <!-- Descripción de la página -->
  
    <center><h5 class="anuncio">Busqueda de Inforamación</h5>
    <div class="text-center mb-5">
        <p>En esta página podrás encontrar artículos educativos sobre diversos temas como tecnología, ciencia, historia, educación y más, obtenidos de Wikipedia. Utiliza el campo de búsqueda para encontrar artículos relacionados con cualquier área de tu interés.</p>
    </div>

    <!-- Contenedor de la búsqueda con un límite de ancho -->
    <div class="d-flex justify-content-center mb-4">
        <div class="input-group w-75 w-md-50">
            <input type="text" id="searchInput" class="form-control" placeholder="Buscar en Wikipedia (ej. Tecnología, Albert Einstein)">
            <button id="searchButton" class="btn btn-primary">Buscar</button>
        </div>
    </div>

    <!-- Aquí se cargarán los artículos encontrados -->
    <div id="wikiResultado" class="text-center">
        <!-- Los resultados de Wikipedia aparecerán aquí -->
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Incluir el script JavaScript -->
<script src="../js/api_educativa.js"></script>

<?php include '../core/footer.php'; ?>
