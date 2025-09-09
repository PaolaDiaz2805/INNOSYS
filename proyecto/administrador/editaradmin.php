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
$ci=$_SESSION['ci'];
$rol=$_SESSION['rol'];

 if (!isset($_SESSION['ci']) || empty($_SESSION['ci'])) {
    header("Location:../diseño/principal.php");
    exit();
 }
if ($_SESSION['rol'] !== 'administrador') {
    header("Location:../diseño/principal.php");
    exit();
 }

    $nombre=$_POST['pn'];
    $apellido=$_POST['pa'];
    $rude=$_POST['pr'];
    $telefono=$_POST['pt'];
    $curso=$_POST['pcu'];
    $contraseña=$_POST['pco'];
    $direccion=$_POST['pd']; 
    $fechadenacimiento=$_POST['pf']; 
    
    $sql="UPDATE usuario SET contraseña='$contraseña' WHERE id='$ci'";
    $sql2="UPDATE informacion SET ci='$ci', nombre='$nombre', apellido='$apellido', direccion='$direccion', fechadenacimiento='$fechadenacimiento', telefono='$telefono', curso='$curso', rude='$rude' WHERE ci='$ci'";
    $sql3="SELECT * FROM informacion WHERE ci=$ci";
    $resultado= $conn->query($sql3);
    $fila= $resultado->fetch_assoc();
    
    if ($conn->query($sql) === TRUE) {
        if($conn->query($sql2) === TRUE){
echo"<script>alert('se edito correctamente')</ccript>";
    header("location: ../usuarios/infouser.php");
        }else{ 
            echo"<script>alert('algo salio mal intentelo de nuevo')</script>";
        }
     
    } 
    $conn->close();
?>