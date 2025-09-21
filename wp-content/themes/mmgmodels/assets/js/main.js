document.addEventListener("DOMContentLoaded", function() {
    const gallery = document.querySelector('.wp-block-gallery-2');
    
    if (gallery) {
        lightGallery(gallery, {
            selector: 'a',
            download: false,
        });
    }
});
