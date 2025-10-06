<?php
$servername="localhost";
    $username="root";
    $contraseña="";
    $dbname="proyecto";

    $conn= new mysqli($servername, $username, $contraseña, $dbname);

    if($conn->connect_error) {
        echo "Ocurrio un error :( vuelve a intentarlo";
    }
    session_start();
    if (isset($_POST['idclase']) && !empty($_POST['idclase'])) {
    $idclase = $_POST['idclase'];
} else {
    echo "No se recibió el ID de la clase.";
}
    $titulo=$_POST['tt'];
    $descripcion=$_POST['in'];
    $tema=$_POST['tem'];
    $nota=$_POST['pun'];
    $sql="INSERT INTO tarea (titulo, descripcion, tema, nota, clase_idclase) VALUES('$titulo','$descripcion','$tema','$nota', '$idclase')";
    if ($conn->query($sql) === TRUE) {
    $sql2="SELECT * FROM tarea WHERE titulo='$titulo'";
    $resultado=$conn->query($sql2);
    $fila=$resultado->fetch_assoc();
    $_SESSION['id']=$fila['idtarea'];
    $_SESSION['tit']=$fila['titulo'];
    $_SESSION['des']=$fila['descripcion'];
    $_SESSION['tem']=$fila['tema'];
    $_SESSION['not']=$fila['nota'];
    header("Location: ../diseño/tablon.php");
    exit();
    
    }else{
        echo "error";
    }
?>