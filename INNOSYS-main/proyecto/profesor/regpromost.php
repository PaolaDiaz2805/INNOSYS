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
    $ci=$_POST['pci']; 
    $curso=$_POST['Pc'];
    $direccion=$_POST['pd']; 
    $fechadenacimiento=$_POST['pf']; 
    $rude=$_POST['pr'];
    $telefono=$_POST ['pt'];
    $contraseña=$_POST['pc'];
    
    $sql="INSERT INTO usuario (id, contraseña, rol) VALUES('$ci','$contraseña','$rol')";
    $sql2="INSERT INTO informacion(ci, nombre, apellido, direccion, fechadenacimiento, telefono, rude, usuario_id) VALUES ('$ci','$nombre','$apellido','$direccion','$fechadenacimiento','$telefono','$rude','$ci')";
    $sql3="SELECT * FROM informacion WHERE ci=$ci";
    $resultado= $conn->query($sql3);
    $fila= $resultado->fetch_assoc();
    if($ci==$fila['ci']){
        echo "este usuario ya existe"; 
    }
    if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
    }
    if ($conn->query($sql2) === TRUE) {
        header("Location: ../usuarios/logueo.php");
    } 
    $conn->close();
   


?>