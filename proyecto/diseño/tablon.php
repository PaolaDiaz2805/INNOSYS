<?php
session_start();
if (!isset($_SESSION['ci'])) {
    header("Location: ../usuarios/logueo.php");
    exit;
}
$clase_id = isset($_GET['id']) ? $_GET['id'] : null; 
if ($clase_id == null) {
    echo "<script>alert('ID de clase no válido');</script>";
    exit;
}
if (!isset($_SESSION['ci']) || empty($_SESSION['ci'])) {
    header("Location:../diseño/principal.php");
    exit();
}
if(isset($_GET['rol']) && !empty($_GET['rol'])){
    $_SESSION['rol'] = $_GET['rol'];
}

$usuario_id = $_SESSION['ci'];  

$servername = "localhost";
$username = "root";
$contraseña = "";
$dbname = "proyecto";

$conn = new mysqli($servername, $username, $contraseña, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT c.idcomentarios, c.cuenta, c.fechaE, c.publicacion, u.id AS user_id, u.rol 
        FROM comentarios c
         JOIN clase_estudiante ce ON c.clase_idclase = ce.id_clase
        JOIN usuario u ON ce.id_estudiante = u.id
        WHERE c.clase_idclase = '$clase_id'
        ORDER BY c.fechaE DESC";  
$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $mensaje = $_POST['mensaje'];

    $insert_sql = "INSERT INTO comentarios (cuenta, fechaE, publicacion, clase_idclase, usuario_id) VALUES ('$nombre', NOW(), '$mensaje', '$clase_id', '$usuario_id')";

    if ($conn->query($insert_sql) === TRUE) {
        echo "<script>alert('Publicación creada con éxito'); window.location = 'tablon.php?id=$clase_id';</script>";
    } else {
        echo "<script>alert('Error al crear la publicación');</script>";
    }
}
$sql2= "SELECT * FROM clase WHERE idclase='$clase_id'";
 $resultado2=$conn->query($sql2);
 if($resultado2->num_rows>0){
   $fila= $resultado2->fetch_assoc();
   $nombre=$fila['nombre'];
   $curso=$fila['curso'];
    }

 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap" rel="stylesheet">
  <style>
    body {
         display: grid;
      grid-template-columns: 50% 50%;
      grid-template-rows: 100px 600px 100px;
      grid-template-areas:
        "in in"
        "ana tet"
        "ert ert";
      font-family: 'Inter', sans-serif;
      background-color: #f0f4f8;
      display: flex;
      min-height: 100vh;
      margin: 0;
      color: #222;

    }
    .nan{
      grid-area:ana;
    }

    .main {
      grid-area:in;
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    
    .header {
      background: linear-gradient(90deg, #0d47a1, #1565c0, #1e88e5);
      color: white;
      padding: 40px;
      text-align: center;
      box-shadow: 0 3px 10px rgba(0,0,0,0.25);
    }

    .header h1 {
      font-size: 32px;
      margin: 0;
      font-weight: 700;
      text-shadow: 1px 2px 5px rgba(0,0,0,0.4);
    }

    .content {
      grid-area:tet;
      padding: 30px 40px;
    }

  
    .card {
      background: linear-gradient(135deg, #ffffff, #f5f7fa);
      padding: 25px;
      margin-bottom: 25px;
      border-left: 6px solid #0d47a1;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.12);
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .card:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 16px rgba(0,0,0,0.18);
    }

    .card h3 {
      color: #0d47a1;
      font-size: 20px;
      margin-bottom: 12px;
    }

    .card p {
      font-size: 15px;
      color: #333;
      line-height: 1.5;
    }

   
    label {
      font-weight: 600;
      color: #0d47a1;
      display: block;
      margin-top: 10px;
    }

    input[type="text"],
    input[type="date"],
    textarea {
      width: 100%;
      padding: 12px;
      margin-top: 6px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 8px; 
      font-family: 'Inter', sans-serif;
      font-size: 14px;
      background: #fff;
      transition: border 0.3s, box-shadow 0.3s;
    }

    input:focus,
    textarea:focus {
      border-color: #0d47a1;
      box-shadow: 0 0 6px rgba(13,71,161,0.3);
      outline: none;
    }

    textarea {
      resize: vertical;
    }

    button {
      background: linear-gradient(90deg, #0d47a1, #1565c0);
      color: white;
      padding: 12px 24px;
      border: none;
      border-radius: 8px;
      font-weight: 600;
      cursor: pointer;
      font-size: 14px;
      transition: transform 0.2s, background 0.3s;
    }

    button:hover {
      background: linear-gradient(90deg, #1565c0, #1e88e5);
      transform: scale(1.05);
    }


    footer {
      grid-area:ert;
      text-align: center;
      padding: 20px;
      font-size: 13px;
      color: #555;
      background: #eaeaea;
      margin-top: auto;
    }
.tarea-card {
    background: white;
    border: 2px solid #062870;
    border-radius: 10px;
    padding: 15px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

  .tarea-card a {
    display: inline-block;
    background-color: #005187;
    color: white;
    text-decoration: none;
    padding: 8px 12px;
    border-radius: 8px;
    font-size: 0.9em;
    transition: background 0.3s;
}
    @media screen and (max-width: 768px) {
      body {
        flex-direction: column;
      }
      .main {
        padding-top: 10px;
      }
    }
  </style>
</head>
<body>
<nav class="nan">
  <?php
  if($_SESSION['rol']=="estudiante"){
                        include("../estudiante/menuest.php");
                    }
                    if($_SESSION['rol']=="profesor"){
                        include("../profesor/menu.php");
                    }
                    if($_SESSION['rol']=="administrador"){
                       include("../administrador/menu.php");
                    }
     
  
  ?>
</nav>

<div class="main">
  <div class="header">
    <?php echo"<h1>$nombre - $curso</h1>"?>
  </div>

  <article>
 
  </aside>

  <div class="content"> 
   
   <?php 
   $clase_id = mysqli_real_escape_string($conn, $clase_id); 
   $sql3="SELECT * FROM clase WHERE idclase='$clase_id'";
    $resultado = mysqli_query($conn,$sql3);
   
    if ($row = mysqli_fetch_assoc($resultado)){ 
    if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'profesor'){ 
 echo "<button onclick=\"window.location.href='../tarea/tarea.php?idclas={$row['idclase']}'\">Crear tarea</button>"; 
} 
 } ?>
    
    <div class="card">
      <h3>✏️ Nueva publicación</h3>
      <form action="publicacion.php" method="post">
      
      <label for="nom">Nombre:</label>
        <input type="text" id="nom" name="nombre" required>
   
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

        <button type="submit">Enviar</button>
      </form>
    </div>
  </div>
 <?php
$clase_id = $_GET['id'] ?? 0; 

$sql = "SELECT idtarea, titulo, nota FROM tarea WHERE clase_idclase = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $clase_id);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    while ($tarea = $resultado->fetch_assoc()) {
        $titulo = htmlspecialchars($tarea['titulo']);
        $nota = htmlspecialchars($tarea['nota']);
        $idtarea = $tarea['idtarea'];
?>
        <div class="tarea-card">
            <h3><?= $titulo ?></h3>
            <p><strong>Nota:</strong> <?= $nota ?></p>
            <a href="detalle_tarea.php?id=<?= $idtarea ?>">Ver detalle</a>
        </div><br>
<?php
    }
} else {
    echo "<p>No hay tareas subidas en esta clase.</p>";
}
?>
  <button>cerrar</button>

  <footer>
    Pedro Poveda · Proyecto final 2025
  </footer>
</div>

</body>
</html>
