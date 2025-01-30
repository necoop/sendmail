document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Предотвращаем стандартную отправку формы
    const modalWindow = document.getElementById('modal');
    modalWindow.classList.toggle('visible');

    const formData = new FormData(this);

    fetch('send_email.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        modalWindow.classList.toggle('visible');
        document.getElementById('form-status').innerHTML = data;
       // очищаем форму
        document.getElementById('contactForm').reset();
    })
    .catch(error => {
        modalWindow.classList.toggle('visible');
        document.getElementById('form-status').innerHTML = "Ошибка при отправке запроса: " + error;
    });
});