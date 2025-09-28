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
    $id=$_SESSION['id']??'';
    
    $sql="DELETE FROM tarea WHERE idtarea='$id'";
    $resultado= $conn->query($sql);
    
    if ($conn->query($sql) === TRUE) {
       echo"<script>alert('Se borro correctamente')</script>";
   
        }else{ 
            echo"<script>alert('algo salio mal intentelo de nuevo')</script>";
        }
    $conn->close();


?>