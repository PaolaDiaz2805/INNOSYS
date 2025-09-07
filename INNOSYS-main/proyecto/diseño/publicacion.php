<?php 
    $servername="localhost";
    $username="root";
    $contraseña="";
    $dbname="proyecto";

    $conn= new mysqli($servername, $username, $contraseña, $dbname);

    if($conn->connect_error) {
        echo "Ocurrio un error :( vuelve a intentarlo";
    }

    $nombre=$_POST['nombre'];
    $fecha=$_POST['fecha'];
    $mensaje=$_POST['mensaje'];
    $ci=$_POST['ci'];
    
    $sql="INSERT INTO comentarios(cuenta, fechaC, publicacion) VALUES ('$nombre','$fecha','$mensaje')";
    $sql2="SELECT * FROM usuario WHERE id=$ci";
       $resultado= $conn->query($sql2);
    if ($resultado->num_rows >0){
        $fila= $resultado->fetch_assoc();
        echo $mensaje;
    }else{
        echo "error";
    }
    if($ci==$fila['id']){
       echo $fila['rol'];
    }else{
        echo"No existe este usuario";
    }
    
   
?>