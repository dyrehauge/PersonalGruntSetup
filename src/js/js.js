$(document).ready(function() {
    function coverImages() {
        $('.imagecover').each(function() {
            var bgUrl = $(this).find('img').attr('src');
            $(this).css({
                'background': '#fff url(' + bgUrl + ') center center no-repeat',
                'background-size': 'cover',
                '-webkit-background-size': 'cover',
                '-moz-background-size': 'cover',
                '-o-background-size': 'cover',
                'height': '65%',
                '	overflow': 'hidden'
            });
            $(this).find('img').hide();
        });
    }

    coverImages();


var pullMenu = $('.pull_menu'); // The Pull menu item which trigger the whole menu
var header = $('nav'); // The header where all elements are inside.
var line1 = $('.line-1'); //Navigation Rectangle 1
var line2 = $('.line-2'); // Navigation Rectangle 2
var line3 = $('.line-3'); // Navigation Rectangle 3 

pullMenu.click(function() {
    header.toggleClass('pull_menu_in_out');
    line1.toggleClass('line-1-animate');
    line2.toggleClass('line-2-remove');
    line3.toggleClass('line-3-animate');
});


// price slider
/* jshint ignore:start */
// Code here will be ignored by JSHint.
var marginSlider = document.getElementById('slider-margin');

noUiSlider.create(marginSlider, {
    start: [ 350, 750 ],
    margin: 1,
    step: 50,
    connect: true,
    behaviour: 'drag',
    animate: true,
        decimals: 0,
    range: {
        'min': 0,
        'max': 1500
    }
});

var marginMin = document.getElementById('slider-margin-value-min'),
    marginMax = document.getElementById('slider-margin-value-max');

marginSlider.noUiSlider.on('update', function ( values, handle ) {
    if ( handle ) {
        marginMax.innerHTML = values[handle];
    } else {
        marginMin.innerHTML = values[handle];
    }
});
/* jshint ignore:end */
});