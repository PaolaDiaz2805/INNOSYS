<?php
$servername = "localhost";   // El servidor MySQL
$username = "root";          // Usuario por defecto en XAMPP
$password = "";              // Contraseña en blanco por defecto en XAMPP
$dbname = "proyecto";        // Nombre de la base de datos que creaste

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}
echo "Conectado con éxito a la base de datos";
?>
