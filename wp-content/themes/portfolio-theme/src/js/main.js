let scrollBtn = document.querySelector('.scroll_down');
let hero = document.querySelector('.content_up');
let project = document.querySelector('.project_up');
let header = document.getElementById('head');

function scrollLine() {
    if (window.pageYOffset > 40){
        scrollBtn.style.opacity = "0";
        hero.style.transform = "translateY(-200px)";
        header.style.transform = "translateY(-200px)";
        project.style.transform = "translateY(-200px)";
    } else {
        scrollBtn.style.opacity = "initial";
        hero.style.transform = "none";
        header.style.transform = "none";
        project.style.transform = "none";
    }
}
window.addEventListener('scroll', scrollLine);
