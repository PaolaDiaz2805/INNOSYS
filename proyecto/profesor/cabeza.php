<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet" />
    <title>Document</title>
    <style>
        .header{
     background-color: transparent;
      display: flex;
      justify-content: space-between;
      align-items: center;
      grid-area: uno;
      padding: 9px;
      gap: 0px;
      animation: slideDown 1s ease-in-out;
      position:fixed  ;
    width:100%; 
  height:120px; 
}
.header img {
      height: 80px;
    }

    #pp {
      font-family: 'Anton', sans-serif;
      font-size: 4vw;
      color:#062870 ;
      text-shadow: 5px 5px 5px rgba(161, 159, 185, 1);
      text-transform: uppercase;
      text-align: center;
      margin: 0;
      animation: glow 1.5s infinite alternate;
    }
     a{
      text-decoration:none;
     }
    </style>

</head>
<body>
     <header class="header">
    <img class="im" src="logo.png">
    <a href="../diseño/principal.php"><h1 id="pp">LA SALLE DE CONVENIO</h1></a>
    
    <img class="im" src="logo.png">
</header>


</body>
</html>