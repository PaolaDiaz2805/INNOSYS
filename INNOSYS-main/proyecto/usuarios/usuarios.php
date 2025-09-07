<?php
$servername="localhost";
    $username="root";
    $contraseña="";
    $dbname="proyecto";

    $conn= new mysqli($servername, $username, $contraseña, $dbname);

    if($conn->connect_error) {
        echo "Ocurrio un error :( vuelve a intentarlo";
    }

    
    $sql="SELECT * FROM usuario";
    $resultado = $conn->query($sql);
    $sql2="SELECT * FROM informacion";
    $resultado2 = $conn->query($sql2);

    if($resultado->num_rows>0){
        if($resultado2->num_rows>0){
        while($fila=$resultado->fetch_assoc()){
            echo $fila['contraseña']."<br>".$fila['rol'];
            while($fila2=$resultado2->fetch_assoc())
        echo"<br>". $fila2['nombre']."<br>".$fila2['apellido']."<br>".$fila2['ci']."<br>".$fila2['curso']."<br>".$fila2['direccion']."<br>".$fila2['fechadenacimiento']."<br>".$fila2['rude']."<br>".$fila2['telefono'];
        echo "<a href='infouser.php?ci=$ci'><button>MOSTRAR</button></a>";
    }}
}
    ?>