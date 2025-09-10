<?php
$servername="localhost";
    $username="root";
    $contraseña="";
    $dbname="proyecto";

    $conn= new mysqli($servername, $username, $contraseña, $dbname);

    if($conn->connect_error) {
         echo"<script>alert('Ocurrio un error :( vuelve a intentarlo')</script>";
    }
    

session_start();
$ci=$_SESSION['ci'];
$rol=$_SESSION['rol'];
 if (!isset($_SESSION['ci']) || empty($_SESSION['ci'])) {
    header("Location:../diseño/principal.php");
    exit();
 }
if ($_SESSION['rol'] !== 'estudiante') {
    header("Location:../diseño/principal.php");
    exit();
 }
 include("../administrador/validarbloqueo.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido Estudiante</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: auto 1fr;
            grid-template-areas:
                "header"
                "content";
            background-image: url("../diseño/logo.png");
            background-repeat: repeat;
            background-size: 50% 50%;
            background-attachment: fixed;
            position: relative;
            margin: 0;
            font-family: Arial, sans-serif;
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

        header {
            grid-area: header;
            text-align: center;
            background-color: #1b3d74;
            color: white;
            padding: 40px 20px;
            font-size: 40px;
            font-weight: bold;
            letter-spacing: 3px;
            text-shadow: 2px 2px 5px rgba(0, 0, 50, 0.5);
            opacity: 50%;
        }

        nav {
            grid-area: content;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 40px;
        }

        .materias {
            background-color: #e3ecfa;
            text-align: center;
            border-radius: 10px;
            border: 4px double #1d4e89;
            padding: 20px;
            opacity: 0.95;
            transition: transform 0.3s ease;
            width: 400px;
            height: 250px;
        }

        .materias:hover {
            transform: scale(1.05);
            background-color: #d0e2f5;
        }

        button {
            background-color: #1d4e89;
            color: white;
            font-size: 22px;
            font-family: 'Trebuchet MS', sans-serif;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            width: 100%;
            height: auto;
            padding: 20px;
            border: none;
            border-radius: 8px;
        }

        button:hover {
            background-color: #153a68;
            transform: scale(1.05);
        }

        button a {
            color: white;
            text-decoration: none;
            display: block;
            width: 100%;
            height: 100%;
        }

        @media (max-width: 1024px) {
            nav {
                grid-template-columns: repeat(2, 1fr);
                padding: 20px;
            }

            header {
                font-size: 30px;
                padding: 30px 10px;
            }
        }

        @media (max-width: 600px) {
            nav {
                grid-template-columns: 1fr;
                padding: 10px;
            }

            header {
                font-size: 24px;
                padding: 20px 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        BIENVENIDO ESTUDIANTE
    </header>

    <nav>
        <div class="materias"><button><a href="../diseño/tablon.php">MATEMÁTICAS</a></button></div>
        <div class="materias"><button><a href="formeditest.php">EDITAR</a></button></div>
        <div class="materias"><button><a href="../usuarios/infouser.php">MOSTRAR INFORMACION</a></button></div>
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
    
</body>
</html>