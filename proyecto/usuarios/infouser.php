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
if(isset($_GET['rol']) && !empty($_GET['rol'])){
    $_SESSION['rol'] = $_GET['rol'];
}
$ci = $_SESSION['ci'];
$rol=$_SESSION['rol'];
    
    $sql="SELECT * FROM usuario WHERE id='$ci'";
    $resultado = mysqli_query($conn,$sql);
    $sql2="SELECT * FROM informacion WHERE ci='$ci'";
    $resultado2 = $conn->query($sql2);

   // if($resultado->num_rows>0){
        //if($resultado2->num_rows>0){
        //while($fila=$resultado->fetch_assoc()){
          //  echo $fila['contraseña']."<br>".$fila['rol'];
            //while($fila2=$resultado2->fetch_assoc()){
              //      $_SESSION['ci']=$fila2['ci'];
                //    $_SESSION['nombre']=$fila2['nombre'];
                  //  $_SESSION['apellido']=$fila2['apellido'];
                    //$_SESSION['curso']=$fila2['curso'];
                   // $_SESSION['direccion']=$fila2['direccion'];
                   // $_SESSION['fechadenacimiento']=$fila2['fechadenacimiento'];
                   // $_SESSION['rude']=$fila2['rude'];
                    //$_SESSION['telefono']=$fila2['telefono'];
                    //$_SESSION['contraseña']=$fila2['contraseña'];
                    //$_SESSION['rol']=$fila2['rol'];
                    
       //  echo"<br>". $fila2['nombre']."<br>".$fila2['apellido']."<br>".$fila2['ci']."<br>".$fila2['curso']."<br>".$fila2['direccion']."<br>".$fila2['fechadenacimiento']."<br>".$fila2['rude']."<br>".$fila2['telefono'];
   
                    
    //}}}
//}else{
    //echo"<script>alert('no hay este usuario')</script>";
//}
    ?>
    <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BIENVENIDO!! Usuario - Ximena Ugarte</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #f5f5f5;
       background-image: url('logo.png');
          background-repeat: repeat;
          background-size: 50% 50%; 
          background-attachment: fixed;
      color: #333;
    }
     body::before {
           content: "";
           position: absolute;
           top: 0;
           left: 0;
           width: 100%;
           height: 100%;
           background-color: rgba(255, 255, 255, 0.7);
           z-index: -1;
        }

    .container {
      max-width: 1000px;
      margin: 30px auto;
      background: #fff;
      padding: 20px;
      border-color: rgb(0, 0, 0);
            border-style: double;
            border-radius: 15px;;
            padding: 40px;
            box-shadow: 0 8px 20px black;
            transition: transform 0.3s ease;
    }
    .container:hover{
            transform: scale(1.02);
        }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 2px solid #86b8faff;
      padding-bottom: 15px;
      margin-bottom: 20px;
    }

    .header h1 {
      font-size: 22px;
      margin: 0;
    }

    .edit-btn {
      background: #1754c5ff;
      color: white;
      border: none;
      padding: 8px 14px;
      border-radius: 5px;
      cursor: pointer;
    }

    .profile {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .profile-info {
      flex: 1;
    }

    .profile-info h2 {
      margin: 0;
      font-size: 24px;
      font-weight: bold;
    }

    .profile-info p {
      margin: 5px 0;
      font-size: 18px;
      color: #666;
    }

    .profile-pic {
      width: 100px;
      height: 100px;
      background: #ccc;
      border-radius: 50%;
      margin-left: 20px;
    }

    .section {
      margin-bottom: 20px;
    }

    .section h3 {
      background: #c3eff7ff;
      padding: 10px;
      margin: 0 0 10px 0;
      font-size: 18px;
      border-left: 5px solid #007bff;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    td {
      padding: 8px 5px;
      border-bottom: 1px solid #eee;
    }

    td:first-child {
      font-weight: bold;
      width: 220px;
      color: #555;
    }
  </style>
</head>
<body>
  <div class="container">
    <?php if($row = $resultado->fetch_assoc()){
    if($row2 = $resultado2->fetch_assoc()){

 ?>
    <div class="header">
      <h1>Perfil Usuario - <?php echo $row2['nombre']?>  <?php echo $row2['apellido']?></h1>
    </div>
    <div class="profile">
      <div class="profile-info">
    
        <p><?php echo $row['rol'] ?></p>
      </div>
      <div class="profile-pic"></div>
    </div>

    <div class="section">
      <h3>Datos básicos</h3>
      <table>
        <tr><td>Usuario</td><td><?php echo $row['rol'];?></td></tr>
        <tr><td>RUDE</td><td><?php echo $row2['rude'];?></td></tr>
        <tr><td>Identificación (CI)</td><td><?php echo $row2['ci'];?></td></tr>
        <tr><td>Curso</td><td><?php echo $row2['curso'];?> </td></tr>
        <tr><td>Contraseña</td><td><?php echo $row['contraseña'];?></td></tr>
        <tr><td>Dirección</td><td><?php echo $row2['direccion'];?></td></tr>
        <tr><td>Teléfono móvil</td><td><?php echo $row2['telefono'];?></td></tr>
        </table><?php if($_SESSION['rol']=="estudiante"){
                        echo "<a href='../estudiante/formeditest.php?ci=$ci?rol='$rol><button>EDITAR</button></a><br>";
                    }
                    if($_SESSION['rol']=="profesor"){
                        echo "<a href='../profesor/formeditprof.php?ci=$ci?rol'=$rol><button>EDITAR</button></a><br>";
                    }
                    if($_SESSION['rol']=="administrador"){
                       echo "<a href='../administrador/formeditprof.php?ci=$ci?rol='$rol><button>EDITAR</button></a><br>";
                    }
     } }?>
    </div>
  </div>
</body>
</html>