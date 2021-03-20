//Variables required
const navBar = document.querySelector("nav.header-section");
const navLinks = document.querySelectorAll("a.main-menu-link");
let prevScrollpos = window.pageYOffset;

//Event when the user scrolls
window.onscroll = () => {
    //Get the current scroll pos
    let currentScrollPos = window.pageYOffset;

    //Check if the user is scrolling up
    if (prevScrollpos > currentScrollPos) {
        //show the navbar
        navBar.style.top = "0";
        navBar.classList += " shadow-lg";
        navBar.style.background = "rgba(33, 0, 79, 0.97)";s
        navBar.style.background = "#1b043b";
        navBar.style.position = "fixed";
    } else {
        //hide the navbar
        navBar.style.top = "-500px";
    }

    //reset
    prevScrollpos = currentScrollPos;

    //If user is at the top of the page
    if (prevScrollpos == 0) {
        navBar.style.background = "transparent";
        navBar.classList.remove("shadow-lg");
        //navBar.style.position = "absolute";
    }

}