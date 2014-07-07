$(function() {
    // Remove underline from hyperlink images. 
    $('article a').each(function() {
        if ($(this).children('img').length > 0) {
            $(this).hover(function() {
                $(this).css('border-bottom', 'none');
            });
        }
    });
});
