const design3NavOl = document.querySelector("#navbar nav ol");

function design3NavScroll() {
    const design3HeaderScroll = document.querySelector("#navbar# nav").scrollHeight - design3NavOl.scrollHeight;
    if (window.scrollY > design3HeaderScroll) {
        design3NavOl.style.position = "fixed";
    }
    else {
        design3NavOl.style.position = "";
    }
}

const design3 = document.querySelector("#navbar");
document.onscroll = () => {
    if (design3.style.display == "block") design3NavScroll();
}
document.onload = () => {
    if (design3.style.display == "block") design3NavScroll();
}

const icons = document.querySelectorAll("footer #design4 .column div");
icons.forEach(icon => {
    icon.addEventListener("click", () => {
        footerDesign4Details(icon.id);
    })
})

function main2Toggle(index, id) {
    const options = document.querySelectorAll(`#main2 #box #${id} .content .info .info-option`);
    options.forEach(el => {
        el.style.display = "none";
    });
    options[index].style.display = "block";
}

document.querySelectorAll("#main2 #box .section .content .nav a").forEach(toggle => {
    toggle.addEventListener("click", (e) => {
        let i = 0;
        e.target.parentElement.childNodes.forEach(el => {
            if (el == e.target) {
                index = (i - 3) / 2;
            }
            i++;
        })
        const id = e.composedPath()[3].id;
        main2Toggle(index, id);
    })
});

function productsToggle(toggle, products) {
    products.forEach(product => {
        if (product.classList.contains(toggle) || toggle == "all") {
            product.classList.remove("hide");
        }
        else {
            product.classList.add("hide");
        }
    })
}

function footerDesign4Details(id) {
    const details = document.querySelector(`footer #design4 #details #${id}`);
    if (details.style.display === "block") {
        details.style.display = "none";
    }
    else {
        details.style.display = "block";
    }
}