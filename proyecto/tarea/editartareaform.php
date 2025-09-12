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
    $id=$_SESSION['id'];
    $tit=$_SESSION['tit'];
    $des=$_SESSION['des'];
    $tem=$_SESSION['tem'];
    $not=$_SESSION['not'];
    
    $sql="SELECT * FROM tarea WHERE idtarea='$id'";
    $resultado = $conn->query($sql);

    if($resultado->num_rows>0){
       while($fila=$resultado->fetch_assoc()){
            $id=$fila['idtarea'];
            $titulo=$fila['titulo'];
            $descripcion=$fila['descripcion'];
            $tema=$fila['tema'];
            $nota=$fila['nota'];
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
    <center> <form action="tareaedit.php?titulo=$titulo" method="post" novalidate>
    <h1>TAREA</h1>
    <h2>Edita:</h2>

    <label for="nom">TITULO</label><br>
    <input type="text" name="titu"  value=<?=$titulo?> ><br>

    <label for="ape">DESCRIPCION</label><br>
    <input type="text" name="desc" value=<?=$descripcion?> ><br>

    <label for="ape">TEMA</label><br>
    <input type="text" name="tem" value=<?=$tema?> ><br>

     <label for="ape">NOTA</label><br>
    <input type="number" name="not" value=<?=$nota?> ><br>


    <div class="form-buttons"><br>
     <br> <input type="submit" value="Corregir" >
      <input type="reset" value="Limpiar" >
       <a id="x"href="borrartareaform.php">borrar tarea</a>
      

      
    </div>
  </form></center>
<script>
 $("form").validate({
    rules: {
        titu: {
          required: true,
          maxlength: 12
        },
        desc: {
          required: true,
          maxlength: 200
        },
        tem:{
          required: true,
          maxlength: 12
        }
        not: {
          required: true,
          maxlength: 3
        }
        },
      },
      messages: {
        titu: {
          required: "Este campo es obligatorio",
          maxlength: "Máximo 12 caracteres"
        },
        desc: {
          required: "Este campo es obligatorio",
          maxlength: "Máximo 200 caracteres"
        },
         tem:{
          required: "Este campo es obligatorio",
          maxlength: "Máximo 12 caracteres"
        },
        not:{
          required: "Este campo es obligatorio"
          maxlength: "Máximo 3 caracteres"
        }
      }
);
  </script>

</body>
</html>