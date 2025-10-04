<?php
$servername="localhost";
$username="root";
$contraseña="";
$dbname="proyecto";

$conn= new mysqli($servername, $username, $contraseña, $dbname);

if($conn->connect_error) {
    echo "Ocurrio un error :( vuelve a intentarlo";
}
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
    <a href="prinadmin.php" class="boton">←</a>
    <h2>Clases</h2>
    <table>
        <tr> 
            <th>Id clase</th>
            <th>Nombre</th>
            <th>Codigo</th>
            <th>Curso</th>
            <th>Usuario responsable</th>
           
        </tr>
        <?php
        $sql="SELECT * FROM clase ORDER BY idclase ";
        $resultado = mysqli_query($conn,$sql);

        while ($row = mysqli_fetch_assoc($resultado)){
        ?>
        <tr>
            <td><?php echo $row ['idclase'];?></td>
            <td><?php echo $row ['nombre'];?></td>
            <td><?php echo ucfirst($row ['codigo']);?></td>
            <td><?php echo $row ['curso'] ;?></td>
            <td><?php echo $row ['usuario_id'] ;?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
