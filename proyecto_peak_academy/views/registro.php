<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro | Peak Academy</title>
    <link rel="stylesheet" href="../css/login.css"> <!-- Usa el mismo CSS del login -->

</head>
<body>
    <div class="login-container">
        <h2>Registro de Usuario</h2>
        <form action="../includes/validar_registro.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre completo" required>
            <input type="text" name="usuario" placeholder="Nombre de usuario" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <select name="rol" required>
                <option value="">Selecciona un rol</option>
                <option value="admin">Admin</option>
                <option value="usuario">Usuario</option>
            </select>
            <button type="submit">Registrar</button>
        </form>
    </div>
</body>
</html>


