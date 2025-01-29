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
    <form action="#" method="get" id="contactForm">
        <div class="form_description">
            <h3>Как вас зовут?</h3>
        </div>
        <div class="form_inner">
            <input type="text" name="name" id="name">
            <button class="button">
                <div class="text_button">Отправить</div>
                <div class="no_highlight_text"></div>
            </button>
        </div>
        <div id="form-status">
            Сообщение успешно отправлено
        </div>
    </form>
    <script src="script.js"></script>
</body>

</html>