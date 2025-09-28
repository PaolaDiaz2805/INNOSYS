<?php
$mysqli = new mysqli("localhost", "root", "", "proyecto");

if ($mysqli->connect_error) { 
    die("Error de conexión: " . $mysqli->connect_error);  
}

session_start();

$id_profesor = $_SESSION['id'] ?? ''; 

if (!$id_profesor) {
    die("Debes iniciar sesión."); 
}

$nota = isset($_POST['nota']) ? (int) $_POST['nota'] : 0; 
$identrega = isset($_POST['identrega']) ? (int) $_POST['identrega'] : 

if ($identrega <= 0 || $nota < 0 || $nota > 100) {
    die("Datos incompletos o inválidos.");
}
$sql = "
UPDATE entrega e
JOIN tarea t ON t.idtarea = e.idtarea
SET e.nota = ?
WHERE e.id = ? AND t.idprofesor = ?
";


$stmt = $mysqli->prepare($sql);

$stmt->bind_param("iii", $nota, $identrega, $id_profesor);

if ($stmt->execute()) {
    echo "<script>alert('Nota guardada correctamente'); window.location.href='tarea.php';</script>";
} else {
    echo "Error al guardar la calificación: " . $mysqli->error;
}

$stmt->close();
$mysqli->close();
?>
