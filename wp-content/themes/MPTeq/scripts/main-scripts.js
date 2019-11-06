function toggleDesign(designs, toggle) {
    designs.forEach((design, i) => {
        if (i == toggle.value) {
            design.style.display = "block";
        }
        else design.style.display = "none";
    })
}

const navs = document.querySelectorAll("#navbar .design");
const navToggle = document.querySelector("#nav-toggle");
navToggle.addEventListener("change", () => toggleDesign(navs, navToggle));

const mainToggle = document.querySelector("#main-toggle");
if (mainToggle) {
    const mains = document.querySelectorAll("main .design");
    mainToggle.addEventListener("change", () => toggleDesign(mains, mainToggle));
}

const footers = document.querySelectorAll("footer .design");
const footerToggle = document.querySelector("#footer-toggle");
footerToggle.addEventListener("change", () => toggleDesign(footers, footerToggle));



const design1Nav = document.querySelector("#navbar #design1 nav");
const design1HeaderScroll = document.querySelector("#navbar #design1").scrollHeight - design1Nav.scrollHeight;
const design1Logo = document.querySelector("#navbar #design1 #logo");
const design1NavOl = document.querySelector("#navbar #design1 nav ol");
function design1NavScroll() {
    if (window.scrollY > design1HeaderScroll) {
        design1Nav.style.position = "fixed";
        design1Nav.style.top = "0";
        design1Nav.style.bottom = "";
        design1Logo.style.position = "fixed";
        design1Logo.style.width = "10%";
        design1NavOl.style.width = "75%";
    }
    else {
        design1Nav.style.top = "";
        design1Nav.style.bottom = "0";
        design1Nav.style.position = "absolute";
        design1Logo.style.position = "absolute";
        design1Logo.style.width = "15%";
        design1NavOl.style.width = "100%";
    }
}

const design3NavOl = document.querySelector("#navbar #design3 nav ol");

function design3NavScroll() {
    const design3HeaderScroll = document.querySelector("#navbar #design3 nav").scrollHeight - design3NavOl.scrollHeight;
    if (window.scrollY > design3HeaderScroll) {
        design3NavOl.style.position = "fixed";
    }
    else {
        design3NavOl.style.position = "";
    }
}

const design1 = document.querySelector("#navbar #design1");
const design3 = document.querySelector("#navbar #design3");
document.onscroll = () => {
    if (design1.style.display == "block") design1NavScroll();
    else if (design3.style.display == "block") design3NavScroll();
}
document.onload = () => {
    if (design1.style.display == "block") design1NavScroll();
    else if (design3.style.display == "block") design3NavScroll();
}

const icons = document.querySelectorAll("footer #design4 .column div");
icons.forEach(icon => {
    icon.addEventListener("click", () => {
        footerDesign4Details(icon.id);
    })
})
function footerDesign4Details(id) {
    const details = document.querySelector(`footer #design4 #details #${id}`);
    if (details.style.display === "block") {
        details.style.display = "none";
    }
    else {
        details.style.display = "block";
    }
}