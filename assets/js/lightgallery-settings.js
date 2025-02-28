document.addEventListener("DOMContentLoaded", function() {
    const galleryElement = document.querySelector('.wp-block-gallery');

    if (galleryElement) {
        const images = galleryElement.querySelectorAll('img');
        images.forEach(img => {
            img.setAttribute('data-src', img.src); // Use img src as the data-src
            img.classList.add('lg-object'); // LightGallery class
        });

        lightGallery(galleryElement, {
            selector: 'img',
            mode: 'lg-fade',
            speed: 600,
            closable: true,
            controls: true,
            counter: true,
            download: true,
            
        });
    }
});
