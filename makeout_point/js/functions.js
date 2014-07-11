var isSmartphone = false;
var menuIsOpen = false;

function testSmartphone() {
    // Test if client is a smartphone. UA sniffing is iffy.
    var mob = 'mobile-device-test';
    $('body').append('<div class="' + mob + '">');
    isSmartphone = ($('.' + mob).css('display') === 'none') ? true : false;
    $('body').remove('.' + mob);
}

function openMenu() {
    // Same code in closeMenu(). I don't want to animate menu on phones.
    // It looks juddery, depending on the handset. 
    if (!isSmartphone) {
        $('nav .menu-wrap').slideDown();
    } else {
        $('nav .menu-wrap').toggle();
    }

    $('nav .button').css('background-color', '#ba3434');
    menuIsOpen = true;
}

function closeMenu() {
    if (!isSmartphone) {
        $('nav .menu-wrap').slideUp();
    } else {
        $('nav .menu-wrap').toggle();
    }

    $('nav .button').css('background-color', '#343537');
    menuIsOpen = false;
}

function spaceMenu() {
    // Three nav columns. Middle is centered.
    $('.menu').children('ul').first().css('float','left');
    $('.menu').children('ul').last().css('float','right');
}

$(function() {
    // For google-code-prettify
    $('pre').each(function() {
        $(this).addClass('prettyprint');
    });    

    spaceMenu();
    testSmartphone();
});

$('nav .button').click(function() {
    if (!menuIsOpen) {
        openMenu();
    } else {
        closeMenu();
    }
});
