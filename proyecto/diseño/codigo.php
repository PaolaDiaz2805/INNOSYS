<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Códigos de Clase - La Salle Convenio</title>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet" />
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    display: grid;
    grid-template-columns: 100%;
    grid-template-rows: 100px 40px 500px 150px;
    grid-template-areas:
      "header"
      "dos"
      "main"
      "footer";
    background-color: #f0f4f8;
    flex-direction: column;
    align-items: center;
    min-height: 100vh;
    gap:10px;
  }

  .ad {
    grid-area: header;
 
  }
 .ni {
     
      grid-area: dos;
     
    }

  .mn {
    grid-area: main;
    padding: 50px 20px;
    max-width: 900px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 20px;
  }

  .boton-curso {
    background-color: #0d47a1; 
    color: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    font-weight: bold;
    font-size: 1.2rem;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    user-select: none;
    box-shadow: 0 2px 6px rgba(13, 71, 161, 0.4);
  }

  .boton-curso:hover {
    transform: scale(1.1);
    box-shadow: 0 8px 20px rgba(13, 71, 161, 0.7);
  }
  .er{
    grid-area:footer;
  }

  @media (max-width: 768px) {
   body {
    display: grid;
    grid-template-columns: 100%;
    grid-template-rows: 120px 60px 400px 150px;
    grid-template-areas:
      "header"
      "dos"
      "main"
      "footer";
   
  }
  .mn{
    justify-content:center;
    width: 100%;    
    transform: scale(0.8); 
    transform-origin: top bottom; 
    
  }

}

</style>
</head>
<body>

<header class="ad">
  <?php
  include("cabeza.php");
  ?>
</header>

<main class="ni">
  <?php 
  include("panza.php");
  ?>
</main>

<section class="mn">

  <div class="boton-curso">PRIMERO-A</div>
  <div class="boton-curso">PRIMERO-B</div>
  <div class="boton-curso">SEGUNDO-A</div>
  <div class="boton-curso">SEGUNDO-B</div>
  <div class="boton-curso">TERCERO-A</div>
  <div class="boton-curso">TERCERO-B</div>
  <div class="boton-curso">CUARTO-A</div>
  <div class="boton-curso">CUARTO-B</div>
  <div class="boton-curso">QUINTO-A</div>
  <div class="boton-curso">QUINTO-B</div>
  <div class="boton-curso">SEXTO-A</div>
  <div class="boton-curso">SEXTO-B</div>
</section>

<footer class="er">
  <?php
  include("pie.php");
  ?>
</footer>
</body>
</html>
