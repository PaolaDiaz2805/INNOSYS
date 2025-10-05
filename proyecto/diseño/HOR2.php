<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>La Salle de Convenio</title>
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: grid;
      grid-template-areas:
        "header"
        "dos"
        "secundaria"
        "footer";
      grid-template-columns: 100%;
      grid-template-rows: 100px 40px 1fr 150px;
      gap: 15px;
      background-color: #f5f5f5;
      padding: 15px;
      min-height: 100vh;
    }

    .cab {
      grid-area: header;
    }

    .mi {
      grid-area: dos;
    }

    header img {
      height: 60px;
    }

    article {
      grid-area: secundaria;
      background-color: #003f88;
      color: white;
      padding: 20px;
      border-radius: 10px;
    }

    .fo {
      grid-area: footer;
    }

    .sec-link {
      display: block;
      background-color: rgba(255, 255, 255, 0.15);
      padding: 10px;
      margin: 6px 0;
      border: 2px solid white;
      border-radius: 8px;
      text-align: center;
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: transform 0.2s ease, background-color 0.2s ease;
    }

    .sec-link:hover {
      transform: scale(1.05);
      background-color: rgba(255, 255, 255, 0.3);
    }

    article::before {
      content: "SECUNDARIA";
      font-size: 24px;
      color: #ffc107;
      font-weight: bold;
      display: block;
      margin-bottom: 10px;
      text-align: center;
    }

    @media (max-width: 768px) {
      body {
        grid-template-rows: 120px 60px 1fr 150px;
        padding: 10px;
      }
    }
  </style>
</head>
<body>

  <header class="cab">
    <?php include("cabeza.php"); ?>
  </header>

  <main class="mi">
    <?php include("panza.php"); ?>
  </main>

  <article>
    <a class="sec-link" href="hora1a.php">PRIMERO-A</a>
    <a class="sec-link" href="hora1b.php">PRIMERO-B</a>
    <a class="sec-link" href="hora2a.php">SEGUNDO-A</a>
    <a class="sec-link" href="hora2b.php">SEGUNDO-B</a>
    <a class="sec-link" href="hora3a.php">TERCERO-A</a>
    <a class="sec-link" href="hora3b.php">TERCERO-B</a>
    <a class="sec-link" href="hora4a.php">CUARTO-A</a>
    <a class="sec-link" href="hora4b.php">CUARTO-B</a>
    <a class="sec-link" href="hora5a.php">QUINTO-A</a>
    <a class="sec-link" href="hora5b.php">QUINTO-B</a>
    <a class="sec-link" href="hora6a.php">SEXTO-A</a>
    <a class="sec-link" href="hora6b.php">SEXTO-B</a>
  </article>

  <footer class="fo">
    <?php include("pie.php") ?>
  </footer>

</body>
</html>