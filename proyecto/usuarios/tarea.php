<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
       font-family: cursive;
       margin: 0;
       display: flex;
       justify-content: center;
       align-items: flex-start;
       padding: 40px 20px;
       background-color: #f8f8f8; 
       background-image: url("logo.png");
       background-repeat: no-repeat;
       background-position: center;
       background-size: contain; 
       background-attachment: fixed;
       position: relative;
    }
    form {
      background-color: white;
      border: 3px solid rgba(30, 27, 206, 1);
      padding: 30px;
      width: 100%;
      max-width: 500px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.86);
    }


    h1, h2 {
      color: rgba(172, 34, 34, 1);
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
      color: rgba(70, 69, 69, 1);
    }

    input[type="text"],
    input[type="number"],
    input[type="date"],
    input[type="file"],
    select,
    textarea {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border-radius: 8px;
      border: 1px solid rgba(228, 228, 228, 0.14);
      margin-top: 5px;
      box-sizing: border-box;
      transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="number"]:focus,
    input[type="date"]:focus,
    textarea:focus,
    select:focus {
      border-color:rgba(221, 36, 36, 1);
      outline: none;
    }

    textarea {
      resize: vertical;
      height: 100px;
    }

    .botones {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    input[type="submit"],
    input[type="reset"],
    button {
      padding: 12px 25px;
      font-size: 14px;
      border: none;
      border-radius: 6px;
      background-color:rgba(45, 58, 168, 1);
      color: white;
      cursor: pointer;
      box-shadow: 0 3px 0 rgba(219, 37, 37, 1);
      transition: all 0.3s;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover,
    button:hover {
      background-color:rgba(58, 93, 167, 1);
    }

    input[type="submit"]:active,
    input[type="reset"]:active,
    button:active {
      transform: translateY(4px);
    }

    @media (max-width: 600px) {
      form {
        width: 90%;
      }
    }
  </style>
</head>
<body>
 <form action="crearmost.php" method="post" novalidate>
    <h1>CREA LA TAREA </h1>
    <h2>Llena el formulario</h2>
    <label for="nom">TÍTULO DEL TRABAJO </label><br>
    <input type="text" name="tt" placeholder="Nombra a tu trabajo (obligatorio)" /><br>
    <label for="mat">INSTRUCCIONES</label><br>
    <input type="text"  name="in" placeholder="(opcional)" /><br>
    <input type="file"  name="arc"placeholder="Puedes adjuntar aqui una ficha de trabajo (opcional)" />
    <label for="archivo">Adjunta</label>
     <br><input type="submit" value="Crear" />
         <input type="reset" value="Limpiar" />
    <br><label for="fecha">Fecha de entrega:</label>
    <br><input type="date" id="fecha">
   


  </div>

</form>
</form>
</body>
</html>