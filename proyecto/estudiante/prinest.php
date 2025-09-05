<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        main{
            
            background-color: rgb(43, 41, 173);
            grid-area: uno;          
            display: flex;
            align-content:flex-start;
            flex-direction: column;   
            opacity: 85%;       
        } 
        .menu{
            
            text-align:start; 
            background-color: rgb(54, 100, 153);
            padding-top: 20px;
            padding-bottom: 20px;
           font-size: 15px;
            border-top: 20px solid rgb(22, 36, 121);
            border-bottom: 20px solid rgb(19, 55, 110);
        }
        #uc {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
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
            text-decoration: none;     
            display: inline-flex;     
            justify-content: center;
            align-items: center;
        }

        #uc:hover {
           box-shadow: 0 0 5px rgb(255, 255, 255),
           0 0 25px rgb(255, 255, 255),
           0 0 50px rgb(19, 16, 197),
           0 0 100px rgb(11, 28, 182);
        }

        #uc:focus {
          outline: 2px solid white;
          outline-offset: 3px;
        }
        nav{
            grid-area: dos; 
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 5%;
        
    }
        .materias {
            background-color:rgb(255, 255, 255) ;
            height: 15%;
            text-align: center;
            border-radius: 5%;
            border: 5px solid ;
            width: 28%;
            padding: 15px;
            margin: 10px;
            min-width: 200px;
            opacity: 90%;
            border-color: red;
            border-style: double;
            

        }
        body{
            display: grid;
            grid-template-columns: 20% 80%;
            grid-template-rows:1500px ;
            grid-template-areas: 
            "uno dos";
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
         background-color: rgba(255, 255, 255, 0.6); 
         z-index: -1;
        }
       @media (max-width: 1024px) {
          body {
           display: flex;
           flex-direction: column;
    }

          nav {
           flex-direction: row;
           flex-wrap: wrap;
           justify-content: center;
           gap: 10px;
           padding: 10px;
    }

        .menu {
          width: 100%;
          text-align: center;
          padding: 15px 0;
          font-size: 18px;
    }

         main {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          gap: 20px;
          padding: 10px;
    }

        .materias {
          width: 80%;
         max-width: 300px;
         min-width: 200px;
         margin: 10px;
    }
 
     button {
         width: 100%;
         padding: 20px;
         font-size: 20px;
    }
}

@media (max-width: 600px) {
      .menu {
        font-size: 16px;
        padding: 10px;
    }

      button {
        font-size: 18px;
        padding: 15px;
    }

      .materias {
        width: 90%;
    }
}

        button{
            background-color: rgb(189, 22, 22); 
            font-size:25px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            height: auto;
            padding: 20px;
        }
        button:hover{
            background-color: rgb(114, 12, 12);
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <main>
        <div><button id="esconder">MENU</button></div>
        <div class="menu"><a href="">INICIO</a></div>
        <div class="menu"><a href="">TUS CLASES</a></div>
        <div class="menu"><a href="">TAREAS</a></div>
        <div class="menu"><a href="">AJUSTES</a></div>
        <a href="../clases/unirse.php" id="uc">+</a>
      
    </main>
    <nav>
        <div class="materias"><button><a href="../diseño/tablon.html">MATEMÁTICAS</a></button></div>
        <div class="materias"><button>ENGLISH</button></div>
        <div class="materias"><button>MÚSICA</button></div>
        <div class="materias"><button>LITERATURA</button></div>
        <div class="materias"><button>QUÍMICA</button></div>
        <div class="materias"><button>ARTES PLÁSTICAS</button></div>
        <div class="materias"><button>EDUCACIÓN FÍSICA</button></div>
        <div class="materias"><button>FÍSICA</button></div>
        <div class="materias"><button>COMPUTACIÓN</button></div>
        <div class="materias"><button>BIOLOGÍA</button></div>
        <div class="materias"><button>FILOSOFÍA</button></div>
        <div class="materias"><button>RELIGIÓN</button></div>
        <div class="materias"><button>CS. SOCIALES</button></div>
    </nav>
    <script>
    $("#esconder").click(function(){
        $(".menu").toggle();
    });

    </script>
</body>
</html>