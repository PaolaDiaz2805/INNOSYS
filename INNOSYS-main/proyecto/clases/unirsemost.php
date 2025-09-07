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
    $codigo=$_POST['u1'];

     $d="SELECT * FROM clase WHERE codigo='$codigo'";
    $resultado= $conn->query($d);
    if ($resultado->num_rows >0){
        $fila= $resultado->fetch_assoc();
    }
    if($codigo==$fila['codigo']){
        header("Location: ../estudiante/prinest.php");
        $_SESSION['codigo']=$_POST['u1'];
    }else{
        echo"No existe este usuario";
    }
?>