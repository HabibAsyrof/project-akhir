let slideIndex = 0;

function showSlides() {
    const slides = document.querySelectorAll('.slide');
    slides.forEach((slide, index) => {
        slide.style.transform = `translateX(-${slideIndex * 100}%)`;
    });
}

function nextSlide() {
    const slides = document.querySelectorAll('.slide');
    slideIndex = (slideIndex + 1) % slides.length;
    showSlides();
}

function prevSlide() {
    const slides = document.querySelectorAll('.slide');
    slideIndex = (slideIndex - 1 + slides.length) % slides.length;
    showSlides();
}

// Initialize the slider
showSlides();

// Optional: Auto slide every 3 seconds
setInterval(nextSlide, 3000);
