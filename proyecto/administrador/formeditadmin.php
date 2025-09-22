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
    
    $sql="SELECT * FROM informacion WHERE ci='$ci'";
    $sql2="SELECT * FROM usuario WHERE id='$ci'";
    $resultado = $conn->query($sql);
    $resultado2 = $conn->query($sql2);

    if($resultado->num_rows>0){
       if($resultado2->num_rows>0){
        while ( $fila2=$resultado2->fetch_assoc()){
      $contraseña=$fila2['contraseña'];
       }}
       while($fila=$resultado->fetch_assoc()){
            $nombre=$fila['nombre'];
            $apellido=$fila['apellido'];
            $curso=$fila['curso'];
            $direccion=$fila['direccion'];
            $fechadenacimiento=$fila['fechadenacimiento'];
            $rude=$fila['rude'];
            $telefono=$fila['telefono'];

  
    }
    }
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <title>Document</title>
    <style>    body {
            position: relative;
            margin: 0;
            height: 100%;
            background-image: url("../diseño/logo.png");
            background-repeat: repeat;
            background-position: center;
            background-size: calc(70vw / 2) calc(70vh / 2);
            background-attachment: fixed;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            color: rgb(0, 0, 0);
            z-index: 1;
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

        form {
            background: linear-gradient(135deg, #2d41b3ff, white, #003366);
            border: double 3px rgb(0, 0, 0);
            border-radius: 15px;
            width: 400px;
            padding: 40px;
            box-shadow: 0 8px 20px black;
            transition: transform 0.3s ease;
        }
        form:hover{
            transform: scale(1.04);
        }
        input, #x, select{
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            background-color:rgb(255, 255, 255);
            border: 1px solid rgb(253, 244, 232);
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        label{
             display: block;
             margin-bottom: 5px;
             font-weight: bold;
             font-size: 16px;
        }
        h1{
            font-family: Arial, Helvetica, sans-serif;
            color: rgba(28, 28, 70, 1);
            font-size: 50px;
        }
        h2{
            font-family: Arial, Helvetica, sans-serif;
            color: rgba(28, 28, 70, 1);
        }
        input[type="submit"],
        input[type="reset"] {
            width: 48%;
            background-color:rgba(28, 28, 70, 1);
            color: white;
            font-weight: bold;
            border: 3px solid;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }
        label.error {
            color: red;
            font-size: 13px;
            margin-top: -15px;
            margin-bottom: 10px;
            display: block;
        }
        
        </style>

</head>
<body>
   <center>
  <form action="editaradmin.php?id=<?= $ci ?>" method="post" novalidate>
    <h1>ADMINISTRADOR</h1>
    <h2>Edita:</h2>

    <label for="pn">Nombre</label><br>
    <input type="text" name="pn" value="<?= $nombre ?>"><br>

    <label for="pa">Apellidos</label><br>
    <input type="text" name="pa" value="<?= $apellido ?>"><br>

    <label for="pr">Rude</label><br>
    <input type="text" name="pr" value="<?= $rude ?>"><br>

    <label for="pd">Dirección</label><br>
    <input type="text" name="pd" value="<?= $direccion ?>"><br>

    <label for="pf">Fecha de nacimiento</label><br>
    <input type="date" name="pf" value="<?= $fechadenacimiento ?>"><br>

    <label for="pt">Teléfono</label><br>
    <input type="text" name="pt" value="<?= $telefono ?>"><br>

    <label for="pco">Contraseña</label><br>
    <input type="password" name="pco" value="<?= $contraseña ?>"><br>

    <div class="form-buttons"><br>
      <br> 
      <input type="submit" value="Corregir">
      <input type="reset" value="Limpiar">
      <input type="hidden" name="pci" value="<?= $ci ?>">
    </div>
  </form>
</center>

<script>
$("form").validate({
    rules: {
        pn: {
          required: true,
          maxlength: 12
        },
        pa: {
          required: true,
          maxlength: 25
        },
        pr: {
          required: true
        },
        pd: {
          required: true
        },
        pf: {
          required: true
        },
        pt: {
          required: true,
          digits: true
        },
        pco: {
          required: true,
          minlength: 6,
          maxlength: 10
        }
    },
    messages: {
        pn: {
          required: "Este campo es obligatorio",
          maxlength: "Máximo 12 caracteres"
        },
        pa: {
          required: "Este campo es obligatorio",
          maxlength: "Máximo 25 caracteres"
        },
        pr: {
          required: "Este campo es obligatorio"
        },
        pd: {
          required: "Este campo es obligatorio"
        },
        pf: {
          required: "Este campo es obligatorio"
        },
        pt: {
          required: "Este campo es obligatorio",
          digits: "Solo se permiten números"
        },
        pco: {
          required: "Este campo es obligatorio",
          minlength: "Mínimo 6 caracteres",
          maxlength: "Máximo 10 caracteres"
        }
    }
});
</script>

</body>
</html>
    