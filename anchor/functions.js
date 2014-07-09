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
    $('nav .menu-wrap').slideDown();
    $('nav .button').css('background-color', '#ba3434');
    menuIsOpen = true;
}

function closeMenu() {
    $('nav .menu-wrap').slideUp();
    $('nav .button').css('background-color', '#343537');
    menuIsOpen = false;
}

$('nav .button').click(function() {
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
