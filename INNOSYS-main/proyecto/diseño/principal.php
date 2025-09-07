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
  grid-template-rows: 100px 40px 600px 100px 400px 70px 250px 350px 350px 100px;
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
    #video img {
     
      height: 100%;
      width: 100%;
      object-fit: cover;
      animation: fadeIn 2s ease;
    }

    .cajas {
      grid-area: cuatro;
      background-color: white;
      display: flex;
      justify-content: space-between;
      text-align: center;
      font-size: 15px;
    }

    .a, .r {
      width: 15%;
      padding: 30px;
      color: white;
      font-weight: bold;
      transition: transform 0.3s ease;
    }

    .a {
      background-color: rgb(31, 20, 112);
    }

    .r {
      background-color: rgba(27, 12, 101, 0.937);
    }

    .a:hover, .r:hover {
      transform: scale(1.1);
    }

    .text1 {
      width: 100%;
      height: 400px;
      grid-area: cinco;
      background-color: rgb(199, 90, 90);
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
      background-color: rgb(242, 162, 162);
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
      border: 1px solid #999;
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

    .l {
      background-color: rgb(9, 14, 91);
    }

    .m {
      background-color: rgb(20, 17, 95);
    }

    article {
      grid-area: nueve;
      background-color: bisque;
      padding: 20px;
      display: flex;
      justify-content: space-around;
      align-items: flex-start;
      gap: 30px;
      font-size: 16px;
      color: rgb(11, 7, 66);
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
      color: white;
    }
    .do{
      grid-area: diez;

    }
    #comentarios {
  grid-area: comentarios;
  background-color:white;
  padding:20px;
  text-align: center;
  font-family: Arial, sans-serif;

}

#comentarios h2 {
  color: rgba(255, 255, 255, 1);
  margin-bottom: 20px;
  font-size: 32px;
}

#comentarios textarea {
  width: 80%;
  height: 120px;
  padding: 15px;
  font-size: 16px;
  border-radius: 10px;
  border: 1px solid #ccc;
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
    <img src="dos.jpg" alt="Banner">
  </nav>

  <nav class="cajas">
    <div class="a">Estudiantes</div>
    <div class="r">Profesores</div>
    <div class="a">Aulas</div>
    <div class="r">Administrativos</div>
  </nav>

  <aside class="text1">
  <p>
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
  </aside>
  
  <div class="text2"><a href="../clases/intro.php">Estudiantes o profesor </a> </div>

  <aside class="text3">
    Últimas noticias
    <img src="seis.jpg" alt="Noticia 1">
    <img src="tres.jpg" alt="Noticia 2">
  </aside>

  <nav class="cajas2">
    <div class="l"></div>
    <div class="m"></div>
    <div class="l"></div>
    <div class="m"></div>
    <div class="l"></div>
    <div class="m"></div>
  </nav>

  <article>
    <nav>
      <h3>Mapa interactivo</h3>
      <iframe 
        src="https://www.google.com/maps/embed?pb=..."
        width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy">
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
      <p>Lunes a Viernes<br>7:00am</p>
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
</html>


