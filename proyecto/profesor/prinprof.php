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

body {
    margin: 0;
    font-family: 'Montserrat', sans-serif;
    background-color: #e7e7e7;
    background-image: url('logo.png');
    background-repeat: repeat;
    background-size: 50% 50%;
    background-attachment: fixed;

    display: grid;
    grid-template-columns: 250px 1fr;
    grid-template-rows: 150px auto;
    grid-template-areas:
        "cabeza cabeza"
        "menu contenido";
    min-height: 100vh;
}

body::before {
    content: "";
    position: fixed;
    top:0; left:0;
    width:100%; height:100%;
    background-color: rgba(255,255,255,0.7);
    z-index: -1;
}

header {
    grid-area: cabeza;
    width: 100%;
}

.menu {
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
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 20px;
}

.clase-card {
    background: white;
    border: 2px solid #062870;
    border-radius: 10px;
    padding: 15px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    transition: transform 0.2s ease;
}

.clase-card:hover {
    transform: translateY(-5px);
}

.clase-card h2 {
    font-family: 'Oswald', sans-serif;
    font-size: 1.2em;
    color: #062870;
    margin-bottom: 10px;
}

.clase-card p {
    font-size: 0.9em;
    color: #555;
    margin-bottom: 15px;
}

.clase-card a {
    display: inline-block;
    background-color: #5c7fad;
    color: white;
    text-decoration: none;
    padding: 8px 12px;
    border-radius: 8px;
    font-size: 0.9em;
    transition: background 0.3s;
}

.clase-card a:hover {
    background-color: #34495e;
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
