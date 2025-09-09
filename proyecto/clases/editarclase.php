<?php 
    $servername="localhost";
    $username="root";
    $contraseña="";
    $dbname="proyecto";

    $conn= new mysqli($servername, $username, $contraseña, $dbname);

    if($conn->connect_error) {
        echo "Ocurrio un error :( vuelve a intentarlo";
    }
 $codigo=$_POST['c1'];
    $b="SELECT * FROM clase WHERE codigo='$codigo'";
    $resultado= $conn->query($b);
    if ($resultado->num_rows >0){
        while($fila=$resultado->fetch_assoc()){
        $nombre=$fila['nombre'];
           }
    }
?>