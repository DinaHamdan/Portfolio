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

//reveal on scroll
// Function to reveal sections on scroll
const revealOnScroll = () => {
    const sections = document.querySelectorAll('.reveal');

    sections.forEach(section => {
        const sectionTop = section.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (sectionTop < windowHeight - 300) {
            section.classList.add('show');
        }


    });
};

// Call reveal function on scroll
window.addEventListener('scroll', revealOnScroll);

// Initial call to reveal any sections that are already in view
revealOnScroll();