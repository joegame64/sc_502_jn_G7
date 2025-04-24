<?php include '../core/header.php'; ?>

<!-- Descripción de la página -->
<div class="text-center mb-5">
  <p>En esta página podrás encontrar artículos educativos sobre diversos temas como tecnología, ciencia, historia, educación y más, obtenidos de Wikipedia. Utiliza el campo de búsqueda para encontrar artículos relacionados con cualquier área de tu interés.</p>
</div>

<div id="noticiasContainer" class="d-flex flex-wrap justify-content-center">
  <!-- Los artículos de tecnología se cargarán aquí mediante JS -->
</div>

<!-- Campo de búsqueda -->
<div class="d-flex justify-content-center mb-4">
  <input type="text" id="searchInput" class="form-control" placeholder="Buscar en Wikipedia (ej. Tecnología, Albert Einstein)">
  <button id="searchButton" class="btn btn-primary ms-2">Buscar</button>
</div>

<!-- Aquí se cargarán los artículos encontrados -->
<div id="wikiResultado" class="text-center">
  <!-- Los resultados de Wikipedia aparecerán aquí -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Incluir el script JavaScript -->
<script src="../js/api_educativa.js"></script>

<?php include '../core/footer.php'; ?>
