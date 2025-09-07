<?php 
    $servername="localhost";
    $username="root";
    $contraseña="";
    $dbname="proyecto";

    $conn= new mysqli($servername, $username, $contraseña, $dbname);

    if($conn->connect_error) {
        echo "Ocurrio un error :( vuelve a intentarlo";
    }
    $rol=$_POST['rol'];
    $nombre=$_POST['pn'];
    $apellido=$_POST['pa'];
    $rude=$_POST['pr'];
    $ci=$_POST['pci']; 
    $telefono=$_POST['pt'];
    $curso=$_POST['pcu'];
    $contraseña=$_POST['pco'];
    $direccion=$_POST['pd']; 
    $fechadenacimiento=$_POST['pf']; 
    
    $sql="INSERT INTO usuario (id, contraseña, rol) VALUES('$ci','$contraseña','$rol')";
    $sql2="INSERT INTO informacion(ci, nombre, apellido, direccion, fechadenacimiento, telefono, curso, rude, usuario_id) VALUES ('$ci','$nombre','$apellido','$direccion','$fechadenacimiento','$telefono','$curso','$rude','$ci')";
    $sql3="SELECT * FROM informacion WHERE ci='$ci'";

   $resultado3= $conn->query($sql3);
   $fila3= $resultado3->fetch_assoc();
  if ($resultado3 && $resultado3->num_rows > 0) {
    echo "Este usuario ya existe";
    header("Location: ../diseño/principal.php");
    exit();
}
   
    if ($conn->query($sql) === TRUE) {
     echo "Nuevo registro creado exitosamente";
    } 

     if ($conn->query($sql2) === TRUE) {
        header("Location: ../usuarios/logueo.php");
    } 
    die();
?>