document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Предотвращаем стандартную отправку формы

    const formData = new FormData(this);

    fetch('send_email.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('form-status').innerHTML = data;
       // очищаем форму
        document.getElementById('contactForm').reset();
    })
    .catch(error => {
        document.getElementById('form-status').innerHTML = "Ошибка при отправке запроса: " + error;
    });
});