<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: logueo.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['archivo'])) {
    $archivo = $_FILES['archivo'];
    $tarea_id = $_POST['tarea_id']; 

    $allowed_ext = ['pdf', 'docx', 'pptx'];
    $ext = pathinfo($archivo['name'], PATHINFO_EXTENSION);

    
    if (!in_array($ext, $allowed_ext)) {
        echo "El archivo no tiene una extensión permitida.";
        exit();
    }

    
    $max_file_size = 5 * 1024 * 1024; 
    if ($archivo['size'] > $max_file_size) {
        echo "El archivo es demasiado grande. El tamaño máximo permitido es 5MB.";
        exit();
    }

    $upload_dir = 'uploads/tareas/';
    $safe_name = preg_replace('/[^a-zA-Z0-9_\-\.]/', '_', $archivo['name']);
    $file_path = $upload_dir . basename($safe_name);

    
    if ($archivo['error'] !== UPLOAD_ERR_OK) {
        echo "Error al subir el archivo. Código de error: " . $archivo['error'];
        exit();
    }

    if (move_uploaded_file($archivo['tmp_name'], $file_path)) {
        
        $conn = new mysqli("localhost", "root", "", "proyecto");
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("UPDATE entrega SET archivo = ?, fechaentrega = NOW() WHERE id_usuario = ? AND tarea_idtarea = ?");
        $stmt->bind_param("sii", $file_path, $_SESSION['id'], $tarea_id);
        if ($stmt->execute()) {
            header("Location: tarea_editada_exitosamente.php");
            exit();
        } else {
            header("Location: error_tarea_editada.php");
            exit();
        }
        $stmt->close();
        $conn->close();
    } else {
        echo "Error al subir el archivo.";
        exit();
    }
}
?>
