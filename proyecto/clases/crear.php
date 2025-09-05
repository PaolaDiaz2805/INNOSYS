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
        .Btn {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 45px;
            height: 45px;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition-duration: .3s;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
            background-color: rgb(192, 17, 17);
        }
        .sign {
            width: 100%;
            transition-duration: .3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sign svg {
           width: 17px;
        }
       .sign svg path {
           fill: white;
        }
        .text {
           position: absolute;
           right: 0%;
           width: 0%;
           opacity: 0;
           color: white;
           font-size: 1.2em;
           font-weight: 600;
           transition-duration: .3s;
        }
        .Btn:hover {
           width: 125px;
           border-radius: 40px;
           transition-duration: .3s;
        }
        .Btn:hover .sign {
           width: 30%;
           transition-duration: .3s;
           padding-left: 20px;
        }
        .Btn:hover .text {
            opacity: 1;
            width: 70%;
            transition-duration: .3s;
            padding-right: 10px;
        }
        .Btn:active {
            transform: translate(2px ,2px);
        }
    </style>
</head>
<body>
     <form action="crearmost.php" method="post" novalidate>
    <h1>CREA TU CLASE</h1>
    <h2>Llena el formulario</h2>
    <label for="nom">NOMBRE</label><br>
    <input type="text" id="nom" name="c1" placeholder="Nombra a tu clase(obligatorio)" /><br>
    <label for="mat">MATERIA</label><br>
    <input type="text" id="mat" name="c2" placeholder="Biologia" /><br>
    <label for="au">AULA</label><br>
    <input type="text" id="au" name="c3" placeholder="6toA secundaria" /><br>
    <label for="au">CODIGO</label><br>
    <input type="text" id="cod" name="c4" placeholder="xpxpx" /><br>
    <div class="form-buttons"><br>
     <br><input type="submit" value="Crear" />
         <input type="reset" value="Limpiar" />
          <button id="sal" class="Btn" type="button">
  <span class="sign">
    <svg viewBox="0 0 512 512">
      <path d="M244 400L100 256l144-144v88h200v112H244z"/>
    </svg>
  </span>
  <span class="text">Volver</span>
</button>
    </div>
</form>
<script> 
 $("form").validate({
    rules:{
        c1:{
          required: true,
          maxlength: 30
        },
        c2:{
          required: true,
          maxlength: 15
        },
        c3:{
            required:true,
            maxlength:20
        },
        c4:{
            required:true,
            maxlength:5
        }
    },
    messages:{
      c1:{
          required: "Este campo es obligatorio",
          maxlength: "Máximo 30 caracteres"
    },
    c2:{
          required: "Este campo es obligatorio",
          maxlength: "Máximo 15 caracteres"
    },
    c3:{
          required: "Este campo es obligatorio",
          maxlength: "Máximo 20 caracteres"
    },
    c4:{
          required: "Este campo es obligatorio",
          maxlength: "Máximo 5 caracteres"
    }
 }
});
$("#sal").on("click", function() {
    window.history.back();
  });

</script>
</body>
</html>