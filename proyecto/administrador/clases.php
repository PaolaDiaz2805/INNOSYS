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
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>CLASES:</h2>
        <table border="1">
            <tr><th>ID clase</th><th>Nombre de la clase</th><th>Codigo</th><th>Curso</th><th> ID Usuario</th></tr>
            <?php
              
    $sql="SELECT * FROM clase ORDER BY idclase DESC";
    $resultado = mysqli_query($conn,$sql);
   
    while ($row = mysqli_fetch_assoc($resultado)){
            ?>
            <tr>
                <td><?php echo $row ['idclase'];?></td>
                <td><?php echo $row ['nombre'];?></td>
                <td><?php echo $row ['codigo'];?></td>
                <td><?php echo $row ['curso'];?></td>
                <td><?php echo $row ['usuario_id'];?></td>
            </tr>
            <?php
         }
    ?>


        </table>
    </body>
    </html>