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
 $nombre=$_POST['c2'];
$sql = "UPDATE clase 
        SET nombre = '$nombre', codigo = '$codigo'
        WHERE codigo = '$codigo'";
if($conn->query($sql)===TRUE){
    echo "Se edito correctamente";
   header("Location: ../profesor/prinprof.php");
}

?>