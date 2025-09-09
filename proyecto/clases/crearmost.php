
    <?php 
    $servername="localhost";
    $username="root";
    $contraseña="";
    $dbname="proyecto";

    $conn= new mysqli($servername, $username, $contraseña, $dbname);

    if($conn->connect_error) {
        echo "Ocurrio un error :( vuelve a intentarlo";
    }
    session_star();
    $ci=$_SESSION['ci']

    $nombre=$_POST['p1'];
    $curso=$_POST['p2'];
    $codigo=$_POST['p3'];
    
    $sql="INSERT INTO clase(nombre,codigo,curso,usuario_id) VALUES ('$nombre','$codigo','$curso','$ci')";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../profesor/prinprof.php?ci=$ci");
} else {
    echo "Error al registrar en información: " . $conn->error;
}
?>