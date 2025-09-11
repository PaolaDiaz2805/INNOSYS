<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Sacramento&display=swap" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    h1 {
      font-family: 'oswald', sans-serif;
      font-weight: 700;
      font-size: 2em;
      color: #062870;
      text-transform: uppercase;
    }
    .main, section, aside {
      width: 95%;
      gap: 20px;
    }
    .der {
      grid-area: be;
    }
    body {
      background-color: rgb(231, 231, 231);
      display: grid;
      grid-template-columns: 15% 85%;
      grid-template-rows: 150px 200px 200px 200px 200px;
      grid-template-areas:
        "be be"
        "na hea"
        "na yy"
        "na mai"
        "na asi";
      gap: 10px;
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
    @media (max-width: 1024px) {
      body {
        grid-template-columns: 100%;
        grid-template-rows: auto auto auto auto auto;
        grid-template-areas:
          "na"
          "hea"
          "mai"
          "sec"
          "asi";
        gap: 10px;
      }
      header, main, section, aside {
        flex-direction: column;
        align-items: center;
        gap: 10px;
      }

      div {
        width: 90%;
        padding: 20px;
        margin: auto;
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
        gap: 10px;
        align-items: center;
      }

      div {
        width: 100%;
        padding: 15px;
        margin: auto;
      }

      button {
        width: 100%;
        font-size: 16px;
        padding: 12px;
      }
    }

    div {
      background-color: rgb(255, 255, 255);
      width: 100%;
      text-align: center;
      border-radius: 5%;
      border: 5px double rgba(6, 32, 150, 1);
      padding: 70px;
      box-sizing: border-box;
      margin: auto;
      opacity: 82%;
    }

    button {
      background-color: #005187;
      height: 70px;
      width: 100%;
      font-family: 'Trebuchet MS', sans-serif;
      text-align: center;
      cursor: pointer;
      transition: all 0.3s ease;
      max-width: 400px;
      font-size: 18px;
      padding: 15px;
      box-sizing: border-box;
    }

    button:hover {
      background-color: #005187;
      transform: scale(1.1);
      box-shadow: 0 0 5px #fff,
         0 0 25px #fff,
         0 0 100px rgb(24, 22, 132);
    }
  </style>
</head>
<body>
  <header class="der">
    <?php include("cabeza.php"); ?>
  </header>

  <?php include("menu.php"); ?>
</body>
</html>
