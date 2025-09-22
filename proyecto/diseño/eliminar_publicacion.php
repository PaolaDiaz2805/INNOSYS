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

    $sql = "SELECT * FROM publicaciones WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $publicacion = $result->fetch_assoc();
        if ($_SESSION['id'] == $publicacion['usuario_id'] || $_SESSION['rol'] == 'profesor') {
            
            $delete_sql = "DELETE FROM publicaciones WHERE id = $id";
            if ($conn->query($delete_sql) === TRUE) {
                echo "<script>alert('Publicación eliminada'); window.location = 'publicacion.php';</script>";
            } else {
                echo "Error al eliminar la publicación.";
            }
        } else {
            echo "No tienes permiso para eliminar esta publicación.";
        }
    } else {
        echo "Publicación no encontrada.";
    }
} else {
    echo "ID no válido.";
}

$conn->close();
?>
