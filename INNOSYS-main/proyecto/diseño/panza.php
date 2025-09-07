<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .go1 {
      background-color: #f5f5f5;
      grid-area: dos;
      display: flex;
      text-align: center;
      gap: 5px;
    }

    .p, .k {
      width: 20%;
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
   <main class="go1">
    <div class="p"><a href="his.php">Nuestra Historia</a></div>
    <div class="k"><a href="plann.php">Plan de actividades</a></div>
    <div class="p"><a href="HOR2.php">Horarios</a></div>
    <div class="k"><a href="codigo.php">Códigos de clases</a></div>
    <div class="p"><a href="contactanos2.php">Contáctanos</a></div>
  </main>  
</body>
</html>