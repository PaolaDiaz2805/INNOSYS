<?php
$servername="localhost";
    $username="root";
    $contraseña="";
    $dbname="proyecto";

    $conn= new mysqli($servername, $username, $contraseña, $dbname);

    if($conn->connect_error) {
        echo "Ocurrio un error :( vuelve a intentarlo";
    }
    $sql = "UPDATE usuario SET rol='estudiante' WHERE id='$id'";
    if (mysql_query($conn, $sql)) {
        header("Location: usuarios.php");
        }else{
            echo "<script>alert('Error al actualizar el rol')</script>";
        }
     ?>