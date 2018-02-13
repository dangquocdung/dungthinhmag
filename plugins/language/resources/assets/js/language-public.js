function initLanguageSwitcher() {
    jQuery('.language-wrapper .dropdown .dropdown-toggle').on('click', function (e) {
        e.preventDefault();
        if (jQuery(this).hasClass('active')) {
            jQuery('.language-wrapper .dropdown .dropdown-menu').hide();
            jQuery(this).removeClass('active');
        } else {
            jQuery('.language-wrapper .dropdown .dropdown-menu').show();
            jQuery(this).addClass('active');
        }
    });
    jQuery(document).on('click', function (event) {
        if (jQuery(event.target).closest('.language-wrapper').length === 0) {
            jQuery('.language-wrapper .dropdown .dropdown-menu').hide();
            jQuery('.language-wrapper .dropdown .dropdown-toggle').removeClass('active');
        }
    });
}

$(document).ready(function () {
   initLanguageSwitcher();
});