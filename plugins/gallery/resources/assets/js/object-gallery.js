function initSlider() {
    $("[data-slider='owl'] .owl-carousel").each(function () {
        var parent = $(this).parent();

        var items;
        var itemsDesktop;
        var itemsDesktopSmall;
        var itemsTablet;
        var itemsTabletSmall;
        var itemsMobile;

        if (parent.data('single-item') == 'true') {
            items = 1;
            itemsDesktop = 1;
            itemsDesktopSmall = 1;
            itemsTablet = 1;
            itemsTabletSmall = 1;
            itemsMobile = 1;
        } else {
            items = parent.data('items');
            itemsDesktop = [1199, parent.data('desktop-items') ? parent.data('desktop-items') : items];
            itemsDesktopSmall = [979, parent.data('desktop-small-items') ? parent.data('desktop-small-items') : 3];
            itemsTablet = [768, parent.data('tablet-items') ? parent.data('tablet-items') : 2];
            itemsMobile = [479, parent.data('mobile-items') ? parent.data('mobile-items') : 1];
        }

        $(this).owlCarousel({

            items: items,
            itemsDesktop: itemsDesktop,
            itemsDesktopSmall: itemsDesktopSmall,
            itemsTablet: itemsTablet,
            itemsTabletSmall: itemsTablet,
            itemsMobile: itemsMobile,

            navigation: parent.data('navigation') ? true : false,
            navigationText: false,
            slideSpeed: parent.data('slide-speed'),
            paginationSpeed: parent.data('pagination-speed'),
            singleItem: parent.data('single-item') ? true : false,
            autoPlay: parent.data('auto-play')
        });
    });
}

$(document).ready(function () {
    initSlider();
});