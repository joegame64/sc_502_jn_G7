<?php
// Configuración de la base de datos
$host = 'localhost';       
$username = 'root';        
$password = 'fidelitas';           
$dbname = 'peak_academy';  

// Crear conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    // Si la conexión falla, mostrar el error
    die("Conexión fallida: " . $conn->connect_error);
} else {
    // Si la conexión es exitosa, mostrar un mensaje
     "Conexión exitosa a la base de datos '$dbname'!";
}
