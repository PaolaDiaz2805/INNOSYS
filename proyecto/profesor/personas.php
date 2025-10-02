<?php
$servername="localhost";
$username="root";
$contraseña="";
$dbname="proyecto";

$conn= new mysqli($servername, $username, $contraseña, $dbname);

if($conn->connect_error) {
    echo "Ocurrio un error :( vuelve a intentarlo";
}
 session_start();

if (!isset($_SESSION['ci']) || empty($_SESSION['ci'])) {
    header("Location:../diseño/principal.php");
    exit();
}
$ci = $_SESSION['ci'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f3f6fa;
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }
        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border-radius: 12px;
            overflow: hidden;
        }
        th {
            background: #2c3e50;
            color: #fff;
            padding: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background: #f1f1f1;
            transition: 0.3s;
        }
        a {
            text-decoration: none;
            padding: 6px 12px;
            margin: 2px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: bold;
            display: inline-block;
        }
        a[href*="hacerprofesor"], a[href*="hacerestudiante"] {
            background: #3498db;
            color: white;
        }
        a[href*="formedit"] {
            background: #f39c12;
            color: white;
        }
        a[href*="bloquear"] {
            background: #e74c3c;
            color: white;
        }
        a[href*="desbloquear"] {
            background: #27ae60;
            color: white;
        }
        a:hover {
            opacity: 0.85;
        }
    </style>
</head>
<body>
    <h2>Personas</h2>
    <table>
        <tr>
            <th>id de la la clase</th>
            <th>Nombre de la clase</th>
            <th>Ci estudiante</th>
            <th>Nombre </th>
            <th>Apellido</th>
            <th>Curso</th>
        </tr>
        <?php
        $sql="SELECT idclase, nombre, curso, usuario_id FROM clase WHERE usuario_id='$ci'";
        $resultado = mysqli_query($conn,$sql);
         while($row = $resultado->fetch_assoc()){
            $idclase=$row['idclase'];
    $sql2 = "SELECT * FROM clase_estudiante WHERE id_clase ='$idclase'";
    $resultado2=$conn->query($sql2);
if($row2 = $resultado2->fetch_assoc()){
    $id_estudiante=$row2['id_estudiante'];
    $sql3="SELECT * FROM informacion WHERE ci='$id_estudiante'";
     $resultado3=$conn->query($sql3);
    if($row3 = $resultado3->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row ['idclase'];?></td>
            <td><?php echo $row ['nombre'];?></td>
            <td><?php echo $row3 ['ci'];?></td>
            <td><?php echo $row3 ['nombre'];?></td>
            <td><?php echo $row3 ['apellido'];?></td>
            <td><?php echo $row3 ['curso'];?></td>
        </tr>
        <?php } }}?>
    </table>
</body>
</html>
