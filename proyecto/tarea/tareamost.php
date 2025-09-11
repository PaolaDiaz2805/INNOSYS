<?php
$servername="localhost";
    $username="root";
    $contraseña="";
    $dbname="proyecto";

    $conn= new mysqli($servername, $username, $contraseña, $dbname);

    if($conn->connect_error) {
        echo "Ocurrio un error :( vuelve a intentarlo";
    }
    sesion_start();
    $titulo=$_POST['tt'];
    $descripcion=$_POST['in'];
    $tema=$_POST['tem'];
    $nota=$_POST['pun'];
    $sql="INSERT INTO tarea (titulo, descripcion, tema, nota, clase_idclase) VALUES('$titulo','$descripcion','$tema','$nota', '3')";
if ($conn->query($sql) === TRUE) {
    echo "Se subio la tarea exitosamente";
    }else{
        echo "error";
    }
    
?>