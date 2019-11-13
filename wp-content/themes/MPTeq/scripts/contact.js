const contactIcons = document.querySelectorAll("#contact2 #wrap .column div");
contactIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        contact2Details(icon.id);
    })
})
function contact2Details(id) {
    const details = document.querySelector(`#contact2 #wrap #details #${id}`);
    if (details.style.display === "block") {
        details.style.display = "none";
    }
    else {
        details.style.display = "block";
    }
}