document.addEventListener('DOMContentLoaded', function() {
    const thumbnails = document.querySelectorAll('.gallery-thumbnails img');
    const mainImages = document.querySelectorAll('.main-image img');
    const prevButton = document.querySelector('.prev-slide');
    const nextButton = document.querySelector('.next-slide');
    let currentIndex = 0;

    // Thumbnail click handler
    thumbnails.forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', () => {
            setActiveImage(index);
        });
    });

    // Previous button click handler
    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + mainImages.length) % mainImages.length;
        setActiveImage(currentIndex);
    });

    // Next button click handler
    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % mainImages.length;
        setActiveImage(currentIndex);
    });

    function setActiveImage(index) {
        // Update thumbnails
        thumbnails.forEach(thumb => thumb.classList.remove('active'));
        thumbnails[index].classList.add('active');

        // Update main images
        mainImages.forEach((img, i) => {
            if (i === index) {
                img.style.opacity = '1';
                img.style.zIndex = '1';
            } else {
                img.style.opacity = '0';
                img.style.zIndex = '0';
            }
        });

        currentIndex = index;
    }

    // Initialize with first image
    setActiveImage(0);
}); 