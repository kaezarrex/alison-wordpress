$(function(){

    // Setup menu backgrounds
    $('.nav-menu > li > a').each(function(index) {
        var px = 100 + 6 * index;
        $(this).css('left', px * -1 + 'px');
        $(this).find('.nav-menu-item').css('left', px + 'px');
    });

    // Setup sub-menu show/hide
    $('.nav-sub-menu').parent().click(function(event) {
        event.preventDefault();
        $(this).children('.nav-sub-menu').slideToggle();
    });
    $('.nav-sub-menu').hide();

});
