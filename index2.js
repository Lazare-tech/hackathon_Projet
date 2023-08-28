// carousel
let slidesIndex = 1;
showSlides(slidesIndex);

function plusSlides(n){
    showSlides(slidesIndex += n);
}

function currentSlides(n) {
    showSlides(slidesIndex = n);
}

function showSlides(n) {
    let slides = document.getElementsByClassName('slides');
    let dots = document.getElementsByClassName('dot');
    
    if(n > slides.length) { slidesIndex = 1 }
    
    if(n < 1 ) { slidesIndex = slides.length }
    
    for ( let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    
    // retirer les point
    
    for(let i = 0; i < dots.length; i++) {
        dots[i].classList.remove('active');
    }
    
    // affiché les slide demandé
    slides[slidesIndex - 1].style.display = 'block';
    // ajouter active sur le point clique
    dots[slidesIndex -1].classList.add('active');
}

// responsive nav

let toggle = document.querySelector('.toggle');
let body = document.querySelector('body');

toggle.addEventListener('click', function() {
    body.classList.toggle('open');
    
}) 