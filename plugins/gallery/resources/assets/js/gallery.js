function initGallery() {
    var container = document.querySelector('#list-photo');
    var masonry;
    // initialize Masonry after all images have loaded
    if (container) {
        imagesLoaded(container, function () {
            masonry = new Masonry(container);
        });
    }

    jQuery('#list-photo').lightGallery({
        loop: true,
        thumbnail: true,
        fourceAutoply: false,
        autoplay: false,
        pager: false,
        speed: 300,
        scale: 1,
        keypress: true
    });

    jQuery(document).on('click', '.lg-toogle-thumb', function () {
        $(document).find('.lg-sub-html').toggleClass('inactive');
    });
}

$(document).ready(function () {
   initGallery();
});