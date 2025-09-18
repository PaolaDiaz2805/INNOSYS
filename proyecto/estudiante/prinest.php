<?php 
session_start();
$servername="localhost";
$username="root";
$contraseña="";
$dbname="proyecto";

$conn= new mysqli($servername, $username, $contraseña, $dbname);

if($conn->connect_error) {
    echo "<script>alert('Ocurrio un error :( vuelve a intentarlo')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Clases</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Sacramento&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
h2{
    font-family: 'oswald', sans-serif;
    font-weight: 700;
    font-size: 2em;
    color: #062870;
    text-transform: uppercase;
}
header{
    width:100%;
    grid-area: cabeza;
}
.menu{ 
    width:100%;
    grid-area: men;
}
.espacio{
    grid-area: esp;
}
.cajas{
    background-color: rgb(255, 255, 255);
    width: 90%;
    margin: auto;
    padding: 20px;
    box-sizing: border-box;
    border-radius: 10px;
    border: 3px double rgba(6, 32, 150, 1);
    opacity: 0.95;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    grid-area:cajitas;
}
.clases{
    background-color: #005187;
    height: 100px;
    width: 300px;
    font-family:'Trebuchet MS', Arial, sans-serif;
    text-align: center;
    cursor: pointer;
    font-size: 18px;
    padding: 15px;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    border-radius: 10px;
    
 
}

body{
    margin: 0;
    font-family: 'Montserrat', sans-serif;
    background-color: rgb(231, 231, 231);
    background-image: url('logo.png');
    background-repeat: repeat;
    background-size: 50% 50%;
    background-attachment: fixed;
    display: grid;
    grid-template-columns: 25% 75%;
    grid-template-rows: 150px 300px 700px;
    grid-template-areas:
        "cabeza cabeza"
        "men esp"
        "cajitas cajitas";
}
body::before {
    content: "";
    position: fixed;
    top:0; left:0;
    width:100%; height:100%;
    background-color: rgba(255,255,255,0.7);
    z-index: -1;
}


</style>
</head>
<body>
<header>
<?php include("cabeza.php"); ?>
</header>
<nav class="menu">
<?php include("menuest.php"); ?>
</nav>
<nav class="espacio"></nav>
<aside class="cajas">

<?php
$ci=$_SESSION['ci'];
$sql = "SELECT * FROM clase WHERE usuario_id=$ci";
$resultado = $conn->query($sql);  
if ($resultado->num_rows > 0) {
    while($clase = $resultado->fetch_assoc()){
        $nombre = $clase['nombre'];
        $idclase = $clase['idclase'];
?>
<section class="clases">
<a href="tablon.php?id=<?= $idclase ?>" style="color:white; text-decoration:none;">
<h2><?= $nombre ?></h2>
</a>
</section>
<?php
    }
}
?>
</aside>
<menu></menu>
</body>
</html>