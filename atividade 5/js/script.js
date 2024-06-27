window.onload = function() {
    const carousel = document.getElementById('carousel');
    const slides = carousel.querySelector('ul');
    let slideWidth = slides.querySelector('li').offsetWidth; 
    let currentSlide = 0;

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.children.length;
        updateSlide();
    }

    function updateSlide() {
        const offset = -1 * currentSlide * slideWidth;
        slides.style.transform = `translateX(${offset}px)`;
    }
    setInterval(nextSlide, 5000);
};