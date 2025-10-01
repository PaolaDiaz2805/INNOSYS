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
    <h2>Cuentas de Usuarios</h2>
    <table>
        <tr>
            <th>C.I</th>
            <th>Contraseña</th>
            <th>Rol</th>
            <th>Bloqueado</th>
            <th>Acciones</th>
        </tr>
        <?php
        $sql="SELECT * FROM usuario ORDER BY id DESC";
        $resultado = mysqli_query($conn,$sql);

        while ($row = mysqli_fetch_assoc($resultado)){
        ?>
        <tr>
            <td><?php echo $row ['id'];?></td>
            <td><?php echo $row ['contraseña'];?></td>
            <td><?php echo ucfirst($row ['rol']);?></td>
            <td><?php echo $row ['bloqueado'] ? "Sí" : "No";?></td>
            <td>
                <?php if($row['rol']=="estudiante"){ ?>
                    <a href="hacerprofesor.php?ci=<?php echo $row['id'];?>">Hacer Profesor</a>
                    <a href='../estudiante/formeditest.php?ci=<?php echo $row['id'];?>'>Editar Estudiante</a>
                <?php } if($row['rol']=="profesor"){ ?> 
                    <a href="hacerestudiante.php?ci=<?php echo $row['id'];?>">Hacer Estudiante</a>
                    <a href='../profesor/formeditprof.php?ci=<?php echo $row['id'];?>'>Editar Profesor</a>
                <?php } if ($row['rol']=="administrador"){?>
                    <a href="formeditadmin.php?ci=<?php echo $row['id'];?>">Editar Admin</a>
                <?php } ?>

                <?php if($row['bloqueado']==1){ ?>
                    <a href="desbloquear.php?ci=<?php echo $row['id'];?>">Desbloquear</a> 
                <?php }else{ ?> 
                    <a href="bloquear.php?ci=<?php echo $row['id'];?>">Bloquear</a>
                <?php }?>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
