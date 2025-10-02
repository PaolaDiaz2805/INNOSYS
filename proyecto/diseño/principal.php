<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>La Salle de Convenio</title>
  
  <style>
  
    @keyframes fadeIn {
      0% {opacity: 0;}
      100% {opacity: 1;}
    }

    @keyframes slideDown {
      0% {opacity: 0; transform: translateY(-50px);}
      100% {opacity: 1; transform: translateY(0);}
    }

    @keyframes glow {
      0% {text-shadow: 0 0 5px rgb(24, 22, 132);}
      100% {text-shadow: 0 0 20px #80afdb;}
    }

    
    body {
  display: grid;
  grid-template-columns: 50% 50%;
  grid-template-rows: 100px 40px 600px 100px 400px 70px 250px 350px 450px 100px;
  grid-template-areas:
    "uno uno"
    "dos dos"
    "tres tres"
    "cuatro cuatro"
    "cinco siete"
    "seis seis"
    "ocho ocho"
    "comentarios comentarios"
    "nueve nueve"
    "diez diez";
  margin: 0;
  font-family: Arial, sans-serif;
  animation: fadeIn 1s ease-in;
  gap:10px;

    }

  .ea {
  
      grid-area: uno;

    }

    header img {
      height: 80px;
    }

    #pp {
      font-family: 'Anton', sans-serif;
      font-size: 50px;
      color:#062870 ;
      text-transform: uppercase;
      text-align: center;
      margin: 0;
      animation: glow 1.5s infinite alternate;
    }
      .go {
    
      grid-area: dos;
     
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
    #video{
      grid-area:tres;
      background-color: white;
    }
    #video video {
     
   width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
    }

.cajas {
  grid-area: cuatro;
  background-color: #f5f5f5;
  display: flex;
  text-align: center;
  gap: 5px;
  width: 100%;       
  padding: 0 10px;   
  box-sizing: border-box;
}

.a, .r {
  flex-grow: 1;
  background-color: #002a61;
  border-radius: 15px;
  transition: all 0.4s ease;
  padding: 15px 0;
  color: white;
  font-weight: bold;
  cursor: pointer;

  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}
    .a {
      background-color:  #002a61;
    }
 .a:hover, .r:hover {
      background-color: #004ea6;
      transform: scale(1.1);
    }
    .r {
      background-color: #002a61;
    }

    .a:hover, .r:hover {
      transform: scale(1.1);
    }

    .text1 {
      width: 100%;
      height: 400px;
      grid-area: cinco;
      background-color: #609ddde3;
      font-size: 18px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
        box-sizing: border-box; 
    }

    .text2 {
      grid-area: seis;
      background-color: rgba(108, 146, 204, 1);
      text-align: center;
      font-size: 30px;
      padding: 2%;
  
    }

    .text3 {
      display: flex;
      flex-direction: row;
      grid-area: siete;
      background-color: white;
      text-align: center;
      justify-content: center;
      font-size: 18px;
      padding: 20px;
      gap: 10px;
      align-items: center;
    }

    .text3 img {
      border: 1px solid #ffffffff;
      max-width: 40%;
      object-fit: cover;
      border-radius: 10px;
      transition: transform 0.3s ease;
    }

    .text3 img:hover {
      transform: scale(1.08);
    }

    .cajas2 {
      grid-area: ocho;
      display: flex;
      justify-content: space-between;
      text-align: center;
    }

    .l, .m {
      width: 35%;
      min-height: 100px;
      
    }

  

    article {
      grid-area: nueve;
      background-color: #609ddde3;
      padding: 20px;
      display: flex;
      justify-content: space-around;
      align-items: flex-start;
      gap: 30px;
      font-size: 16px;
      color: rgba(11, 9, 41, 1);
    }

    article nav {
      flex: 1;
    }

    
    article aside {
      flex: 1;
    }

    article h3 {
      margin-bottom: 5px;
      color: #002a61;
      border-bottom: 1px solid #444;
    }

   
    article p {
      margin: 4px 0;
    }

    a {
      color:  rgba(3, 22, 87, 1);
      font-family: Arial, sans-serif;

    }
    .do{
      grid-area: diez;

    }
    #comentarios {
  grid-area: comentarios;
  background-color: #486ab4ff;
  padding:20px;
  text-align: center;
  font-family: Arial, sans-serif;

}

#comentarios h2 {
  color: rgba(3, 22, 87, 1);
  margin-bottom: 20px;
  font-size: 32px;
}

#comentarios textarea {
  width: 80%;
  height: 120px;
  padding: 15px;
  font-size: 16px;
  border-radius: 10px;
  border: 1px solid #194094ff;
  resize: vertical;
  outline: none;
  transition: border 0.3s;
   
}

#comentarios textarea:focus {
  border-color: rgba(131, 18, 18, 1);
}

#comentarios button {
  margin-top: 20px;
  padding: 12px 30px;
  background-color:rgba(37, 33, 163, 1) ;
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s;
}

#comentarios button:hover {
  background-color: rgba(48, 45, 116, 1);
}

.carousel-container {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.carousel-slides {
  display: flex;
  transition: transform 0.5s ease-in-out;
}

.carousel-slides .l {
  flex: 0 0 auto;
  margin-right: 5px; /* espacio entre imágenes */
}

.carousel-slides .l img {
  width: 550px;
  border-radius: 10px;
  object-fit: cover;
}

.prev, .next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(0,0,0,0.5);
  color: white;
  border: none;
  padding: 10px;
  cursor: pointer;
  border-radius: 50%;
  z-index: 10;
}

.prev { left: 10px; }
.next { right: 10px; }

@media (max-width: 768px) {
  .carousel-slides .l img {
    width: 100px;
  }
}

@media (max-width: 768px){
 body {
  display: grid;
  grid-template-columns: 100%;
  grid-template-rows: 120px 60px 600px 100px 400px 300px 70px 200px 350px 350px 100px;
  grid-template-areas:
    "uno "
    "dos "
    "tres"
    "cuatro"
    "cinco"
    "siete"
    "seis"
    "ocho"
    "comentarios"
    "nueve"
    "diez";
    }
}
  </style>
</head>
<body class="body">
  <header class="ea">
    <?php 
  include("cabeza.php");?>
    
  </header>
 
<main class="go">
  <?php 
  include("panza.php");?>
</main>


 <nav id="video">
  <video width="100%" height="100%" autoplay loop muted >
    <source src="uels.mp4" type="video/mp4">
    Tu navegador no soporta la reproducción de video.
  </video>
</nav>

<nav class="cajas">
  <div class="a" style="text-align:center;">
    Estudiantes
    <span class="count-digit" data-count="500">
       ㅤ0<br></span>
  </div>
  <div class="r" style="text-align:center;">
    Profesores<br>
    <span class="count-digit" data-count="37">0</span>
  </div>
  <div class="a" style="text-align:center;">
    Aulas<br>
    <span class="count-digit" data-count="25">0</span>
  </div>
  <div class="r" style="text-align:center;">
    Administrativos<br>
    <span class="count-digit" data-count="4">0</span>
  </div>
</nav>


  <aside class="text1">
  <p>
Nos alegra recibirlos en nuestra comunidad educativa, un espacio donde la fe, el conocimiento y los valores se unen para formar personas íntegras, solidarias y comprometidas con la sociedad.
Como colegio católico, inspiramos nuestro caminar los principios Cristianos, promoviendo una educación que fortalezca la fe, el amor al prójimo y el respeto por la dignidad de cada persona.
En La Salle  creemos que cada estudiante es un don de Dios, y nuestra misión es acompañarlos en su desarrollo académico, espiritual y humano, cultivando talentos, fomentando la responsabilidad y guiando hacia una vida con propósito.
¡Gracias por visitarnos!
    </p>
  </aside>
  
  <div class="text2"><a href="../clases/intro.php">Estudiantes, Profesor o Administrador</a> </div>

  <aside class="text3">
    Últimas noticias
    <img src="seis.jpg" alt="Noticia 1">
    <img src="tres.jpg" alt="Noticia 2">
  </aside>

  <nav class="cajas2">
    <div class="carousel-container">
      <div class="carousel-slides">
<?php
        for($contador=1; $contador<=48; $contador++){
          $url="../imagenes/img (".$contador.").jpg";
          $alt="Imagen ".$contador;
?>  
          <div class="l"><img src="<?= $url?>" alt="<?=$alt?>"> </div>
 <?php
        }
 ?>
    </div>
    <button class="prev">&#10094;</button>
    <button class="next">&#10095;</button>
  </div>
  </nav>

  <article>
    <nav>
      <h3>Mapa interactivo</h3>
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.1520097114476!2d-66.17119342463457!3d-17.40449116465946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e37392613ab3d1%3A0xc9525cbc4d329bf1!2sUnidad%20Educativa%20La%20Salle%20CONVENIO!5e0!3m2!1ses-419!2sbo!4v1750732544446!5m2!1ses-419!2sbo" 
        width="100%" height="370" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy">
      </iframe>
    </nav>

    <aside>
      <h3>Dirección</h3>
      <p>Entre Comuneros y Mama Ocllo</p>
      <p>Cochabamba - Bolivia</p>

      <h3>Teléfonos</h3>
      <p>48435746</p>

      <h3>Informes</h3>
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
    </aside>
  </article>
 
  <section id="comentarios">
  <h2>Deja tu comentario</h2>
  <form action="comentario.php" method="post" novalidate>
    <textarea name="com" placeholder="Déjanos tu comentario aqui!!" required></textarea>
    <br>
    <button type="submit">Enviar</button>
  </form>
</section>
  <footer class="do"> 
    <?php 
    include("pie.php");
    ?>
  </footer>
</body>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".count-digit");

    counters.forEach(counter => {
      const target = +counter.getAttribute("data-count");
      let count = 0;
      const duration = 2000; 
      const stepTime = 20;  
      const steps = duration / stepTime;
      const increment = target / steps;

      const update = () => {
        count += increment;
        if(count < target){
          counter.textContent = Math.floor(count);
          setTimeout(update, stepTime);
        } else {
          counter.textContent = target;
        }
      }

      update();
    });
  });
</script>

<script>
const slidesContainer = document.querySelector('.carousel-slides');
const slides = document.querySelectorAll('.carousel-slides .l');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');

let currentIndex = 0;


const slideStyle = getComputedStyle(slides[0]);
const slideWidth = slides[0].offsetWidth + parseInt(slideStyle.marginRight);

const visibleSlides = Math.floor(document.querySelector('.carousel-container').offsetWidth / slideWidth);


function updateCarousel(index) {
  if(index < 0) currentIndex = slides.length - visibleSlides;
  else if(index > slides.length - visibleSlides) currentIndex = 0;
  else currentIndex = index;
  
  slidesContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}


prevBtn.addEventListener('click', () => updateCarousel(currentIndex - 1));
nextBtn.addEventListener('click', () => updateCarousel(currentIndex + 1));


setInterval(() => updateCarousel(currentIndex + 1), 1000);


window.addEventListener('resize', () => {
  updateCarousel(currentIndex);
});
</script>

</html>
