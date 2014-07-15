var isSmartphone = false;
var menuIsOpen = false;

function testSmartphone() {
    // Test if client is a smartphone. UA sniffing is iffy.
    var mob = 'mobile-device-test';
    $('body').append('<div class="' + mob + '">');
    isSmartphone = ($('.' + mob).css('display') === 'none') ? true : false;
    $('body').remove('.' + mob);
}

function openMenu(button) {
    // Same code in closeMenu(). I don't want to animate menu on phones.
    // It looks juddery, depending on the handset. 
    var wrap = (button.hasClass('menu-button')) ? '.menu-wrap' : '.comments-wrap';

    if (!isSmartphone) {
        $(wrap).slideDown();

        if ($(button).hasClass('comments-button'))
            $('body,html').animate({'scrollTop' : $(document).height()}, 400);
    } else {
        $(wrap).toggle();
    }

    if (button.hasClass('button'))
        $(button).css('background-color', '#ba3434');

    menuIsOpen = true;
}

function closeMenu(button) {
    var wrap = (button.hasClass('menu-button')) ? '.menu-wrap' : '.comments-wrap';

    if (!isSmartphone) {
        $(wrap).slideUp();
    } else {
        $(wrap).toggle();
    }

    if (button.hasClass('button'))
        $(button).css('background-color', '#343537');
    menuIsOpen = false;
}

$(function() {
    // For google-code-prettify
    $('pre').each(function() {
        $(this).addClass('prettyprint');
    });    
    
    testSmartphone();

    // Opens the page at the comments if the comments link was followed.
    if (document.URL.indexOf('#comments') >= 0) {
        $('.comments-wrap').css('display', 'initial');
        $('body,html').animate({'scrollTop' : $(document).height()}, 400);
    }
});

$('.comments-button, .menu-button').click(function() {
    if (!menuIsOpen) {
        openMenu($(this));
    } else {
        closeMenu($(this));
    }
});
