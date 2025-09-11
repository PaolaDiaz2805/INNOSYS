<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .go1 {
      grid-area: dos;
      display: flex;
      text-align: center;
      gap: 5px;
      position:fixed;
      width:100%;
    }

    .p, .k {
      width: 23%;
      background-color: #002a61;
      border-radius: 15px;
      transition: all 0.4s ease;
    }

    .p:hover, .k:hover {
      background-color: #004ea6;
      transform: scale(1.1);



      
    }

    .p a, .k a {
      display: block;
      padding: 15px;
      color: white;
      text-decoration: none;
      font-weight: bold;
    }
    </style>
</head>
<body>
   <header class="go1">
    <div class="p"><a href="his.php">INICIO</a></div>
    <div class="k"><a href="plann.php">INFORMACION</a></div>
    <div class="p"><a href="HOR2.php">CLASES</a></div>
    <div class="k"><a href="codigo.php">PERSONAS</a></div>
    <div class="p"><a href="contactanos2.php">CERRAR SESION</a></div>
</header>  
</body>
</html>