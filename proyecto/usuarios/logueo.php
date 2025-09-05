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
           background-image: url("https://www.lasallecbb.edu.bo/images/Imagenes/LogoPagSF.png");
           background-repeat: space;
           background-attachment: fixed;
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
           display: flex;
           justify-content: center;
           align-items: center;
           color: rgb(0, 0, 0);
           z-index: 1;
        }
        html, body {
           height: 100%;
           margin: 0;
           padding: 0;
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
        form{
            background: linear-gradient(135deg, #cc0000,white, #003366);
            border-color: rgb(0, 0, 0);
            border-style: double;
            border-radius: 15px;
            width: 400px;
            padding: 40px;
            box-shadow: 0 8px 20px black;
            transition: transform 0.3s ease;
        }
        form:hover{
            transform: scale(1.04);
        }
        input{
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
            color: rgb(255, 255, 255);
            font-size: 50px;
        }
        h2{
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(255, 255, 255);
        }
        input[type="submit"],
        input[type="reset"] {
            width: 48%;
            background-color:rgb(170, 10, 10);
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
    <center><form action="logueomost.php" method="post" novalidate>
    <h1>BIENVENIDO!!</h1>
    <h2>Inicia Sesión</h2>
    <label for="ci">CI</label><br>
    <input type="text" id="ci" name="pci" placeholder="Ej: 1273567" /><br>
    <label for="co">Contraseña</label><br>
    <input type="password" id="co" name="pco" placeholder="********" /><br>
    <div class="form-buttons"><br>
     <br><input type="submit" value="Enviar" />
         <input type="reset" value="Limpiar" />
    </div>
</form></center>
<script> 
 $("form").validate({
    rules:{
        pci:{
          required: true,
          digits: true,
          maxlength: 10
        },
        pco:{
          required: true,
          minlength: 6,
          maxlength: 10
        }
    },
    messages:{
      pci:{
          required: "Este campo es obligatorio",
          digits: "Solo se permiten números",
          maxlength: "Máximo 10 dígitos"
    },
    pco:{
          required: "Este campo es obligatorio",
          minlength: "Mínimo 6 caracteres",
          maxlength: "Máximo 10 caracteres"
    }

 }
});

</script>

</body>
</html>