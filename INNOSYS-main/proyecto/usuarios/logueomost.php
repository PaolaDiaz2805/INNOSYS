<?php 

$servername="localhost";
    $username="root";
    $contraseña="";
    $dbname="proyecto";

    $conn= new mysqli($servername, $username, $contraseña, $dbname);

    if($conn->connect_error) {
         echo"<script>alert('Ocurrio un error :( vuelve a intentarlo')</script>";
    }
    
    session_start();

    $ci=$_POST['pci'];
   $contraseña=$_POST['pco'];
    
    $sql="SELECT * FROM informacion WHERE ci='$ci'";
    $resultado=$conn->query($sql);
    $sql2="SELECT * FROM usuario WHERE contraseña='$contraseña'";
    $resultado2=$conn->query($sql2);
     
    if($resultado->num_rows>0){
        if($resultado2->num_rows>0){
            while($fila=$resultado->fetch_assoc()){
                while($fila2=$resultado2->fetch_assoc()){
                    
                    $_SESSION['ci']=$fila['ci'];
                    $_SESSION['nombre']=$fila['nombre'];
                    $_SESSION['apellido']=$fila['apellido'];
                    $_SESSION['curso']=$fila['curso'];
                    $_SESSION['contraseña']=$fila2['contraseña'];
                    $_SESSION['rol']=$fila2['rol'];
                    
                    if($_SESSION['rol']==="estudiante"){
                        header("location:../estudiante/prinest.php".$conn->insert_ci);
                    }
                    if($_SESSION['rol']==="profesor"){
                        header("location: ../profesor/prinprof.php".$conn->insert_ci);
                    }
                    if($_SESSION['rol']==="administrador"){
                        header("location: ../administrador/prinadmin.php".$conn->insert_ci);
                    }else{
                         echo"<script>alert('NO HAY ROL')</script>";
                    }
                }
            } 
        }else{
            echo"<script>alert('CONTRASEÑA INCORRECTA')</script>";
        }
   
    }else{
        echo"<script>alert('NO EXISTE ESE USUARIO')</script>";
        
    }
?>