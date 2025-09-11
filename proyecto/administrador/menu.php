<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
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
         box-shadow: 0 0 25px #062870;
        }
        nav{
            grid-area: na;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        #ini,#inf,#clas,#per,#cer{
            height: 50px;
            color: black;
            padding: 20px;
            background-color: #4d82bc;   
            font-size: 14px;    
        } 
        #op .uni {
            font-size: 22px;
            line-height: 1;  
            padding: 10px 0; 
            text-align: center;
        }
        #esconder{
           padding: 15px;
           width: 100%;
           max-width: 300px;
           font-size: 26px;
        }
        #esconder:hover{
            background-color:  #005187;
            transform: scale(1.1);
            box-shadow: 0 0 5px rgb(255, 255, 255),
              0 0 25px rgb(255, 255, 255),
              0 0 100px rgb(24, 22, 132);
        }
        #menu{
            width: 60px;
            height: 60px;
            object-fit: cover;
            background:  #005187;
            box-shadow: 0 0 25px #062870;
            border: none;
            font-size: 24px;
            color: #fff;
            border-radius: 7px;
            font-weight: 700;
            cursor: pointer;
            position:relative;
            text-transform: uppercase;
            transition: 0.5s;
        }
        #menu:hover{
            box-shadow: 0 0 5px rgb(255, 255, 255),
              0 0 25px rgb(255, 255, 255),
              0 0 50px rgb(24, 22, 132);
              0 0 100px rgb(24, 22, 132);
        }
        #op {
            top: 70px;
            position: absolute;
            right:0;
            background-color: rgb(92, 112, 221);
            display: none;
            flex-direction: column;
            padding: 6px 12px;
            border-radius: 6px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            min-width: 120px;
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

<button id="menu">+</button>
<nav id="op">
    <h1>BIENVENIDO ADMINIDTRAD@R!!</h1>
    <a class="uni" href="../clases/unirse.php">Unirse</a>
    <a class="uni" href="../clases/crear.php">Crear</a>
</nav>

<nav>
    <button id="esconder">☰ Menú</button>
    <a id="ini" href="">INICIO</a>
    <a id="inf" href="">INFORMACION</a>
    <a id="clas" href="">CLASES</a>
    <a id="per" href="">PERSONAS</a>
    <a id="cer" href="">CERRAR</a>
</nav>

<script>
    $("#esconder").click(function(){
        $("#ini, #inf, #clas, #per, #cer").toggle();
    });
    $("#menu").click(function(){
      $("#op").toggle();
    });
</script>