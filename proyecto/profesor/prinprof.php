<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .header{
          grid-area: hea;
          display: flex;
          justify-content: space-between;
          flex-direction: row;
        }
       nav a, #esconder {
         text-decoration: none;
         border: none;
         border-radius: 5px;
         text-align: center;
         display: block;
         font-size: 10px;
         padding: 10px;
         width: 100%;
         box-sizing: border-box;
        }
        nav{
            grid-area: na;
            display: flex;
            flex-direction: column;
            background-color: rgb(35, 74, 165);
            gap: 20px;
            opacity: 80%;
        }
        #ini,#clas,#aj,#pen{
            height: 50px;
            color: black;
            padding: 20px;
            background-color: white;       
        } 
        main{
           grid-area: mai;
           display: flex;
           justify-content: space-between;
           flex-direction: row;
        }
        section{
           grid-area: sec ;
           display: flex;
           justify-content: space-between;
           flex-direction: row;
        }
        aside{
          justify-content: space-between;
          grid-area: asi ;
          display: flex;
          flex-direction: row;
        }   
        .header,main,section,aside{
            width: 95%;
            gap: 20px;
        }
        header{
            grid-area: be;
            display: flex;
            justify-content: space-between;
        }
        body{

        background-color: rgb(231, 231, 231);
           display: grid;
           grid-template-columns: 15% 85%;
           grid-template-areas: 
           "be be "
           "na hea"
           "na mai"
           "na sec"
           "na asi";
           gap: 10px;
           background-image: url("https://www.lasallecbb.edu.bo/images/Imagenes/LogoPagSF.png");
          background-repeat: repeat;
          background-size: 50% 50%; 
          background-attachment: fixed;
          position: relative;
        }
        body::before {
         content: "";
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background-color: rgba(255, 255, 255, 0.7); 
         z-index: -1;
        }
   @media (max-width: 1024px) {
    body {
        grid-template-columns: 100%;
        grid-template-rows: auto auto auto auto auto;
        grid-template-areas:
            "na"
            "hea"
            "mai"
            "sec"
            "asi";
        gap: 10px;
    }

    nav {
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 10px;
        padding: 10px;
    }

    nav a, #esconder {
        width: 45%;
        text-align: center;
        padding: 10px;
        font-size: 16px;
    }

    header, main, section, aside {
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }

    div {
        width: 90%;
        padding: 20px;
        margin: auto;
    }

    button {
        width: 100%;
        font-size: 18px;
        padding: 15px;
    }
}
@media (max-width: 600px) {
    body {
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding: 10px;
    }

    nav {
        flex-direction: column;
        align-items: stretch;
    }

    nav a, #esconder {
        width: 100%;
        font-size: 16px;
        padding: 12px;
        margin-bottom: 5px;
    }

    header, main, section, aside {
        flex-direction: column;
        gap: 10px;
        align-items: center;
    }

    div {
        width: 100%;
        padding: 15px;
        margin: auto;
    }
    button {
        width: 100%;
        font-size: 16px;
        padding: 12px;
    }
}
        div{
            background-color:rgb(255, 255, 255 ) ;
            width: 100%;
            text-align: center;
            border-radius: 5%;
            border: 5px solid ;
            border-color: rgb(150, 6, 6);
            border-style: double;
            padding: 70px;
            box-sizing: border-box;
            margin: auto;
            opacity: 82%;
        }
        button{
            background-color: rgb(155, 25, 25);
            height:70px;
            width: 100%;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            max-width: 400px;
            font-size: 18px;
            padding: 15px;
            box-sizing: border-box;
        }
        #esconder{
           padding: 15px;
           width: 100%;
           max-width: 300px;
           font-size: 16px;
        }
        button:hover{
            background-color: rgb(67, 4, 4);
            transform: scale(1.1);
        }
        #menu{
            width: 60px;
            height: 60px;
            object-fit: cover;
             background: rgb(175, 20, 20);
             box-shadow: 0 0 25px rgb(177, 10, 10);
             border: none;
             font-size: 17px;
             color: #fff;
             border-radius: 7px;
             letter-spacing: 4px;
             font-weight: 700;
             text-transform: uppercase;
             transition: 0.5s;
        }
        #menu:hover{
            box-shadow: 0 0 5px rgb(255, 255, 255),
              0 0 25px rgb(255, 255, 255),
              0 0 50px rgb(19, 16, 197),
              0 0 100px rgb(11, 28, 182);
        }

        #op {
            top: 0px;
            position: absolute;
            left: 1700px; 
            background-color: rgb(92, 112, 221);
            display: none;
            flex-direction: column;
            padding: 6px 12px;
            border-radius: 6px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            min-width: 100px;
        }
        #op a {
            color: white;
            text-decoration: none;
            padding: 4px 0;
            font-weight: normal;
            font-size: 12px;
            transition: background 0.2s;
            text-align: left;
        }
        #op a:hover {
            background-color: rgba(255, 255, 255, 0.347);
            border-radius: 3px;
        }

    </style>
</head>
<body>
    <header>
<h1 style="color: rgb(4, 4, 154);font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">BIENVENIDO PROFESOR!!</h1>
    <button id="menu">+</button>
    <nav id="op">
      <a href="../clases/unirse.php">Unirse</a>
      <a href="../clases/crear.php">Crear</a>
    </nav>

    </header>
     
<section class="header">
    <div id="uno"><button>PRIMERO PRIMARIA</button></div>
<div id="dos"><button>SEGUNDO PRIMARIA</button></div>
<div id="tres"><button>TERCERO PRIMARIA</button></div>
</section>
    <nav>
        <button id="esconder">☰ Menú</button>
        <a id="ini" href="">INICIO</a>
        <a id="clas" href="">CLASES QUE DICTAS</a>
        <a id="aj" href="">AJUSTES</a>
        <a id="pen" href="">PENDIENTES DE LOS ESTUDIANTES</a>

    </nav>

    <main>
        <div id="cua"><button>CUARTO PRIMARIA</button></div>
        <div id="cin"><button>QUINTO PRIMARIA</button></div>
        <div id="sei"><button>SEXTO PRIMARIA</button></div>
    </main>

    <section>
        <div id="sie"><button>PRIMERO SECUNDARIA</button></div>
        <div id="och"><button>SEGUNDO SECUNDARIA</button></div>
        <div id="nue"><button>TERCERO SECUNDARIA</button></div>
    </section>
    
    <aside>
        <div id="die"><button>CUARTO SECUNDARIA</button></div>
        <div id="onc"><button>QUINTO SECUNDARIA</button></div>
        <div id="doc"><button>SEXTO SECUNDARIA</button></div>
       
    </aside>
    <script>
    $("#esconder").click(function(){
        $("#ini, #clas, #aj, #pen").toggle();
    });
$("#menu").click(function(){
  $("#op").toggle();
});
    </script>
</body>
</html>