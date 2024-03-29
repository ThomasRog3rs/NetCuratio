﻿//Variables required
const navBar = document.querySelector("nav.header-section-secondary");
const navLinks = document.querySelectorAll("a.main-menu-link");
let prevScrollpos = window.pageYOffset;

//Event when the user scrolls
window.onscroll = () => {
    //Get the current scroll pos
    let currentScrollPos = window.pageYOffset;

    //Check if the user is scrolling up
    if (prevScrollpos > currentScrollPos) {
        //show the navbar
        navBar.style.opacity = "1";
        navBar.style.pointerEvents = "all";
        navBar.style.position = "fixed";
        navBar.style.top = "0";
        navBar.classList += " shadow-lg";
        navBar.style.background = "rgba(33, 0, 79, 0.97)";
        navBar.style.background = "#1b043b";
        navBar.style.opacity = "0.95";

        try {
            navBar.classList.remove("test");
        } catch {
            console.log("class not here");
        }

    } else {
        //hide the navbar
        navBar.style.top = "-500px";
    }

    //reset
    prevScrollpos = currentScrollPos;

    //If user is at the top of the page
    if (prevScrollpos <= 0) {
        navBar.style.opacity = "0";
        navBar.style.pointerEvents = "none";
    }

}