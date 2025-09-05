<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $servername="localhost";
    $username="root";
    $contraseña="";
    $dbname="proyecto";

    $conn= new mysqli($servername, $username, $contraseña, $dbname);

    if($conn->connect_error) {
        echo "Ocurrio un error :( vuelve a intentarlo";
    }

    $nombre=$_POST['c1'];
    $materia=$_POST['c2'];
    $codigo=$_POST['c4'];
    
    $sql="INSERT INTO clase(nombre,codigo,cuenta_id) VALUES ('$nombre','$codigo','$materia')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../profesor/prinprof.php");
} else {
    echo "Error al registrar en información: " . $conn->error;
}
?>