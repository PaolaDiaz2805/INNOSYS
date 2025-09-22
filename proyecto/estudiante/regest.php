<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <title>Document</title>
    <style>
        body {
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
        input[type="reset"] ,#x {
            width: 48%;
            background-color:rgba(28, 28, 70, 1);
            color: white;
            font-weight: bold;
            border: 3px solid;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover ,#x{
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
        #x{
          text-decoration:none;
        }

    </style>
</head>
<body>
   <center>
  <form action="regestmost.php" method="post" novalidate>
    <h1>ESTUDIANTE</h1>
    <h2>Llena el formulario con tus datos</h2>
    
    <label for="rol">Rol</label><br>
    <input type="text" value="estudiante" name="rol" readonly><br>
    
    <label for="pn">Nombre</label><br>
    <input type="text" name="pn" placeholder="Ej: Ximena"><br>

    <label for="pa">Apellidos</label><br>
    <input type="text" name="pa" placeholder="Ej: Ugarte Gutierrez"><br>
    
    <label for="pci">CI</label><br>
    <input type="text" name="pci" placeholder="Ej: 1273567"><br>

    <label for="pcu">Curso</label><br>
    <select name="pcu" id="p">
      <option value="">Seleccione un curso</option>
      <option value="primero">1ro A sec.</option>
      <option value="primero">1ro B sec.</option>
      <option value="segundo">2do A sec.</option>
      <option value="segundo">2do B sec.</option>
      <option value="tercero">3ro A sec.</option>
      <option value="tercero">3ro B sec.</option>
      <option value="cuarto">4to A sec.</option>
      <option value="cuarto">4to B sec.</option>
      <option value="quinto">5to A sec.</option>
      <option value="quinto">5to B sec.</option>
      <option value="sexto">6to A sec.</option>
      <option value="sexto">6to B sec.</option>
    </select>
    <br>

    <label for="pr">Rude</label><br>
    <input type="text" name="pr" placeholder="Ej: 198827289"><br>

    <label for="pd">Dirección</label><br>
    <input type="text" name="pd" placeholder="Ej: Av América c.Benjamín Guzmán"><br>

    <label for="pf">Fecha de nacimiento</label><br>
    <input type="date" name="pf"><br>

    <label for="pt">Teléfono</label><br>
    <input type="text" name="pt" placeholder="Ej: 64943243"><br>

    <label for="pco">Contraseña</label><br>
    <input type="password" name="pco" placeholder="********"><br>

    <div class="form-buttons"><br>
      <br> 
      <input type="submit" value="Enviar">
      <input type="reset" value="Limpiar">
      <a id="x" href="../usuarios/logueo.php">Iniciar sesión</a>
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
        pci: {
          required: true,
          digits: true,
          minlength: 7
        },
        pcu: {   
          required: true
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
        pci: {
          required: "Este campo es obligatorio",
          digits: "Solo se permiten números",
          minlength: "Debe tener al menos 7 dígitos"
        }, 
        pcu: {
          required: "Debe seleccionar un curso"
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