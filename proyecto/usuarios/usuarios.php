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
        <table>
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
                            <?php }?>
                                  
                          
                            <a href="../administrador/formeditadmin.php?ci=<?php echo $row['id'];?>">Editar datos a administrador</a>
                    </td>
            </tr>
            <?
         }
    

   /* if($resultado->num_rows>0){
        if($resultado2->num_rows>0){
        while($fila=$resultado->fetch_assoc()){
            echo $fila['contraseña']."<br>".$fila['rol'];
            while($fila2=$resultado2->fetch_assoc())
        echo"<br>". $fila2['nombre']."<br>".$fila2['apellido']."<br>".$fila2['ci']."<br>".$fila2['curso']."<br>".$fila2['direccion']."<br>".$fila2['fechadenacimiento']."<br>".$fila2['rude']."<br>".$fila2['telefono'];
        echo "<a href='infouser.php?ci=$ci'><button>MOSTRAR</button></a>";
    }}
}*/
            ?>
        </table>
    </body>
    </html>