(function(window, document) {
    var menuIsOpen = false;

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

    function initialMenuOpen() {
        $('.comments-wrap').css('display', 'block');
        $('body,html').animate({'scrollTop' : $(document).height()}, 400);
        $('.comments .comments-button').css('background-color', '#ba3434');
        menuIsOpen = true;
    }

    $('.comments-button, .menu-button').click(function() {
        if (!menuIsOpen) {
            openMenu($(this));
        } else {
            closeMenu($(this));
        }
    });
})(window, document);
