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
        <h2>CUENTAS:</h2>
        <table border="1">
            <tr><th>C.I</th><th>Contraseña</th><th>Rol</th><th>Bloqueado</th><th>Acciones</th></tr>
            <?php
              
    $sql="SELECT * FROM usuario ORDER BY id DESC";
    $resultado = mysqli_query($conn,$sql);
   
    while ($row = mysqli_fetch_assoc($resultado)){
            ?>
            <tr>
                <td><?php echo $row ['id'];?></td>
                <td><?php echo $row ['contraseña'];?></td>
                <td><?php echo $row ['rol'];?></td>
                <td><?php echo $row ['bloqueado'];?></td>
                <td>
                       <?php if($row['rol']=="estudiante"){ ?>
                            <a href="hacerprofesor.php?ci=<?php echo $row['id'];?>">Hacer Profesor</a> 
                            <a href='../estudiante/formeditest.php?ci=<?php echo $row['id'];?>'>Ediar datos de estudiante </a>

                        <?php } if($row['rol']=="profesor"){ ?> 
                            <a href="hacerestudiante.php?ci=<?php echo $row['id'];?>">Hacer Estudiante</a>
                            <a href='../profesor/formeditprof.php?ci=<?php echo $row['id'];?>'>Ediar datos a profesor </a>
                        <?php } if ($row['rol']=="administrador"){?>
                            <a href="formeditadmin.php?ci=<?php echo $row['id'];?>">Editar datos a administrador</a>
                        <?php } ?>

                        <?php if($row['bloqueado']==1){ ?>
                            <a href="desbloquear.php?ci=<?php echo $row['id'];?>">Desbloquear</a> 

                        <?php }else{ ?> 
                            <a href="bloquear.php?ci=<?php echo $row['id'];?>">Bloquear</a>
                        <?php }?>
                        


                    </td>
            </tr>
            <?php
         }
    ?>


        </table>
    </body>
    </html>