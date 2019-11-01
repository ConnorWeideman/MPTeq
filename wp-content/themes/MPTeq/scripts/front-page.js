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
})
