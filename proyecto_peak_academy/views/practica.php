<?php include '../core/header.php'; ?>


    <div class="container">
        <h2>Gestión de Prácticas</h2>
        <form id="formPractica">
            <div class="form-group">
                <label for="titulo">Título de la práctica</label>
                <input type="text" id="titulo" class="form-control" required>
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
    


<?php include '../core/footer.php'; ?>

