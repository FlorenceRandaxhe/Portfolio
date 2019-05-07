const burger = document.getElementById("burger");
const checkbox = document.getElementById("menu");

function burgerMenu() {
    if (checkbox.checked==true){
        burger.style.position = "fixed";
    } else {
        burger.style.position = "sticky";
    }
}
window.addEventListener("scroll", burgerMenu, false);

/*const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

function random(min, max) {
    return Math.random() * (max - min) + min;
}*/


