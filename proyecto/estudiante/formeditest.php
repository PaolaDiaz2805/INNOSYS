<?php
$servername="localhost";
    $username="root";
    $contraseña="";
    $dbname="proyecto";

    $conn= new mysqli($servername, $username, $contraseña, $dbname);

    if($conn->connect_error) {
        echo "Ocurrio un error :( vuelve a intentarlo";
    }
  
    $ci=$_GET['ci'];
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

</head>
<body>
    <center> <form action="editarest.php?id=$ci" method="post" novalidate>
    <h1>ESTUDIANTE</h1>
    <h2>Edita:</h2>

    <label for="nom">Nombre</label><br>
    <input type="text" name="pn"  value=<?=$nombre?> ><br>

    <label for="ape">Apellidos</label><br>
    <input type="text" name="pa" value=<?=$apellido?> ><br>

    <label for="cur">Curso</label><br>
    <select name="pcu" id="p" value=<?=$curso?>>
      <option value="primero">1ro A sec.</option>
      <option value="primero">1ro B sec.</option>
      <option value="segundo">2do A sec.</option>
      <option value="segundo"> 2do B sec. </option>
      <option value="tercero"> 3ro A sec.</option>
      <option value="tercero"> 3ro B sec.</option>
      <option value="cuarto"> 4to A sec.</option>
      <option value="cuarto"> 4to B sec.</option>
      <option value="quinto"> 5to A sec.</option>
      <option value="quinto"> 5to B sec.</option>
      <option value="sexto"> 6to A sec.</option>
      <option value="sexto"> 6to B sec.</option>
    
    </select>
    <br>

    <label for="Rd">Rude</label><br>
    <input type="text" name="pr"  value=<?=$rude?> ><br>

    <label for="di">Dirección</label><br>
    <input type="text" name="pd" value=<?=$direccion?> ><br>

    <label for="fn">Fecha de nacimiento</label><br>
    <input type="date" name="pf" value=<?=$fechadenacimiento?> ><br>

    <label for="tel"> <table>Telefono</table></label><br>
    <input type="text" name="pt" value=<?=$telefono?>/><br>

    <label for="co">Contraseña</label><br>
    <input type="password" name="pco"  value=<?=$contraseña?> ><br>

    <div class="form-buttons"><br>
     <br> <input type="submit" value="Corregir" >
      <input type="reset" value="Limpiar" >
      <input type="hidden" name="pci"value=<?=$ci?>>
    </div>
  </form></center>
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
        pcu:{
          required: true
        }
        pr: {
          required: true
        },
        pd: {
          required: true
        },
        pf:{
            required: true
        },
        pt:{
            required:true,
            digits: true
        },
          pco:{
          required: true,
          minlength: 6,
          maxlength: 10
          }
        },
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
         pcu:{
          required: "Este campo es obligatorio"
        },
        pr:{
          required: "Este campo es obligatorio"
        },
        pd:{
          required: "Este campo es obligatorio"
        },
        pf:{
          required: "Este campo es obligatorio"
        },
        pt: {
          required: "Este campo es obligatorio"
        },
        pd: {
          required: "Este campo es obligatorio"
        },
        pf: {
          required: "Este campo es obligatorio"
        },
        pt: {
          required: "Este campo es obligatorio"
        },
        pco:{
          required: "Este campo es obligatorio",
          minlength: "Mínimo 6 caracteres",
          maxlength: "Máximo 10 caracteres"
        }
      }
);
  </script>

</body>
</html>
    