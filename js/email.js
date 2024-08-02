/==================== formulaire de contact ====================/

    (function () {
        emailjs.init("mQUHLCfmyq6SmqQuq");
    })();

document.getElementById('contact-form').addEventListener('submit', function (event) {
    event.preventDefault();

    const responseMessage = document.getElementById('response-message');
    responseMessage.innerHTML = '';

    emailjs.sendForm('service_9tzqplj', 'template_6l7dime', this)
        .then(function (response) {
            console.log('SUCCESS!', response.status, response.text);
            responseMessage.innerHTML = '<p style="color: white;">Message envoyé avec succès !</p>';
            document.getElementById('contact-form').reset();
        }, function (error) {
            console.error('FAILED...', error);
            responseMessage.innerHTML = '<p style="color: red;">L'envoi du message a échoué.Veuillez réessayer.</p > ';
        });
});