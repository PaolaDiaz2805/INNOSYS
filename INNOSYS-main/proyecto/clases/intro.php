<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pantalla de Inicio</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #dceeff, #4b6cb7, #182848);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      overflow: hidden;
    }

    .contenedor {
      background: rgba(255, 255, 255, 0.1);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.4);
      text-align: center;
      color: white;
      width: 90%;
      max-width: 500px;
      border: 2px solid rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(6px);
      animation: slideUp 1s ease-out;
      position: relative; /* Para posicionar logos */
    }

    @keyframes slideUp {
      0% { opacity: 0; transform: translateY(50px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    /* Logos */
    .logo-top {
      position: absolute;
      top: 20px;
      left: 20px;
      width: 80px;
      animation: float 1.5s ease-in-out infinite;
    }

    .logo-bottom {
      position: absolute;
      bottom: 20px;
      left: 20px;
      width: 80px;
      animation: float 1.5s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-5px); }
    }

    h1 {
      font-size: 45px;
      margin: 60px 0 30px 0; /* espacio superior para que no choque con el logo */
      text-shadow: 2px 2px 8px rgba(0,0,0,0.5);
      animation: fadeInText 1.5s ease-out;
    }

    @keyframes fadeInText {
      0% { opacity: 0; transform: translateY(-20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .botones {
      display: flex;
      flex-direction: column;
      gap: 20px;
      animation: botonesEntrada 1.5s ease-out;
      margin-bottom: 60px; /* espacio inferior para logo-bottom */
    }

    @keyframes botonesEntrada {
      0% { opacity: 0; transform: scale(0.8); }
      100% { opacity: 1; transform: scale(1); }
    }

    .botones a {
      text-decoration: none;
    }

    .boton {
      padding: 18px;
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      border-radius: 12px;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
      color: white;
      display: block;
    }

    #b1 { background: linear-gradient(135deg, #6a85b6, #1e3c72); }
    #b2 { background: linear-gradient(135deg, #5ca9ff, #1169b6ff); }
    #b3 { background: linear-gradient(135deg, #5ca9ff, #004e92); }

    .boton:hover {
      transform: scale(1.1) translateY(-3px);
      box-shadow: 0 12px 25px rgba(0,0,0,0.6);
    }

  </style>
</head>
<body>
  <div class="contenedor">
    <img src="logo.png" alt="Logo Superior" class="logo-top">
    <h1>ERES UN:</h1>
    <div class="botones">
      <a href="" class="boton" id="b3">ADMINISTRADOR</a>
      <a href="../profesor/regpro.php" class="boton" id="b1">PROFESOR</a>
      <a href="../estudiante/regest.php" class="boton" id="b2">ESTUDIANTE</a>
    </div>
    <img src="logo.png" alt="Logo Inferior" class="logo-bottom">
  </div>
</body>
</html>

