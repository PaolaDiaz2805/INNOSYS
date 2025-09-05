<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tablón de Tareas - Matemáticas</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap" rel="stylesheet">
    <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f0f4f8;
      display: flex;
      min-height: 100vh;
    }

    
    .sidebar {
      width: 220px;
      background-color: #0d47a1;
      color: white;
      padding: 20px;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .sidebar h2 {
      font-size: 22px;
      margin-bottom: 10px;
    }

    .sidebar a {
      color: white;
      text-decoration: none;
      padding: 10px;
      border-radius: 6px;
      transition: background 0.3s;
    }

    .sidebar a:hover,
    .sidebar a.active {
      background-color: #1565c0;
    }

    
    .main {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .header {
      background-color: #e53935;
      color: white;
      padding: 30px 40px;
    }

    .header h1 {
      font-size: 28px;
    }

    .content {
      padding: 30px 40px;
    }

    .card {
      background-color: white;
      padding: 20px;
      margin-bottom: 20px;
      border-left: 5px solid #0d47a1;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    }

    .card h3 {
      color: #0d47a1;
      font-size: 18px;
      margin-bottom: 6px;
    }

    .card p {
      font-size: 14px;
      color: #333;
    }
    #ppubli{
      height: 100%;
    }

    footer {
      text-align: center;
      padding: 15px;
      font-size: 12px;
      color: #888;
    }

    @media screen and (max-width: 768px) {
      body {
        flex-direction: column;
      }
      .sidebar {
        width: 100%;
        flex-direction: row;
        justify-content: space-around;
      }
      .main {
        padding-top: 10px;
        }
        }
        input[type="text"],
        input[type="date"],
        textarea {
         width: 100%;
         padding: 10px;
         margin-top: 6px;
         margin-bottom: 16px;
         border: 1px solid #ccc;
         border-radius: 6px; 
         font-family: 'Inter', sans-serif;
         font-size: 14px;
        }

      textarea {
         resize: vertical;
        }

      button {
         background-color: #0d47a1;
         color: white;
         padding: 10px 20px;
         border: none;
         border-radius: 6px;
         font-weight: 600;
         cursor: pointer;
         transition: background-color 0.3s ease;
      }

        button:hover {
         background-color: #1565c0;
      }
  </style>
</head>
<body>
  <div class="sidebar">
    <h2>Clases</h2>
    <a href="" class="active">📌 Tablón</a>
    <a href="">📂 Trabajo de clase</a>
    <a href="">👥 Personas</a>
    <a href="">📊 Calificaciones </a>
  </div>

    <div class="main">
    <div class="header">
      <h1>Matemáticas - 6to Secundaria</h1>
    </div>

    <div class="content">
      <div class="card">
        <h3>📌 Tarea: Ecuaciones cuadráticas</h3>
        <p>Fecha límite: 26 de junio a las 16:00</p>
      </div>

      <div class="card">
        <h3>📝 Anuncio del profesor </h3>
        <p>Se revisará la guía de repaso el viernes en clase. ¡No faltes!</p>
      </div>

      <div class="card">
        <h3>📚 Nuevo material: Funciones lineales</h3>
        <p>Disponible en la sección de materiales desde hoy.</p>
      </div>
    </div>
    <div class="content">
  <div class="card">
    <h3>✏️ Nueva publicación</h3>
    <form action="publicacion.php" method="post">
      
      <label for="ci">CI:</label>
      <input type="text" name="ci">

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

    <footer>
      Plataforma educativa · Proyecto final 2025
    </footer>
  </div>

</body>
</html>
