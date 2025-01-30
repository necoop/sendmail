<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Тестовая отправка сообщений</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="form-inner curved-form">
  <form id="contactForm" class="contactForm curved-form">
    <div class="form-container curved-form">
      <div class="form-header curved-form">
        Форма обратной связи
      </div>
      <div class="form-data">
        <div class="data-container">
          <label for="name">Имя:</label>
          <input type="text" id="name" name="name" required><br>
        </div>
        <div class="data-container">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required><br>
        </div>
        <div class="data-container">
          <label for="message">Сообщение:</label>
          <textarea id="message" name="message" required></textarea><br>
        </div>

        <button class="send-button" type="submit">Отправить</button>
      </div>
    </div>
  </form>
  <div id="form-status"></div>

  </div>
  

  <div class="fade-in" id="modal">
    <div class="darkoverlay"></div>
    <div class="container-message">
      <div class="messagebox">
        <div class="message-text">
          <p class="message no-select">Пожалуйста, подождите.</p>
          <p class="message no-select">Идёт отправка</p>
        </div>
        <svg width="50" height="50" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
          <circle cx="25" cy="25" r="20" fill="none" stroke="#007bff" stroke-width="4" stroke-dasharray="180" stroke-dashoffset="0">
            <animate attributeName="stroke-dashoffset" from="0" to="360" dur="3s" repeatCount="indefinite" />
          </circle>
        </svg>
      </div>
    </div>
  </div>


  <script src="script.js"></script>
</body>

</html>