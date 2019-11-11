let start = 0;
function slideFn(timestamp) {
    document.querySelector("#clients #client-row #wrap").style.left = start - 25 + "%";
    if (start > -75) {
        start -= 25;
    }
    else start = 0;
    window.setTimeout(() => {
        window.requestAnimationFrame(slideFn)
    }, 2000);
}

window.requestAnimationFrame(slideFn);