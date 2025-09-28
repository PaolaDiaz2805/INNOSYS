<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet" />
  <title>Document</title>
  <style>

    .header {
      background-color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      grid-area: uno;
      padding: 9px;
      gap: 15px;
      animation: slideDown 1s ease-in-out;
    }

    .header img {
      height: 80px;
    }

    #pp {
      font-family:'Montserrat', sans-serif;
      font-size: 5vw;
      text-shadow: 2px 2px 4px #002a61;
      text-transform: uppercase;
      text-align: center;
      margin: 0;
      color: #002a61; 
      transition: all 0.4s ease; 
    }

    #pp:hover {
      transform: scale(1.05);
    }

  
    a {
      text-decoration: none;
      color: inherit; 
    }

   
  </style>
</head>
<body>
  <header class="header">
    <img class="im" src="logo.png" alt="Logo Izquierda">
    <h1 id="pp"><a href="principal.php">LA SALLE DE CONVENIO</a></h1>
    <img class="im" src="logo.png" alt="Logo Derecha">
  </header>
</body>
</html>
