<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
session_start();
if (!isset($_SESSION['ci'])) {
    header("Location: ../usuarios/logueo.php");
    exit;
}

$ci= $_SESSION['ci'];

$sql = "SELECT * FROM clase_estudiante WHERE id_estudiante='$ci'";
$resultado = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis clases</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7fa;
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
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border-radius: 12px;
            overflow: hidden;
        }
        th {
            background: #2c3e50;
            color: white;
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
        .btn {
            background: #3498db;
            color: white;
            border: none;
            padding: 8px 14px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
        }
        .btn:hover {
            background: #2980b9;
        }
        .boton {
  position: fixed;
  top: 20px;
  left: 20px;
  background-color: #264886e0;
  color: white;
  font-size: 22px;
  font-weight: bold;
  border: none;
  border-radius: 50%;
  width: 48px;
  height: 48px;
  text-align: center;
  line-height: 48px;
  text-decoration: none;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  transition: background-color 0.3s ease;
  z-index: 1000;
}

.boton:hover {
  background-color: #203a6be0;
   transform: scale(1.02);
}

    </style>
</head>
<body>
<aside>
    <a href="prinest.php" class="boton">←</a>
    <h2>📚 MIS CLASES</h2>
    <table>
        <tr>
            <th>Id clase</th>
            <th>Nombre de la Clase</th>
            <th>Código</th>
            <th>link</th>
        </tr>
        <?php
        while($row = $resultado->fetch_assoc()){
    $idclase=$row['id_clase'];
    $sql2 = "SELECT * FROM clase WHERE idclase ='$idclase'";
    $resultado2=$conn->query($sql2);
if($row2 = $resultado2->fetch_assoc()){
    ?>
            <tr>
                <td><?php echo $row2['idclase']?></td>
                <td><?php echo $row2['nombre'] ?></td>
                <td><?php echo $row2['codigo']?></td>
                <td>
                    <a class="btn" href="../diseño/tablon.php?id=<?php echo $row2['idclase'];?>">Ingresar</a>
                </td> 
            </tr>
        <?php }}?>
    </table></aside>
</body>
</html>
