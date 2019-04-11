$(document).ready(function() {
    var btn = $('#btn-to-top');
    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.removeClass('hide-btn-to-top');
        } else {
            btn.addClass('hide-btn-to-top');
        }
    });
    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });
});
