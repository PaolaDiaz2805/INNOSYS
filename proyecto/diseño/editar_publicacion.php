<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: logueo.php");
    exit();
}

$servername = "localhost";
$username = "root";
$contraseña = "";
$dbname = "proyecto";

$conn = new mysqli($servername, $username, $contraseña, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM publicaciones WHERE id = $id AND usuario_id = " . $_SESSION['id'];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $publicacion = $result->fetch_assoc();
    } else {
        echo "No se encontró la publicación.";
        exit;
    }
} else {
    echo "ID no válido.";
    exit;
}

// Actualizar la publicación
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $mensaje = $_POST['mensaje'];
    $fecha_edicion = date('Y-m-d H:i:s'); // Fecha de la edición

    $update_sql = "UPDATE publicaciones SET nombre = '$nombre', fecha = '$fecha', mensaje = '$mensaje', fecha_edicion = '$fecha_edicion' WHERE id = $id AND usuario_id = " . $_SESSION['id'];

    if ($conn->query($update_sql) === TRUE) {
        echo "<script>alert('Publicación actualizada con éxito'); window.location = 'publicacion.php';</script>";
    } else {
        echo "Error al actualizar la publicación: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Publicación</title>
</head>
<body>

<h2>Editar Publicación</h2>

<form action="editar_publicacion.php?id=<?= $id ?>" method="post">
    <label for="nombre">Nombre de la publicación:</label>
    <input type="text" name="nombre" value="<?= $publicacion['nombre'] ?>" required><br>

    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" value="<?= $publicacion['fecha'] ?>" required><br>

    <label for="mensaje">Mensaje:</label>
    <textarea name="mensaje" rows="4" required><?= $publicacion['mensaje'] ?></textarea><br>

    <button type="submit">Actualizar</button>
</form>

</body>
</html>
