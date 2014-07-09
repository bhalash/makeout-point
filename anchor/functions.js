$(function() {
    // For google-code-prettify
    $('pre').each(function() {
        $(this).addClass('prettyprint');
    });    

    // Get a better solution, Mark.
    $('.content-wrap').css('min-height', $(window).height() + 'px');
});

var menuIsOpen = false;

function openMenu() {
    $('.menu').slideDown();
    menuIsOpen = true;
}

function closeMenu() {
    $('.menu').slideUp();
    menuIsOpen = false;
}

$('.menu-button').click(function() {
    if (!menuIsOpen) {
        openMenu();
    } else {
        closeMenu();
    }
});

$('body').keyup(function(k) {
    if (k.keyCode == 27) {
        if (menuIsOpen) {
            closeMenu();
        }
    }
});
