const slider = document.querySelector("#main1 #product-slider #slide #wrap");
document.querySelector("#main1 #product-slider #left-arrow").addEventListener("click", () => {
    slider.style.left = "0";
});
document.querySelector("#main1 #product-slider #right-arrow").addEventListener("click", () => {
    slider.style.left = "-25%";
});


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

const main3Products = document.querySelectorAll("#main3 #products #product-row .product");
document.querySelector("#main3 #products #toggle #filter").addEventListener("change", e => {
    productsToggle(e.target.value, main3Products);
});

const main4Products = document.querySelectorAll("#main4 #products #product-container #product-row .product");
document.querySelectorAll("#main4 #products #product-container #toggles a").forEach(toggle => {
    toggle.addEventListener("click", e => {
        productsToggle(e.target.id, main4Products);
    })
});

function main4ProjectsToggle(id) {
    console.log(id)
    document.querySelectorAll("#main4 #projects #info .project-info").forEach(info => {
        if (info.id == id) {
            info.classList.add("show");
        }
        else {
            info.classList.remove("show");
        }
    })
}
document.querySelectorAll("#main4 #projects #map .project").forEach(toggle => {
    console.log(toggle.id);
    toggle.addEventListener("click", e => {
        main4ProjectsToggle(e.currentTarget.id.charAt(7))
    });
})