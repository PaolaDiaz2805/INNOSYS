<?php
session_start();

if (!isset($_SESSION['id'])) {
  
    header("Location: logueo.php");
    exit(); 
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['archivo'])) {
    $archivo = $_FILES['archivo']; 
    
    
    $allowed_ext = ['pdf', 'docx', 'pptx']; 
    $ext = pathinfo($archivo['name'], PATHINFO_EXTENSION); 


    if (!in_array($ext, $allowed_ext)) {
        echo "El archivo no tiene una extensión permitida. Solo se aceptan archivos PDF, DOCX, o PPTX.";
        exit(); 
    }

    $upload_dir = 'uploads/tareas/';
    if (!is_dir($upload_dir)) {
        
        mkdir($upload_dir, 0777, true);
    }

    
    $file_path = $upload_dir . basename($archivo['name']);

    
    if (move_uploaded_file($archivo['tmp_name'], $file_path)) {
       
        $conn = new mysqli("localhost", "root", "", "proyecto");

        
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error); 
        }

         $tarea_id = 1; 
        $stmt = $conn->prepare("INSERT INTO entrega (id_usuario, tarea_idtarea, archivo, fechaentrega) VALUES (?, ?, ?, NOW())");
        $stmt->bind_param("iis", $_SESSION['id'], $tarea_id, $file_path);
        
        if ($stmt->execute()) {
            
            header("Location: exito.php");
            exit();
        } else {
            
            echo "Error al guardar la tarea en la base de datos.";
        }

        
        $stmt->close();
        $conn->close();
    } else {
       echo "Error al subir el archivo.";
    }
} else {
   header("Location: error.php");
    exit(); 
}
?>
