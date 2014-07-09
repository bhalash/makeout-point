$(function() {
    // For google-code-prettify
    $('pre').each(function() {
        $(this).addClass('prettyprint');
    });    

    if ($('.content').height() < $(window).height())
        $('.content').css('min-height', $(window).height() + 'px');

    // Remove underline from hyperlink images. 
    $('article a').each(function() {
        if ($(this).children('img').length > 0) {
            $(this).hover(function() {
                $(this).css('border-bottom', 'none');
            });
        }
    });
});
