document.addEventListener('DOMContentLoaded', function() {
    // Initialize all sliders
    const sliders = document.querySelectorAll('.properties-slider, .testimonials-slider');
    sliders.forEach(initializeSlider);

    // Initialize FAQ slider
    const faqSlider = document.querySelector('.faq-grid');
    if (faqSlider) {
        initializeSlider(faqSlider.parentElement);
    }

    // Initialize smooth scroll for navigation links
    const navLinks = document.querySelectorAll('a[href^="#"]');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});

function initializeSlider(sliderContainer) {
    const slider = sliderContainer.querySelector('.properties-grid, .testimonials-grid, .faq-grid');
    const slides = slider.children;
    const totalSlides = slides.length;
    let currentSlide = 0;

    // Get slider controls
    const prevButton = sliderContainer.querySelector('.prev');
    const nextButton = sliderContainer.querySelector('.next');
    const currentElement = sliderContainer.querySelector('.current');
    const totalElement = sliderContainer.querySelector('.total');

    // Update total slides display
    if (totalElement) {
        totalElement.textContent = `/ ${String(totalSlides).padStart(2, '0')}`;
    }

    // Update current slide display
    function updateCurrentSlide() {
        if (currentElement) {
            currentElement.textContent = String(currentSlide + 1).padStart(2, '0');
        }
    }

    // Show current slide
    function showSlide(index) {
        // Hide all slides
        Array.from(slides).forEach(slide => {
            slide.style.display = 'none';
        });

        // Calculate visible slides based on screen width
        let visibleSlides = 3;
        if (window.innerWidth <= 1200) {
            visibleSlides = 2;
        }
        if (window.innerWidth <= 768) {
            visibleSlides = 1;
        }

        // Show visible slides
        for (let i = 0; i < visibleSlides; i++) {
            const slideIndex = (index + i) % totalSlides;
            if (slides[slideIndex]) {
                slides[slideIndex].style.display = 'block';
            }
        }
    }

    // Initialize buttons
    if (prevButton) {
        prevButton.addEventListener('click', () => {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(currentSlide);
            updateCurrentSlide();
        });
    }

    if (nextButton) {
        nextButton.addEventListener('click', () => {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
            updateCurrentSlide();
        });
    }

    // Initialize first slide
    showSlide(currentSlide);
    updateCurrentSlide();

    // Handle window resize
    window.addEventListener('resize', () => {
        showSlide(currentSlide);
    });
}

// Add intersection observer for fade-in animations
const fadeElements = document.querySelectorAll('.feature-card, .property-card, .testimonial-card, .faq-item');
const fadeObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in');
            fadeObserver.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.1
});

fadeElements.forEach(element => {
    element.classList.add('fade-element');
    fadeObserver.observe(element);
}); 