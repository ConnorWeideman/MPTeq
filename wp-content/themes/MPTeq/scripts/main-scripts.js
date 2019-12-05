document.querySelectorAll("main #box .section .content .nav a").forEach(toggle => {
    toggle.addEventListener("click", (e) => {
        toggle.parentElement.nextElementSibling.querySelectorAll(".info-option").forEach(option => {
            if (option.id == toggle.id) {
                option.style.display = "block";
            }
            else {
                option.style.display = "none";
            }
        })
    });
});

document.querySelectorAll("main #box .section .content .info i").forEach(arrow => {
    let arr = [];
    arrow.parentElement.childNodes.forEach(info => {
        if (info.nodeType != 3) {
            if (info.classList.contains("info-option")) {
                arr.push(info);
            }
        }
    });
    arrow.addEventListener("click", e => {
        const block = arr.find(option => {
            return option.style.display == "block";
        });
        if (arrow.firstChild.classList.contains("fa-chevron-down")) {
            block.scrollBy(0, 100);
            arrow.previousElementSibling.firstChild.style.opacity = "0.3";
        }
        else if (arrow.firstChild.classList.contains("fa-chevron-up")) {
            block.scrollBy(0, -100);
            window.setTimeout(() => {
                if (block.scrollTop == 0) {
                    arrow.firstChild.style.opacity = "0";
                }
            }, 300);
        }
    });
});
window.onload = () => {
    document.querySelectorAll("main #box .section .content .info .info-option:nth-child(3)").forEach(info => {
        info.style.display = "block";
    })
}


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


function footerDetails(id) {
    const details = document.querySelector(`footer #details #${id}`);
    if (details.style.display === "block") {
        details.style.display = "none";
    }
    else {
        details.style.display = "block";
    }
    window.scrollBy(0, 1000);
}
const icons = document.querySelectorAll("footer .column div");
icons.forEach(icon => {
    icon.addEventListener("click", () => {
        footerDetails(icon.id);
    })
});