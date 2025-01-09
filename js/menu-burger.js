let burgerButton = document.querySelector('#burger-menu');
let menuList = document.querySelector('#navbar-mobile');
let exitButton = document.querySelector('#exit-button')



burgerButton.addEventListener('click', function () {
    // Bascule la classe active pour afficher ou masquer le menu
    burgerButton.classList.toggle('active');

    // Masque les point lorsque le menu est ouvert
    if (burgerButton.classList.contains('active')) {
        console.log('patate');
        menuList.style.display = 'flex';
    } else {
        menuList.style.display = 'none'; // réaffiche les points lorsque le menu est fermé

    }
});


exitButton.addEventListener('click', function () {
    burgerButton.classList.remove('active');
    menuList.style.display = 'none';

});


