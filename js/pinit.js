$(function(){

    var urlEncode = function(map) {
        return _.reduce(map, function(memo, value, key) {
            if (memo !== '?') memo += '&';
            return memo += key + '=' + encodeURIComponent(value);
        }, '?'); 
    };

    var openPopup = function(name, url, width, height){

        var properties = [
                'width='+width,
                'height='+height,
                'location=false',
                'menubar=false',
                'resizable=false',
                'status=true',
                'toolbar=false',
                'scrollbars=yes'
            ],
            popup = window.open(url, name, properties.join(','));

        if(window.focus) {
            popup.focus();
        }

        return popup;
    };

    var pinterestUrl = function(url, media, description) {

        var result = '//pinterest.com/pin/create/button/';

        result += urlEncode({
            url: url,
            media: media,
            description: description
        });

        return result;
    };

    $('.post img').after(function() {

        var $header = $(this).parents('.post').find('.post-title a'),
            url = $header.attr('href'),
            media = $(this).attr('src'),
            description = $header.text().trim(),
            $link = $(this).parent(),
            pinUrl = pinterestUrl(url, media, description);

        $link.click(function() {
            event.preventDefault();
            openPopup('Pin This!', pinUrl, 680, 280);
        });

        return '<a class="pinit" href="#"></a>';

    });

    $('.pinit').each(function() {
        var self = this;

        $(this).parent().children().hover(function() {
            $(self).css('display', 'block');
        }, function() {
            $(self).css('display', 'none');
        });

    });


});
