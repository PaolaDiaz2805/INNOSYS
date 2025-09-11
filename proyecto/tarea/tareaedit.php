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

    $conn->close();
?>