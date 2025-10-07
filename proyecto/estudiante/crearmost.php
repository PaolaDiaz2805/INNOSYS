<?php
session_start();
if (!isset($_SESSION['id'])) {
    echo "Debes iniciar sesión.";
    exit; 
}

$mysqli = new mysqli("localhost", "root", "", "proyecto");
if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}

$id_estudiante = (int) $_SESSION['id']; 


if (!isset($_FILES['archivo']) || $_FILES['archivo']['error'] !== UPLOAD_ERR_OK) {
    die("No se recibió archivo o hubo un error al subirlo.");
}

$projectRoot = dirname(__DIR__); 
$uploadDir = $projectRoot . DIRECTORY_SEPARATOR . "uploads" . DIRECTORY_SEPARATOR;  

if (!is_dir($uploadDir)) {
    if (!mkdir($uploadDir, 0777, true)) {
        die("No se pudo crear la carpeta de subidas.");
    }
}

$origName = $_FILES['archivo']['name'];
$ext = pathinfo($origName, PATHINFO_EXTENSION);
$baseName = pathinfo($origName, PATHINFO_FILENAME);
$baseName = preg_replace('/[^a-zA-Z0-9_\-]/', '_', $baseName);
$uniqueName = $baseName . "_" . $id_estudiante . "_" . time() . ($ext ? "." . $ext : "");


$allowedExtensions = ['pdf', 'docx', 'jpg', 'png'];
if (!in_array($ext, $allowedExtensions)) {
    die("Tipo de archivo no permitido.");
}

$maxFileSize = 5 * 1024 * 1024; 
if ($_FILES['archivo']['size'] > $maxFileSize) {
    die("El archivo es demasiado grande.");
}


$destPath = $uploadDir . $uniqueName;
if (!move_uploaded_file($_FILES['archivo']['tmp_name'], $destPath)) {
    die("No se pudo mover el archivo al directorio de subidas.");
}


$relativePath = "uploads/" . $uniqueName;


$comentario = isset($_POST['comentario']) ? trim($_POST['comentario']) : null;
$id_tarea = isset($_POST['id_tarea']) ? (int) $_POST['id_tarea'] : 0;

$stmt = $mysqli->prepare(
    "INSERT INTO entrega (id_usuario, tarea_idtarea, archivo, comentario, fecha_entrega) 
    VALUES (?, ?, ?, ?, NOW())"
);
$stmt->bind_param("iiss", $id_estudiante, $id_tarea, $relativePath, $comentario);

if ($stmt->execute()) {
    echo "<script>alert('¡Entrega registrada correctamente!'); window.location.href='../estudiante/tareas.php';</script>";
    exit;
} else {
    error_log("Error al guardar la entrega: " . $mysqli->error);
    die("Hubo un problema al procesar tu entrega, por favor intenta más tarde.");
}

$stmt->close();
$mysqli->close();
?>
