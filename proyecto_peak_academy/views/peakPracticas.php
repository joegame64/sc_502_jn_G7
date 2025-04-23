<?php include '../core/header.php'; ?>

<!--Pequeño anuncio -->
<h5 class="anuncio">Prácticas para los estudiantes</h5>
<hr>

<!--Prácticas-->
<div class="container">
    <h2>Gestión de Prácticas</h2>
    <form id="formPractica">
        <div class="form-group">
            <label for="titulo">Título de la práctica</label>
            <input type="text" id="titulo" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="materia">Materia</label>
            <select id="materia" class="form-control">
                <option value="">Selecciona una materia</option>
                <option value="programacion_basica">Programación Básica</option>
                <option value="redes">Redes 1</option>
                <option value="ambiente_web">Ambiente Web</option>
                <option value="diseno">Diseño Gráfico</option>
                <option value="estructura_datos">Estructura de Datos</option>
                <option value="testing">Testing</option>
                <option value="so">Sistemas Operativos</option>
            </select>
        </div>

        <div class="form-group">
            <label for="duracion">Duración</label>
            <select id="duracion" class="form-control">
                <option value="">Selecciona una duración</option>
                <option value="15min">15 Min</option>
                <option value="30min">30 Min</option>
                <option value="1h">1 Hora</option>
            </select>
        </div>

        <div class="form-group">
            <label for="modalidad">Modalidad</label>
            <select id="modalidad" class="form-control">
                <option value="">Selecciona una modalidad</option>
                <option value="individual">Individual</option>
                <option value="grupal">Grupal</option>
                <option value="parejas">Parejas</option>
            </select>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn-enviar">Agregar Práctica</button>
    </form>

    <div class="practicas">
        <h3>Prácticas Disponibles</h3>
        <div id="listaPracticas"></div>
    </div>
</div>

<!-- Footer de la página -->
<?php include '../core/footer.php'; ?>
