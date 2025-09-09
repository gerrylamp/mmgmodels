document.addEventListener("DOMContentLoaded", function() {
    const gallery = document.querySelector('.wp-block-gallery');
    
    if (gallery) {
        lightGallery(gallery, {
            selector: 'a',
            download: false,
        });
    }
});
