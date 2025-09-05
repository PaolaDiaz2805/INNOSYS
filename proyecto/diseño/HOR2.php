 <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>La Salle de Convenio</title>
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: grid;
      grid-template-areas:
        "header header"
        "dos dos"
        "primaria secundaria"
        "footer footer";
      grid-template-columns: 50% 50%;
      grid-template-rows: 100px 40px 700px 150px;
      gap: 15px;
      background-color: #f5f5f5;
      padding: 15px;
    }

    .cab {
      grid-area: header;
    
    }
     .mi {
    
      grid-area: dos;
     
    }

    header img {
      height: 60px;
    }

    aside {
      grid-area: primaria;
      background-color: #00509d;
      color: white;
      padding: 20px;
      border-radius: 10px;
    }

    article {
      grid-area: secundaria;
      background-color: #003f88;
      color: white;
      padding: 20px;
      border-radius: 10px;
    }

    .fo{
      grid-area: footer;
      
    }
     
    .pri, .sec {
  background-color: rgba(255, 255, 255, 0.15);
  padding: 10px;
  margin: 6px 0;
  border: 2px solid white;
  border-radius: 8px;
  text-align: center;
  cursor: pointer;
  transition: transform 0.2s ease, background-color 0.2s ease;
}

.pri:hover, .sec:hover {
  transform: scale(1.05);
  background-color: rgba(255, 255, 255, 0.3);
}


   

    aside::before {
      content: "PRIMARIA";
      font-size: 24px;
      color: #ffc107;
      font-weight: bold;
      display: block;
      margin-bottom: 10px;
      text-align: center;
    }

    article::before {
      content: "SECUNDARIA";
      font-size: 24px;
      color: #ffc107;
      font-weight: bold;
      display: block;
      margin-bottom: 10px;
      text-align: center;
    }

    @media (max-width: 768px) {
      body {
        display: grid;
        grid-template-columns:100%;
        grid-template-rows: 120px 60px 650px 650px 150px;
        grid-template-areas:
          "header"
          "dos"
          "primaria"
          "secundaria"
          "footer";
       
      background-color: #f5f5f5;
       margin: 0;
      padding: 0;
      }

    }
  </style>
</head>
<body>

  <header class="cab">
 <?php 
  include("cabeza.php");?>
  </header>
 
<main class="mi">
  <?php 
  include("panza.php");?>
</main>
 

  <aside>
    <div class="pri">PRIMERO-A</div>
    <div class="pri">PRIMERO-B</div>
    <div class="pri">SEGUNDO-A</div>
    <div class="pri">SEGUNDO-B</div>
    <div class="pri">TERCERO-A</div>
    <div class="pri">TERCERO-B</div>
    <div class="pri">CUARTO-A</div>
    <div class="pri">CUARTO-B</div>
    <div class="pri">QUINTO-A</div>
    <div class="pri">QUINTO-B</div>
    <div class="pri">SEXTO-A</div>
    <div class="pri">SEXTO-B</div>
  </aside>

  <article>
    <div class="sec">PRIMERO-A</div>
    <div class="sec">PRIMERO-B</div>
    <div class="sec">SEGUNDO-A</div>
    <div class="sec">SEGUNDO-B</div>
    <div class="sec">TERCERO-A</div>
    <div class="sec">TERCERO-B</div>
    <div class="sec">CUARTO-A</div>
    <div class="sec">CUARTO-B</div>
    <div class="sec">QUINTO-A</div>
    <div class="sec">QUINTO-B</div>
    <div class="sec">SEXTO-A</div>
    <div class="sec">SEXTO-B</div>
  </article>

  <footer class="fo">
    <?php
    include("pie.php")
    ?>
  </footer>

</body>
</html>
