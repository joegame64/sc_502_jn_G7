<?php include '../core/header.php'; ?>
   

      <!--Formulario para editar tabla -->
      <div class="containerMatricula">
        <h2 class="titulo">Formulario de Matrícula</h2>
    
        <form class="matricula">
            <div class="form-group">
                <label for="nombre">Nombre Completo</label>
                <input type="text" id="nombre" class="form-control" placeholder="Ingrese su nombre completo">
            </div>
    
            <div class="form-group">
                <label for="cedula">Cédula</label>
                <input type="text" id="cedula" class="form-control" placeholder="Ingrese su cédula">
            </div>
    
            <div class="form-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" id="correo" class="form-control" placeholder="Ingrese su correo">
            </div>
    
            <div class="form-group">
                <label for="sede">Sede</label>
                <select id="sede" class="form-control">
                    <option value="" selected>Seleccione una sede</option>
                    <option value="san_jose">San Pedro</option>
                    <option value="heredia">Heredia</option>
                    <option value="alajuela">Virtual</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="materia">Materia</label>
                <select id="materia" class="form-control">
                    <option value="" selected>Seleccione una materia</option>
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
                <label for="horario">Horario</label>
                <select id="horario" class="form-control">
                    <option value="" selected>Seleccione un horario</option>
                    <option value="manana">Mañana (8:00 AM - 11:00 AM)</option>
                    <option value="tarde">Tarde (11:00 AM - 2:00 PM)</option>
                    <option value="noche">Noche (2:00 PM - 5:00 PM)</option>
                    <option value="noche">Noche (6:00 PM - 9:00 PM)</option>
                </select>
            </div>
    
            <button type="submit" class="btn-enviar">Enviar Matrícula</button>
        </form>
    </div>
    
    <!--footer de la pagina -->
    <?php include '../core/footer.php'; ?>