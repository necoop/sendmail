<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовая отправка сообщений</title>
    <!-- <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css"> -->
    <style>
        #form-status {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <form id="contactForm">
        <div id="form-status"></div>
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="message">Сообщение:</label>
        <textarea id="message" name="message" required></textarea><br>

        <button type="submit">Отправить</button>
    </form>

    <script src="script.js"></script>
</body>

</html>