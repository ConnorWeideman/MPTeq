const content = document.querySelectorAll("#product1 #content > div");
document.querySelectorAll("#product1 #toggles a").forEach(toggle => {
    toggle.addEventListener("click", () => {
        content.forEach(cont => {
            if (cont.id == toggle.id) {
                cont.style.display = "block";
            }
            else {
                cont.style.display = "none";
            }
        })
    })
});

let t = true;
const gallery = document.querySelector("#product2 #gallery");
const toggle = document.querySelector("#product2 #img #toggle");
toggle.addEventListener("click", () => {
    if (t) {
        gallery.style.display = "block";
        toggle.style.transform = "rotate(180deg)";
    }
    else {
        gallery.style = "";
        toggle.style = "";
    }
    t = !t;
})