document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const primaryMenuContainer = document.querySelector('.primary-menu-container');
    
    if (menuToggle && primaryMenuContainer) {
        menuToggle.addEventListener('click', function() {
            primaryMenuContainer.classList.toggle('active');
            menuToggle.setAttribute('aria-expanded', 
                menuToggle.getAttribute('aria-expanded') === 'true' ? 'false' : 'true'
            );
        });
    }

    // Slider Controls
    const sliderSections = document.querySelectorAll('.featured-properties, .testimonials, .faq-section');
    
    sliderSections.forEach(section => {
        const prevButton = section.querySelector('.prev-slide');
        const nextButton = section.querySelector('.next-slide');
        const itemsContainer = section.querySelector('.properties-grid, .testimonials-grid, .faq-grid');
        const currentSlideEl = section.querySelector('.slide-numbers .current');
        const totalSlidesEl = section.querySelector('.slide-numbers .total');
        
        if (prevButton && nextButton && itemsContainer) {
            let currentSlide = 1;
            const items = itemsContainer.children;
            const totalSlides = Math.ceil(items.length / 3);
            
            // Update total slides display
            if (totalSlidesEl) {
                totalSlidesEl.textContent = `/ ${String(totalSlides).padStart(2, '0')}`;
            }

            // Show only first 3 items initially
            updateVisibleItems();

            prevButton.addEventListener('click', () => {
                if (currentSlide > 1) {
                    currentSlide--;
                    updateVisibleItems();
                }
            });

            nextButton.addEventListener('click', () => {
                if (currentSlide < totalSlides) {
                    currentSlide++;
                    updateVisibleItems();
                }
            });

            function updateVisibleItems() {
                const startIdx = (currentSlide - 1) * 3;
                const endIdx = startIdx + 3;

                // Hide all items
                Array.from(items).forEach((item, idx) => {
                    item.style.display = (idx >= startIdx && idx < endIdx) ? 'block' : 'none';
                });

                // Update current slide number
                if (currentSlideEl) {
                    currentSlideEl.textContent = String(currentSlide).padStart(2, '0');
                }

                // Update button states
                prevButton.disabled = currentSlide === 1;
                nextButton.disabled = currentSlide === totalSlides;
            }
        }
    });

    // Smooth Scroll for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Feature Card Hover Effect
    const featureCards = document.querySelectorAll('.feature-card');
    featureCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
        });
    });

    // Stats Counter Animation
    const stats = document.querySelectorAll('.stat-number');
    const observerOptions = {
        threshold: 0.5
    };

    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const value = parseInt(target.textContent);
                animateValue(target, 0, value, 2000);
                statsObserver.unobserve(target);
            }
        });
    }, observerOptions);

    stats.forEach(stat => statsObserver.observe(stat));

    function animateValue(element, start, end, duration) {
        const range = end - start;
        const increment = range / (duration / 16);
        let current = start;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= end) {
                clearInterval(timer);
                current = end;
            }
            element.textContent = Math.floor(current) + (element.textContent.includes('+') ? '+' : '');
        }, 16);
    }
});