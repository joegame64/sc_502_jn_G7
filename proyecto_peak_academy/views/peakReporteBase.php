<?php include '../core/header.php'; ?>

    <!--Tabla de info general -->    
    <div class="top-right">
        <p class="materia">Base de Datps</p>
        <p class="horario">K 2-5 PM</p>
        <p class="sede">Virtual</p>
    </div>
   
    <!--Tabla de notas -->
    <h5 class="anuncio">Estudiantes</h5>

    <hr>


    <!--Tabla de notas -->
    <div class="table-container">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Correo Estudiantil</th>
                    <th scope="col">Cédula</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Carrera</th>
                    <th scope="col">Lugar de Residencia</th>
                    <th scope="col">Tareas</th>
                    <th scope="col">Examen</th>
                    <th scope="col">Proyecto</th>
                </tr>
            </thead>
            <tbody>
                <tr><th scope="row">1</th><td>estudiante1@ufide.ac.cr</td><td>12345678</td><td>Laura</td><td>Cordero</td><td>22</td><td>Base de Datos</td><td>San José</td><td>-</td><td>-</td><td>-</td></tr>
                <tr><th scope="row">2</th><td>estudiante2@ufide.ac.cr</td><td>23456789</td><td>Marco</td><td>Ramírez</td><td>23</td><td>Base de Datos</td><td>Heredia</td><td>-</td><td>-</td><td>-</td></tr>
                <tr><th scope="row">3</th><td>estudiante3@ufide.ac.cr</td><td>34567890</td><td>Andrea</td><td>Vargas</td><td>21</td><td>Base de Datos</td><td>Alajuela</td><td>-</td><td>-</td><td>-</td></tr>
                <tr><th scope="row">4</th><td>estudiante4@ufide.ac.cr</td><td>45678901</td><td>David</td><td>Jiménez</td><td>24</td><td>Base de Datos</td><td>Cartago</td><td>-</td><td>-</td><td>-</td></tr>
                <tr><th scope="row">5</th><td>estudiante5@ufide.ac.cr</td><td>56789012</td><td>Elena</td><td>Mendoza</td><td>22</td><td>Base de Datos</td><td>Puntarenas</td><td>-</td><td>-</td><td>-</td></tr>
                <tr><th scope="row">6</th><td>estudiante6@ufide.ac.cr</td><td>67890123</td><td>Ricardo</td><td>Solís</td><td>25</td><td>Base de Datos</td><td>Limón</td><td>-</td><td>-</td><td>-</td></tr>
                <tr><th scope="row">7</th><td>estudiante7@ufide.ac.cr</td><td>78901234</td><td>Gabriela</td><td>Castro</td><td>20</td><td>Base de Datos</td><td>Guanacaste</td><td>-</td><td>-</td><td>-</td></tr>
                <tr><th scope="row">8</th><td>estudiante8@ufide.ac.cr</td><td>89012345</td><td>Sebastián</td><td>León</td><td>22</td><td>Base de Datos</td><td>San José</td><td>-</td><td>-</td><td>-</td></tr>
                <tr><th scope="row">9</th><td>estudiante9@ufide.ac.cr</td><td>90123456</td><td>Daniela</td><td>Pérez</td><td>23</td><td>Base de Datos</td><td>Heredia</td><td>-</td><td>-</td><td>-</td></tr>
                <tr><th scope="row">10</th><td>estudiante10@ufide.ac.cr</td><td>01234567</td><td>Jorge</td><td>Martínez</td><td>21</td><td>Base de Datos</td><td>Cartago</td><td>-</td><td>-</td><td>-</td></tr>
                <tr><th scope="row">11</th><td>estudiante11@ufide.ac.cr</td><td>23456781</td><td>Silvia</td><td>Navarro</td><td>24</td><td>Base de Datos</td><td>Puntarenas</td><td>-</td><td>-</td><td>-</td></tr>
                <tr><th scope="row">12</th><td>estudiante12@ufide.ac.cr</td><td>34567892</td><td>Leonardo</td><td>Ureña</td><td>20</td><td>Base de Datos</td><td>Limón</td><td>-</td><td>-</td><td>-</td></tr>
                <tr><th scope="row">13</th><td>estudiante13@ufide.ac.cr</td><td>45678903</td><td>Verónica</td><td>Fernández</td><td>22</td><td>Base de Datos</td><td>San José</td><td>-</td><td>-</td><td>-</td></tr>
                <tr><th scope="row">14</th><td>estudiante14@ufide.ac.cr</td><td>56789014</td><td>Esteban</td><td>Rojas</td><td>23</td><td>Base de Datos</td><td>Heredia</td><td>-</td><td>-</td><td>-</td></tr>
                <tr><th scope="row">15</th><td>estudiante15@ufide.ac.cr</td><td>67890125</td><td>Patricia</td><td>Brenes</td><td>21</td><td>Base de Datos</td><td>Cartago</td><td>-</td><td>-</td><td>-</td></tr>

            </tbody>
        </table>
    </div>
      <!--Formulario para editar tabla -->
        <h5 class="anuncio" style="margin-top: 8vh;">Buscar Estudiante</h5>

        <hr>

        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputid" class="form-label">Cedula</label>
                <input type="id" class="form-control" id="inputid" placeholder="Cedula del Estudiante">
                </div>
            <div class="col-md-6">
            <label for="inputname" class="form-label">Nombre Completo</label>
            <input type="name" class="form-control" id="inputname" placeholder="Nombre del Estudiante">
            </div>
            <div class="col-md-2">
                <label for="inputCorreo" class="form-label">Correo Estudiantil</label>
                <input type="text" class="form-control" id="inputCorreo" placeholder="" >
            </div>
            <div class="col-md-2">
                <label for="inputCarrera" class="form-label">Carrera</label>
                <input type="text" class="form-control" id="inputCarrera" placeholder="" >
            </div>
            <div class="col-md-2">
                <label for="inputResidencia" class="form-label">Lugar de Residencia</label>
                <input type="text" class="form-control" id="inputResidencia" placeholder="" >
            </div>
            <div class="col-md-2">
                <label for="inputProyecto" class="form-label">Observaciones</label>
                <input type="text" class="form-control" id="inputProyecto" placeholder="Describa el Reporte" >
            </div>
            <div class="col-md-4">
            <label for="inputState" class="form-label">Reporte</label>
            <select id="inputState" class="form-select">
                <option selected>Escoja...</option>
                <option><p>Conducta</p></option>
                <option><p>Ausencias</p></option>
                <option><p>Notas</p></option>
                <option><p>Cancelacion de Curso</p></option>
            </select>
            </div>

            <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                Enviar Reporte
                </label>
            </div>
            </div>
            <div class="col-12">
            <button type="submit" class="btn btn-primary">Enviar Datos</button>
            </div>

          <hr>

        </form>
    
    <!--footer de la pagina -->
    <?php include '../core/footer.php'; ?>