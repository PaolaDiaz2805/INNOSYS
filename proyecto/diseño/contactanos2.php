
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contacto Pedro Poveda</title>
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      display: grid;
      grid-template-columns: 50% 50%;
      grid-template-rows: 100px 40px 800px 150px;
      grid-template-areas:
        "hea hea"
        "na na"
        "nan asi"
        "foo foo";
     gap: 10px;
      font-family: Arial, sans-serif;
      background-color: white;

    }

    .der{
      grid-area: hea;
      }
    .nana{
      grid-area:na;
      }

    section {
      grid-area: nan;
      display: flex;
      flex-direction: column;
      justify-content: center;
      background-color: #115196e3; 
      padding: 20px;
      font-size: 1em;
    }

    aside {
      grid-area: asi;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      background-color: #115196e3; 
      color: #e6e5e5ff;
      padding: 20px;
    }

    aside h3 {
      margin-top: 0;
      color:  #061f38ff;
      border-bottom: 1px solid white;
      font-weight: bold;
    }

    aside p {
      margin: 5px 0;
    }

    iframe {
      width: 100%;
      height: 100%;
      border: none;
    }

    .ter {
      grid-area: foo;
    }
@media (max-width: 768px) {
 body {
      
      display: grid;
      grid-template-columns: 100%;
      grid-template-rows: 120px 60px 800px 350px 150px;
      grid-template-areas:
        "hea "
        "na"
        "nan"
        "asi"
        "foo";
     
    }
}

    

  </style>
</head>
<body>

  <header class="der">
   <?php
   include("cabeza.php")
   ?>
  </header>

  <nav class="nana">
    <?php
    include("panza.php")
    ?>
  </nav>

  <section>
    <h3>Mapa interactivo</h3>
    <iframe 
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.1520097114476!2d-66.17119342463457!3d-17.40449116465946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e37392613ab3d1%3A0xc9525cbc4d329bf1!2sUnidad%20Educativa%20La%20Salle%20CONVENIO!5e0!3m2!1ses-419!2sbo!4v1750732544446!5m2!1ses-419!2sbo" 
  width="100%" 
  height="100%" 
  style="border:0;" 
  allowfullscreen="" 
  loading="lazy" 
  referrerpolicy="no-referrer-when-downgrade">
</iframe>

</section>

  <aside>
    <div>
      <h3>Dirección</h3>
      <p>Entre Comuneros y Mama Ocllo</p>
      <p>Cochabamba - Bolivia</p>

      <h3>Teléfonos</h3>
      <p>48435746</p>

      <h3>INFORMES</h3>
      <p>Facebook: La Salle</p>

      <h3>Horario</h3>
      <p>Lunes ㅤㅤㅤ  ㅤ07:00 - 16:00<br>
         Martesㅤㅤㅤㅤ 07:00 - 16:00<br>
         Miércolesㅤㅤㅤ07:00 - 16:00<br>
         Jueves ㅤ ㅤ ㅤ 07:00 - 16:00 <br>        
         Viernesㅤㅤㅤㅤ07:00 - 16:00 <br>
         Sábadoㅤ ㅤ ㅤ Cerrado <br> 
         Domingoㅤㅤㅤ Cerrado <br>
          </p>
    </div>

   
  </aside>

  <footer class="ter">
  <?php
  include("pie.php");
  ?>
  </footer>

</body>
</html>