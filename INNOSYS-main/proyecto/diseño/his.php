<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet" />
  <style>

    img {
      display: block;
      margin: 0 auto;
      max-width: 100%;
      height: auto;
    }
    body {
      display: grid;
      grid-template-columns: 30% 40% 30%;
      grid-template-rows: 100px 40px 450px 450px 100px;
      grid-template-areas:
        "head head head"
        "nv nv nv"
        "na mai asi"
        "na art asi"
        "foo foo foo";
      gap: 10px;
      background-color: #ffffff; 
      font-family: Arial, sans-serif;
      color: #222;
  
    }

    .hea {
      grid-area: head;
    
    }
     .nv{
       grid-area: nv;
     }
 
    nav {
      background-color: #64b5f6; 
      grid-area: na;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      gap: 10px;
      padding: 10px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    nav img{
      border-radius: 8px;
      width: 350px;
      height: 290px;
      object-fit: cover;
      box-shadow: 0 2px 6px rgba(0,0,0,0.15);
    }
    

    .maa {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      background-color: #bbdefb; 
      grid-area: mai;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    main h2 {
      text-align: center;
      margin-bottom: 1rem;
      font-size: 2rem;
      color: #0d47a1; 
    }

    #te {
      max-width: 800px;
      margin: 0 auto;
      text-align: justify;
      line-height: 1.8;
      color: #222;
    }

    article {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      grid-area: art;
      background-color: #64b5f6; 
      max-width: 800px;
      margin: 0 auto 3rem;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      color: #0d47a1;
      height: 420px;
    }

    article h3 {
      margin: 1.5rem 0 0.5rem;
      font-size: 1.4rem;
      font-weight: 600;
      color: #e53935; 
    }

    article p {
      margin: 0;
      text-align: justify;
      line-height: 1.6;
      color: #222;
    }

    aside {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      background-color: #bbdefb; 
      grid-area: asi;
      padding: 10px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      gap: 10px;
    }

    aside img{
      border-radius: 8px;
      width: 350px;
      height: 290px;
      object-fit: cover;
      box-shadow: 0 2px 6px rgba(0,0,0,0.15);
    }


    .fou{
      grid-area: foo;
    }
    @media (max-width: 768px){
      body{
      display: grid;
      grid-template-columns: 50% 50%;
      grid-template-rows: 120px 60px 180px 700px 180px 100px;
      grid-template-areas:
        "head head "
        "nv nv "
        "na na"
        "mai art"
        "asi asi"
        "foo foo ";
      gap: 8px;
      }
      nav{
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      
      }
      nav img{
        width:200px;
        height:150px;
      }
     article{
      height:670px;
     }
     aside{
      display: flex;
      flex-direction: row;
      justify-content: space-around;
     }
     aside img{
        width:200px;
        height:150px;
      }
    }
    
  </style>
</head>
<body >
  <header class="hea">
 <?php
 include("cabeza.php");
 ?>
  </header>

  <section class="nv">
<?php
include("panza.php");
?>
  </section>

  <nav>
    <div><img src="dos.jpg" alt="Imagen 2" /></div>
    <div><img src="tres.jpg" alt="Imagen 3" /></div>
    <div><img src="cuatro.jpg" alt="Imagen 4" /></div>
  </nav>

  <main class="maa">
    <h2>NUESTRA HISTORIA</h2>
    <p id="te">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pulvinar
      sapien hendrerit ante congue, at pharetra arcu cursus. Duis pellentesque
      sed ipsum et luctus. Curabitur ac ligula ac neque sollicitudin
      pellentesque. Integer ante dui, viverra sit amet tristique id, luctus sed
      risus. Nulla rhoncus magna ullamcorper, iaculis magna nec, bibendum
      ligula. Sed et dignissim ex, at lacinia nibh. Fusce eu sapien quis massa
      consequat varius laoreet et elit. Nulla a fringilla enim, vel efficitur
      justo. Donec porta est ac ultricies fermentum. Nunc vitae nunc sapien.
      Orci varius natoque penatibus et magnis dis parturient montes, nascetur
      ridiculus mus. Nam et mauris magna.
    </p>
  </main>

  <article>
    <h3>MISIÓN</h3>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pulvinar
      sapien hendrerit ante congue, at pharetra arcu cursus. Duis pellentesque
      sed ipsum et luctus.
    </p>

    <h3>VISIÓN</h3>
    <p>
      Curabitur ac ligula ac neque sollicitudin pellentesque. Integer ante dui,
      viverra sit amet tristique id, luctus sed risus. Nulla rhoncus magna
      ullamcorper, iaculis magna nec, bibendum ligula.
    </p>

    <h3>IDENTIDAD</h3>
    <p>
      Sed et dignissim ex, at lacinia nibh. Fusce eu sapien quis massa consequat
      varius laoreet et elit. Nulla a fringilla enim, vel efficitur justo.
      Donec porta est ac ultricies fermentum. Nunc vitae nunc sapien.
    </p>
  </article>

  <aside>
  <div><img src="cinco.jpg" alt="Cinco" /></div>
  <div><img src="seis.jpg" alt="Seis" /></div>
  <div><img src="siete.jpg" alt="Siete" /></div>
    
  </aside>

  <footer class="fou">
    <?php
    include("pie.php")
    ?>
  </footer>
</body>
</html>
