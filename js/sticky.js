window.onscroll = function () { myFunction() };

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
    if (window.scrollY >= sticky) {
        navbar.classList.add("sticky")
        console.log('scroll worked')
    } else {
        navbar.classList.remove("sticky");
    }
}