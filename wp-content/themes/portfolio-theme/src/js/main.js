let scrollBtn = document.querySelector('.scroll_down');

function scrollLine() {
    if (window.pageYOffset > 40){
        scrollBtn.style.opacity = "0";
    } else {
        scrollBtn.style.opacity = "initial";
    }
}
window.addEventListener('scroll', scrollLine);


