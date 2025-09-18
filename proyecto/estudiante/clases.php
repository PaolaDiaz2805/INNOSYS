<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Entrega de Tarea</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: rgba(245, 244, 244, 1);
    }
    form.tarea {
      position: fixed;
      top: 20px;
      right: 20px;
      border: 3px solid blue;
      padding: 20px;
      width: 300px;
      display: flex;
      flex-direction: column;
      align-items: center;
      background-color: rgba(255, 255, 255, 1);
      box-shadow: 0 0 10px rgba(0, 0, 0, 1);
      border-radius: 10px;
    }

    h1, h2 {
      font-size: 24px;
      color: #333;
      margin-bottom: 20px;
    }

    .en {
      width: 200px;
      height: 40px;
      border: none;
      font-family: "Gochi Hand", cursive;
      font-size: 15px;
      cursor: pointer;
      border-radius: 5px;
      box-shadow: 0 3px 0 rgba(219, 37, 37, 1);
      transition: all 0.3s;
      background-color: rgba(162, 181, 245, 1);
      margin: 10px 0;
      text-align: center;
      display: inline-block;
      line-height: 40px;
    }

    .en:active {
      transform: translateY(5px);
      outline: 0;
    }
    input[type="file"] {
      display: none;
    }

    label[for="archivo"] {
      width: 200px;
      height: 40px;
      background-color: rgba(162, 181, 245, 1);
      font-family: "Gochi Hand", cursive;
      font-size: 15px;
      text-align: center;
      line-height: 40px;
      border-radius: 5px;
      box-shadow: 0 3px 0 rgba(219, 37, 37, 1);
      cursor: pointer;
      transition: all 0.3s;
      margin: 10px 0;
    }

    label[for="archivo"]:active {
      transform: translateY(5px);
    }

    #archivo-nombre {
      font-size: 13px;
      color: #333;
      margin-bottom: 10px;
      text-align: center;
      max-width: 90%;
      word-break: break-all;
    }

    #comentarios {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 350px;
      padding: 20px;
      background-color: white;
      font-family: Arial, sans-serif;
      width: 300px;
      height: 350px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 1);
      border-radius: 10px;
      border: 3px solid blue;
      position: fixed;
      right: 20px;
    }

    #comentarios h2 {
      color: #333;
      margin-bottom: 20px;
      font-size: 28px;
    }

    #comentarios textarea {
      width: 80%;
      height: 120px;
      padding: 15px;
      font-size: 16px;
      border-radius: 10px;
      border: 1px solid #ccc;
      resize: vertical;
      outline: none;
      transition: border 0.3s;
    }

    #comentarios textarea:focus {
      border-color: rgba(131, 18, 18, 1);
    }

    #comentarios button {
      margin-top: 20px;
      padding: 12px 30px;
      background-color: rgba(37, 33, 163, 1);
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    #comentarios button:hover {
      background-color: rgba(48, 45, 116, 1);
    }
  </style>
</head>
<body>
  <form class="tarea" action="crearmost.php" method="post" enctype="multipart/form-data" novalidate>
    <h1>Tarea</h1>
    <input type="file" id="archivo" name="archivo" required />
    <label for="archivo">Adjunta tu trabajo</label>
    <span id="archivo-nombre"></span>
    <input class="en" type="submit" value="Entregar" />
  </form>

  <section id="comentarios">
    <h2>Deja tu comentario</h2>
    <form action="comentario.php" method="post" novalidate>
      <textarea name="com" placeholder="Comentario privado" required></textarea>
      <br>
      <button type="submit">Enviar</button>
    </form>
  </section>

  <script>
    const archivoInput = document.getElementById('archivo');
    const archivoNombre = document.getElementById('archivo-nombre');

    archivoInput.addEventListener('change', function () {
      if (archivoInput.files.length > 0) {
        archivoNombre.textContent = archivoInput.files[0].name;
      } else {
        archivoNombre.textContent = '';
      }
    });
  </script>

</body>
</html>
