<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Calendario de Actividades</title>
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  <style>
    body {
    font-family: Arial, sans-serif;
    display: grid;
    grid-template-columns: 100%;
    grid-template-rows: 100px 40px 700px 150px;
    grid-template-areas:
      "header"
      "et"
      "main"
      "footer";
      margin: 0;
      padding: 0;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
      gap:10px;
    }

    .lo{
     grid-area:header;
     
    }
     
    main{
      grid-area:main;
    }
    .set{
      grid-area:et;
    }

    h1 {
      color: #002a61;
      margin: 20px 0 10px 0;
    }

    .calendar {
      display: grid;
      grid-template-columns: repeat(7, 100px);
      gap: 5px;
      text-align: center;
      margin-bottom: 40px;
      justify-content:center;
    }

    .day-name {
      background-color: #003f88;
      color: white;
      padding: 10px 0;
      font-weight: bold;
      user-select: none;
    }

    .day {
      background-color: white;
      border: 1px solid #ccc;
      height: 100px;
      padding: 5px;
      position: relative;
      cursor: pointer;
      transition: transform 0.2s ease;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      box-sizing: border-box;
      overflow-y: auto;
    }

    .day:hover {
      transform: scale(1.05);
      background-color: #e3f2fd;
    }

    .day-number {
      font-weight: bold;
      color: #e63946;
      margin-bottom: 5px;
      user-select: none;
    }

    .activities {
      font-size: 0.75em;
      width: 100%;
    }

    .modal {
      display: none;
      position: fixed;
      top: 30%;
      left: 50%;
      transform: translate(-50%, -30%);
      background-color: white;
      border: 2px solid #002a61;
      padding: 20px;
      z-index: 10;
      width: 320px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      box-sizing: border-box;
      border-radius: 6px;
    }

    .modal input, .modal button {
      width: 100%;
      margin-top: 10px;
      padding: 8px;
      font-size: 1em;
      box-sizing: border-box;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    .modal button {
      background-color: #e63946;
      color: white;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .modal button:hover {
      background-color: #c5303f;
    }

    .overlay {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 5;
    }
    
.la{
  grid-area:footer;
}
@media (max-width: 768px) {
  body{
    display: grid;
    grid-template-columns: 100%;
    grid-template-rows: 120px 60px 680px 150px;
    grid-template-areas:
      "header"
      "et"
      "main"
      "footer";
      margin: 0;
      padding: 0;
    
  }

  .calendar{
    justify-content:center;
    width: 100%;    
    transform: scale(0.8); 
    transform-origin: top bottom; 
    
  }
  
}
  </style>
</head>
<body>

  <header class="lo">
   <?php
   include("cabeza.php");
   ?>
  </header>

  <section section="set">
    <?php
    include("panza.php");
    ?>
  </section>

<main> <center><h1>Calendario de Actividades - Junio 2025</h1></center>

  <div class="calendar" id="calendar">
    <div class="day-name">Dom</div>
    <div class="day-name">Lun</div>
    <div class="day-name">Mar</div>
    <div class="day-name">Mié</div>
    <div class="day-name">Jue</div>
    <div class="day-name">Vie</div>
    <div class="day-name">Sáb</div>
    
  </div>
</main>

  <div class="overlay" id="overlay"></div>

  <div class="modal" id="modal">
    <h3>Agregar Actividad</h3>
    <p id="selected-day"></p>
    <input type="text" id="activity" placeholder="Escribe la actividad" />
    <button onclick="saveActivity()">Guardar</button>
    <button onclick="closeModal()">Cancelar</button>
  </div>
  <footer class="la">
    <?php
    include("pie.php");
    ?>
  </footer>

  <script>
    const calendarEl = document.getElementById('calendar');
    const modal = document.getElementById('modal');
    const overlay = document.getElementById('overlay');
    const selectedDayText = document.getElementById('selected-day');
    const activityInput = document.getElementById('activity');

    let selectedDate = null;

    const year = 2025;
    const month = 5; 
    const startDay = new Date(year, month, 1).getDay();
    const daysInMonth = 30;


    for (let i = 0; i < startDay; i++) {
      const emptyCell = document.createElement('div');
      calendarEl.appendChild(emptyCell);
    }


    for (let day = 1; day <= daysInMonth; day++) {
      const cell = document.createElement('div');
      cell.className = 'day';
      cell.dataset.day = day;
      cell.innerHTML = `
        <div class="day-number">${day}</div>
        <div class="activities" id="act-${day}"></div>`;
      cell.onclick = () => openModal(day);
      calendarEl.appendChild(cell);
    }

    function openModal(day) {
      selectedDate = day;
      selectedDayText.textContent = `Día ${day} de junio`;
      activityInput.value = '';
      modal.style.display = 'block';
      overlay.style.display = 'block';
      activityInput.focus();
    }

    function closeModal() {
      modal.style.display = 'none';
      overlay.style.display = 'none';
    }

    function saveActivity() {
      const text = activityInput.value.trim();
      if (!text) {
        alert('Por favor escribe una actividad.');
        return;
      }

      const actList = document.getElementById(`act-${selectedDate}`);
      const item = document.createElement('div');
      item.textContent = `• ${text}`;
      actList.appendChild(item);

      closeModal();
    }


    overlay.onclick = closeModal;
  </script>

</body>
</html>
