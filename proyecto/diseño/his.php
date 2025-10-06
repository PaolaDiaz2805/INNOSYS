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
      grid-template-rows: 100px 40px 250px 650px 100px;
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
      height: 615px;
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
La Salle Convenio es parte de una red internacional de colegios fundada por los Hermanos de las Escuelas Cristianas, basados en las enseñanzas y valores de San Juan Bautista de La Salle. Su educación busca formar a los estudiantes no solo en lo académico, sino también en lo humano, espiritual y social, para que sean personas comprometidas, líderes y solidarias.

    </p>
  </main>

  <article>
    <h3>MISIÓN</h3>
    <p>
Formar integralmente a nuestros estudiantes desde una educación de calidad, inspirada en los valores del Evangelio y la identidad lasallista.
Promovemos el desarrollo académico, humano y espiritual mediante el uso de estrategias pedagógicas diversificadas, la participación en proyectos, concursos y experiencias 
que fortalezcan habilidades, fomentando además la solidaridad, la fe y el compromiso social.
    </p>

    <h3>VISIÓN</h3>
    <p>
Ser una institución educativa referente en innovación pedagógica y tecnológica, que integre inteligencia artificial, plataformas virtuales y enfoques de neuroeducación para personalizar el aprendizaje. Aspiramos a consolidar redes entre niveles e instituciones La Salle, con aulas inteligentes y espacios modernos, que potencien la formación de líderes cristianos, capaces de transformar la sociedad con responsabilidad, ética y fe.
    </p>

    <h3>IDENTIDAD</h3>
    <p>
Nuestra identidad se fundamenta en el carisma de San Juan Bautista de La Salle, promoviendo una educación cristiana y humanista que valora la dignidad de cada persona. Nos caracterizamos por: 

Una pedagogía centrada en el estudiante, abierta a la innovación y la evaluación continua. 

El uso responsable de las TIC, la gamificación y metodologías activas para potenciar aprendizajes significativos. 

Un compromiso con la equidad, buscando superar desigualdades de acceso digital y acompañando el crecimiento socioemocional de los estudiantes. 

Una comunidad educativa que fortalece el vínculo entre familia, escuela y sociedad, guiada siempre por la fe, la fraternidad y el servicio.    </p>
    
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
