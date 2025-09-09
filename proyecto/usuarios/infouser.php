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

if (!isset($_SESSION['ci']) || empty($_SESSION['ci'])) {
    header("Location:../diseño/principal.php");
    exit();
}
$ci = $_SESSION['ci'];
$rol=$_SESSION['rol'];
    
    $sql="SELECT * FROM usuario WHERE id='$ci'";
    $resultado = $conn->query($sql);
    $sql2="SELECT * FROM informacion WHERE ci='$ci'";
    $resultado2 = $conn->query($sql2);

    if($resultado->num_rows>0){
        if($resultado2->num_rows>0){
        while($fila=$resultado->fetch_assoc()){
            echo $fila['contraseña']."<br>".$fila['rol'];
            while($fila2=$resultado2->fetch_assoc())
                    $_SESSION['ci']=$fila2['ci'];
                    $_SESSION['nombre']=$fila2['nombre'];
                    $_SESSION['apellido']=$fila2['apellido'];
                    $_SESSION['curso']=$fila2['curso'];
                    $_SESSION['direccion']=$fila2['direccion'];
                    $_SESSION['fechadenacimiento']=$fila2['fechadenacimiento'];
                    $_SESSION['rude']=$fila2['rude'];
                    $_SESSION['telefono']=$fila2['telefono'];
                    $_SESSION['contraseña']=$fila2['contraseña'];
                    $_SESSION['rol']=$fila2['rol'];
                    
        echo"<br>". $fila2['nombre']."<br>".$fila2['apellido']."<br>".$fila2['ci']."<br>".$fila2['curso']."<br>".$fila2['direccion']."<br>".$fila2['fechadenacimiento']."<br>".$fila2['rude']."<br>".$fila2['telefono'];
    
                    if($_SESSION['rol']==="estudiante"){
                        "<a href='../estudiante/formeditest.php?ci=$ci'><button>EDITAR</button></a><br>";
                    }
                    if($_SESSION['rol']==="profesor"){
                        "<a href='../profesor/formeditprof.php?ci=$ci'><button>EDITAR</button></a><br>";
                    }
                    if($_SESSION['rol']==="administrador"){
                       "<a href='../administrador/formeditprof.php?ci=$ci'><button>EDITAR</button></a><br>";
                    }else{
                         echo"<script>alert('NO HAY ROL')</script>";
                    }
    
    }}
}else{
    echo"<script>alert('no hay este usuario')</script>";
}
    ?>