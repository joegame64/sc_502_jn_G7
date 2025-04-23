<?php include '../core/header.php'; ?>

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

    <!--Pequeño anuncio -->


    <hr>

    <p class="anuncio" style="margin-top: 25px;">Actividades</p>
    <!--Cards de las notas -->
    <div class="container-custom">
        <div class="row-custom">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tour con clase de Ambiente Web</h5>
                    <p class="card-text">15 Estudites</p>
                    <hr>
                    <p>Lunes 13 Abril 10 AM- 3 PM</p>
                    <hr>
                    <p>IBM</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Merienda Compartida con Bases de Datos</h5>
                    <p class="card-text">15 Estudites</p>
                    <hr>
                    <p>Martes 2-5 PM</p>
                    <hr>
                    <p>Sede Heredia</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jira con Estructura de Datos</h5>
                    <p class="card-text">30 Estudites</p>
                    <hr>
                    <p>Jueves 21 Agosto 8 AM - 12 PM</p>
                    <hr>
                    <p>Amazon</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Charela con Programacion Basica</h5>
                    <p class="card-text">35 Estudites</p>
                    <hr>
                    <p>Lunes 8-11 AM</p>
                    <hr>
                    <p>Auditorio de Heredia </p>
                </div>
            </div>
        </div>
    </div>

    <!--footer de la pagina -->
<?php include '../core/footer.php'; ?>
