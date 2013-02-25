$(function(){

    console.log('loading pinit');

    var urlEncode = function(map) {
        return _.reduce(map, function(memo, value, key) {
            if (memo !== '?') memo += '&';
            return memo += key + '=' + encodeURIComponent(value);
        }, '?'); 
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

    $('article section img').after(function() {

        var $header = $(this).parents('article').find('header a'),
            url = $header.attr('href'),
            media = $(this).attr('src'),
            description = $header.text().trim(),
            $link = $(this).parent();
            pinUrl = pinterestUrl(url, media, description);

        $link.attr('href', pinUrl);

        return '<a class="pinit" href="' + pinUrl + '"></a>';

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
