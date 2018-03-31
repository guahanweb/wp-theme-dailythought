(function ($) {
    $('a.social.external').on('click', function (e) {
        window.open(this.getAttribute('href'), 'popup', 'width=600,height=400');
        return false;
    });
})(jQuery);
