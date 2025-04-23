<?php include '../core/header.php'; ?>

    <!--Pequeño anuncio -->
    <h5 class="anuncio">Practicas para los estudiantes</h5>


    <hr>


    <!--Practicas-->

    <div class="container">
        <h2>Gestión de Prácticas</h2>
        <form id="formPractica">
            <div class="form-group">
                <label for="titulo">Título de la práctica</label>
                <input type="text" id="titulo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="horario">Materia</label>
                <select id="horario" class="form-control">
                    <option value="calculo"></option>
                    <option value="calculo">Programacion Basica</option>
                    <option value="programacion">Redes 1</option>
                    <option value="fisica">Ambiente Web</option>
                    <option value="fisica">Diseño Grafico</option>
                    <option value="fisica">Estructura de Datos</option>
                    <option value="fisica">Testing</option>
                    <option value="fisica">Sistemas Operativos</option>
                </select>
            </div>
            <div class="form-group">
                <label for="horario">Duracion</label>
                <select id="horario" class="form-control">
                    <option value="calculo"></option>
                    <option value="calculo">15 Min</option>
                    <option value="programacion">30 Min</option>
                    <option value="fisica">1 HR Min</option>
                </select>
                <div class="form-group">
                    <label for="horario">Modalidad</label>
                    <select id="horario" class="form-control">
                        <option value="calculo"></option>
                        <option value="calculo">Individual</option>
                        <option value="programacion">Grupal</option>
                        <option value="fisica">Parejas</option>
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


    <!--footer de la pagina -->
    <?php include '../core/footer.php'; ?>