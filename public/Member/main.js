window.addEventListener('scroll', function() {
    let header = document.querySelector('header');
    if (window.scrollY > 10) {
        header.style.backgroundColor = "#4b5563";

    } else {
        header.style.backgroundColor = "";
        header.style.backdropFilter = "";
    }
});
