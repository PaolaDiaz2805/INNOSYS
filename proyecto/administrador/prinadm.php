<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Página Principal</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Oswald:wght@400;700&display=swap" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
  
    h1 {
      font-family: 'Oswald', sans-serif;
      font-weight: 700;
      font-size: 2em;
      color: #062870;
      text-transform: uppercase;
      margin: 0;
    }

    body {
      margin: 0;
      background-color: rgb(231, 231, 231);
      display: grid;
      grid-template-columns: 250px 1fr;
      grid-template-rows: 150px auto;
      grid-template-areas:
        "be be"
        "na contenido";
      gap: 10px;
      min-height: 100vh;

      background-image: url('logo.png');
      background-repeat: repeat;
      background-size: 50% 50%;
      background-attachment: fixed;
      position: relative;
    }

    body::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.7);
      z-index: -1;
    }

    header.der {
      grid-area: be;
      background: transparent;
    }

    nav.menu {
      grid-area: na;
      z-index: 100;
    }

    main {
      grid-area: contenido;
      padding: 20px;
    }

    .main, section, aside {
      width: 95%;
      gap: 20px;
      margin: auto;
    }

    div {
      background-color: rgb(255, 255, 255);
      width: 100%;
      max-width: 900px;
      text-align: center;
      border-radius: 10px;
      border: 5px double rgba(6, 32, 150, 1);
      padding: 70px;
      box-sizing: border-box;
      margin: 20px auto;
      opacity: 0.82;
    }

    button {
      background-color: #005187;
      height: 70px;
      width: 100%;
      max-width: 400px;
      font-family: 'Trebuchet MS', sans-serif;
      text-align: center;
      cursor: pointer;
      transition: all 0.3s ease;
      font-size: 18px;
      padding: 15px;
      box-sizing: border-box;
      color: white;
      border: none;
      border-radius: 8px;
    }

    button:hover {
      background-color: #004170;
      transform: scale(1.05);
      box-shadow: 0 0 5px #fff,
                  0 0 25px #fff,
                  0 0 100px rgb(24, 22, 132);
    }

    @media (max-width: 1024px) {
      body {
        grid-template-columns: 100%;
        grid-template-rows: auto auto auto;
        grid-template-areas:
          "be"
          "na"
          "contenido";
      }

      header, main, section, aside {
        flex-direction: column;
        align-items: center;
        gap: 10px;
      }

      div {
        width: 90%;
        padding: 20px;
      }

      button {
        width: 100%;
        font-size: 18px;
        padding: 15px;
      }
    }

    @media (max-width: 600px) {
      body {
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding: 10px;
      }

      header, main, section, aside {
        flex-direction: column;
        align-items: center;
        gap: 10px;
      }

      div {
        width: 100%;
        padding: 15px;
      }

      button {
        width: 100%;
        font-size: 16px;
        padding: 12px;
      }
    }
  </style>
</head>
<body>
  <header class="der">
    <?php include("cabeza.php"); ?>
  </header>

 
  <nav class="menu">
    <?php include("menu.php"); ?>
  </nav>

  
  <main>
    <div>
      <h1>Bienvenido</h1>
      <p>Este es el contenido principal de la página.</p>
      <button>Acción Principal</button>
    </div>
  </main>
</body>
</html>
