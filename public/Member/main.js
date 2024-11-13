window.addEventListener('scroll', function() {
    let header = document.querySelector('header');
    let logo = document.querySelector('.logo');
    if (window.scrollY > 50) {
        header.style.backgroundColor = "white";
        header.classList.add('shadow-lg');
        logo.style.color = "black"


    } else {
        header.style.backgroundColor = "";
        header.classList.remove('shadow-lg');
        logo.style.color = "white"
    }
});
