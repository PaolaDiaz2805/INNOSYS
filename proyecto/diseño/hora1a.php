<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Horario 1A</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background-color: #f5f5f5;
      padding: 20px;
    }

    .horario {
      background-color: #003f88;
      color: white;
      padding: 20px;
      border-radius: 10px;
      max-width: 800px;
      margin: 0 auto;
    }

    .horario::before {
      content: "HORARIO - 1A";
      font-size: 24px;
      color: #ffc107;
      font-weight: bold;
      display: block;
      margin-bottom: 20px;
      text-align: center;
    }

    .dia {
      background-color: rgba(255, 255, 255, 0.15);
      padding: 10px 15px;
      margin: 10px 0;
      border: 2px solid white;
      border-radius: 8px;
    }

    .dia h2 {
      margin-top: 0;
      font-size: 18px;
      color: #ffc107;
      text-align: center;
    }

    .clase {
      margin: 6px 0;
      padding: 6px 10px;
      border-radius: 5px;
      background-color: rgba(255, 255, 255, 0.2);
      display: flex;
      justify-content: space-between;
      font-weight: bold;
    }

    .hora {
      color: #ffffff;
    }

    .materia {
      color: #ffffff;
    }

    @media (max-width: 600px) {
      .clase {
        flex-direction: column;
        align-items: flex-start;
      }
    }
  </style>
</head>
<body>

  <div class="horario">

    <div class="dia">
      <h2>Lunes</h2>
      <div class="clase"><span class="hora">07:30–08:10</span> <span class="materia">→ LEX</span></div>
      <div class="clase"><span class="hora">08:10–08:50</span> <span class="materia">→ LEX</span></div>
      <div class="clase"><span class="hora">08:50–09:30</span> <span class="materia">→ LENG-COM</span></div>
      <div class="clase"><span class="hora">09:30–10:10</span> <span class="materia">→ LENG-COM</span></div>
      <div class="clase"><span class="hora">10:40–11:20</span> <span class="materia">→ E. MUSICAL</span></div>
      <div class="clase"><span class="hora">11:20–12:00</span> <span class="materia">→ E. MUSICAL</span></div>
    </div>

    <div class="dia">
      <h2>Martes</h2>
      <div class="clase"><span class="hora">07:30–08:10</span> <span class="materia">→ BIO-GEO</span></div>
      <div class="clase"><span class="hora">08:10–08:50</span> <span class="materia">→ BIO-GEO</span></div>
      <div class="clase"><span class="hora">08:50–09:30</span> <span class="materia">→ LENG-COM</span></div>
      <div class="clase"><span class="hora">09:30–10:10</span> <span class="materia">→ LENG-COM</span></div>
      <div class="clase"><span class="hora">10:40–11:20</span> <span class="materia">→ MAT</span></div>
      <div class="clase"><span class="hora">11:20–12:00</span> <span class="materia">→ MAT</span></div>
    </div>

    <div class="dia">
      <h2>Miércoles</h2>
      <div class="clase"><span class="hora">07:30–08:10</span> <span class="materia">→ C. SOCIALES</span></div>
      <div class="clase"><span class="hora">08:10–08:50</span> <span class="materia">→ C. SOCIALES</span></div>
      <div class="clase"><span class="hora">08:50–09:30</span> <span class="materia">→ MAT</span></div>
      <div class="clase"><span class="hora">09:30–10:10</span> <span class="materia">→ MAT</span></div>
      <div class="clase"><span class="hora">10:40–11:20</span> <span class="materia">→ VER</span></div>
      <div class="clase"><span class="hora">11:20–12:00</span> <span class="materia">→ VER</span></div>
    </div>

    <div class="dia">
      <h2>Jueves</h2>
      <div class="clase"><span class="hora">07:30–08:10</span> <span class="materia">→ PISCO-FILO</span></div>
      <div class="clase"><span class="hora">08:10–08:50</span> <span class="materia">→ PISCO-FILO</span></div>
      <div class="clase"><span class="hora">08:50–09:30</span> <span class="materia">→ C. SOCIALES</span></div>
      <div class="clase"><span class="hora">09:30–10:10</span> <span class="materia">→ C. SOCIALES</span></div>
      <div class="clase"><span class="hora">10:40–11:20</span> <span class="materia">→ ARTES P.</span></div>
      <div class="clase"><span class="hora">11:20–12:00</span> <span class="materia">→ ARTES P.</span></div>
    </div>

    <div class="dia">
      <h2>Viernes</h2>
      <div class="clase"><span class="hora">07:30–08:10</span> <span class="materia">→ MAT</span></div>
      <div class="clase"><span class="hora">08:10–08:50</span> <span class="materia">→ MAT</span></div>
      <div class="clase"><span class="hora">08:50–09:30</span> <span class="materia">→ BIO-GEO</span></div>
      <div class="clase"><span class="hora">09:30–10:10</span> <span class="materia">→ BIO-GEO</span></div>
      <div class="clase"><span class="hora">10:40–11:20</span> <span class="materia">→ TECNIC.A</span></div>
      <div class="clase"><span class="hora">11:20–12:00</span> <span class="materia">→ TECNIC.A</span></div>
    </div>

  </div>

</body>
</html>