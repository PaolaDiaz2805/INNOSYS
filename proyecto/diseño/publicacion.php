<?php
session_start();
$servername = "localhost";
$username = "root";
$contraseña = "";
$dbname = "proyecto";

$conn = new mysqli($servername, $username, $contraseña, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO publicaciones (nombre, fecha, mensaje, usuario_id) VALUES ('$nombre', '$fecha', '$mensaje', '" . $_SESSION['id'] . "')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Publicación creada con éxito'); window.location = 'publicacion.php';</script>";
    } else {
        echo "Error al crear la publicación: " . $conn->error;
    }
}

$sql = "SELECT * FROM publicaciones ORDER BY fecha DESC"; // Mostrar publicaciones ordenadas por fecha
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h3>" . $row['nombre'] . "</h3>";
        echo "<p>" . $row['mensaje'] . "</p>";
        echo "<p><strong>Fecha:</strong> " . $row['fecha'] . "</p>";

        if ($_SESSION['id'] == $row['usuario_id'] || $_SESSION['rol'] == 'profesor') {
            echo "<a href='editar_publicacion.php?id=" . $row['id'] . "'>Editar</a> | ";
            echo "<a href='eliminar_publicacion.php?id=" . $row['id'] . "'>Eliminar</a>";
        }

        echo "</div><hr>";
    }
} else {
    echo "No hay publicaciones.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Publicación</title>
</head>
<body>

<h2>Crear Publicación</h2>

<form action="publicacion.php" method="post">
    <label for="nombre">Nombre de la publicación:</label>
    <input type="text" name="nombre" required><br>

    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" required><br>

    <label for="mensaje">Mensaje:</label>
    <textarea name="mensaje" rows="4" required></textarea><br>

    <button type="submit">Crear Publicación</button>
</form>

</body>
</html>
