const navBar = document.querySelector("nav.navbar");
const navLinks = document.querySelectorAll("a.nav-link");
const navBrand = document.querySelector(".navbar-brand");

window.onscroll = function (e) {
    // console.log(document.getScroll());
    if (document.getScroll()[1] > 0) {
        navBar.classList += " nav-white";
        navBrand.style.color = "rgb(82, 82, 82)";
        navLinks.forEach((el) => {
            el.style.color = "rgb(82, 82, 82)";
        });
    } else {
        navBar.classList.remove("nav-white");
        navBrand.style.color = "#fff";
        navLinks.forEach((el) => {
            el.style.color = "#fff";
        });
    }
}

document.getScroll = function () {
    if (window.pageYOffset != undefined) {
        return [pageXOffset, pageYOffset];
    } else {
        var sx, sy, d = document,
            r = d.documentElement,
            b = d.body;
        sx = r.scrollLeft || b.scrollLeft || 0;
        sy = r.scrollTop || b.scrollTop || 0;
        return [sx, sy];
    }
}