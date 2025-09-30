<?php 
session_start();
$servername = "localhost";
$username = "root";
$contraseña = "";
$dbname = "proyecto";

$conn = new mysqli($servername, $username, $contraseña, $dbname);

if($conn->connect_error) {
    echo "<script>alert('Ocurrió un error :( vuelve a intentarlo')</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Clases</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Oswald:wght@400;700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    h1 {
      font-family: 'Oswald', sans-serif;
      font-weight: 700;
      font-size: 2em;
      color: #062870;
      text-transform: uppercase;
      margin: 0;
    }

    body {
      margin: 0;
      background-color: #e7e7e7;
      display: grid;
      grid-template-columns: 250px 1fr;
      grid-template-rows: 150px auto;
      grid-template-areas:
          "cabeza cabeza"
          "menu contenido";
      gap: 10px;
      min-height: 100vh;

      background-image: url('logo.png');
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

    header {
      grid-area: cabeza;
      width: 100%;
    }

    nav.menu {
      grid-area: menu;
      background-color: transparent;
      z-index: 50;
    }

    .contenido {
      grid-area: contenido;
      padding: 20px;
      margin-left: 20px;
    }

    .cajas {
      background-color: rgba(255,255,255,0.9);
      padding: 20px;
      border-radius: 10px;
      border: 3px double rgba(6, 32, 150, 1);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .cajas p {
      font-size: 1.1em;
      color: #333;
      margin-bottom: 20px;
    }

    button {
      background-color: #005187;
      height: 60px;
      width: 100%;
      max-width: 300px;
      font-family: 'Trebuchet MS', sans-serif;
      font-size: 18px;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    button:hover {
      background-color: #004170;
      transform: scale(1.05);
      box-shadow: 0 0 5px #fff,
                  0 0 25px #fff,
                  0 0 100px rgb(24, 22, 132);
    }
  </style>
</head>
<body>
<header>
    <?php include("cabeza.php"); ?>
</header>

<nav class="menu">
    <?php include("menu.php"); ?>
</nav>


<main class="contenido">
    <section class="cajas">
        <?php
        $ci = $_SESSION['ci'] ?? 0;

        
        $sql = "SELECT idclase, nombre, curso FROM clase WHERE usuario_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $ci);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            while($clase = $resultado->fetch_assoc()) {
                $nombre = htmlspecialchars($clase['nombre']);
                $curso = htmlspecialchars($clase['curso']);
                $idclase = $clase['idclase'];
        ?>
            <div class="clase-card">
                <h2><?= $nombre ?></h2>
                <p><strong>Curso:</strong> <?= $curso ?></p>
                <a href="../diseño/tablon.php?id=<?= $idclase ?>">Ingresar</a>
            </div>
        <?php
            }
        } else {
            echo "<p>No tienes clases registradas.</p>";
        }
        ?>
    </section>
</main>
</body>
</html>
