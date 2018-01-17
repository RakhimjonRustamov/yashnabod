
////////////////////////////Background image slideshow fade/////////////////////////

 $(document).ready(function() {
    $("#container-fluid").backgroundCycle({
        imageUrls:
        [
            '../images/Wallpapers/Wallpaper1.jpg',
            '../images/Wallpapers/Wallpaper2.jpg',
            '../images/Wallpapers/Wallpaper3.jpg'
        ],
        fadeSpeed: 4000,
        duration: 5000,
        backgroundSize: SCALING_MODE_COVER
    });
});

var currentImageIndex = 0;
var imageIds = new Array();
var fadeSpeed;

var SCALING_MODE_NONE = 0;
var SCALING_MODE_STRETCH = 1;
var SCALING_MODE_COVER = 2;
var SCALING_MODE_CONTAIN = 3;

$.fn.backgroundCycle = function(options)
{
    var settings = $.extend({
        imageUrls: [],
        duration: 3000,
        fadeSpeed: 5000,
        backgroundSize: SCALING_MODE_NONE
    }, options);

    fadeSpeed = settings.fadeSpeed;

    var marginTop = this.css('margin-top');
    var marginRight = this.css('margin-right');
    var marginBottom = this.css('margin-bottom');
    var marginLeft = this.css('margin-left');

    if
      (!this.is("#container-fluid"))
    {
        this.css({
            position: 'relative'
        });
    }

    var contents = $(document.createElement('div'));

    var children = this.children().detach();
    contents.append(children);

    imageIds = new Array();

    for (var i = 0; i < settings.imageUrls.length; i++) {
        var id = 'bgImage' + i;
        var src = settings.imageUrls[i];
        var cssClass = 'cycle-bg-image';

        var image = $(document.createElement('div'));
        image.attr('id', id);
        image.attr('class', cssClass);

        var sizeMode;

        switch (settings.backgroundSize) {
            default:
                sizeMode = settings.backgroundSize;
                break;
            case SCALING_MODE_NONE:
                sizeMode = 'auto';
                break;
            case SCALING_MODE_STRETCH:
                sizeMode = '100% 100%';
                break;
            case SCALING_MODE_COVER:
                sizeMode = 'cover';
                break;
            case SCALING_MODE_CONTAIN:
                sizeMode = 'contain';
                break;
        }
        image.css({
            'background-image': "url('" + src + "')",
            'background-repeat': 'no-repeat',
            'background-attachment': 'fixed',
            'background-position': 'center',
            'background-size': sizeMode,
            '-moz-background-size': sizeMode,
            '-webkit-background-size': sizeMode,
            position: 'absolute',
            left: 0,
            top: 0,
            right: 0,
            bottom: 0,

        });

        this.append(image);

        imageIds.push(id);
    }

    contents.css({
        position: 'absolute',
        left: marginLeft,
        top: marginTop,
        right: marginRight,
        bottom: marginBottom,
        'background-image': 'linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7))'
    });

    this.append(contents);
    $('.cycle-bg-image').hide();
    $('#' + imageIds[0]).show();
    setInterval(cycleToNextImage, settings.duration);
};

function cycleToNextImage() {
    var previousImageId = imageIds[currentImageIndex];

    currentImageIndex++;

    if (currentImageIndex >= imageIds.length) {
        currentImageIndex = 0;
    }

    var options = {
        duration: fadeSpeed,
        queue: false
    };

    $('#' + previousImageId).fadeOut(options);
    $('#' + imageIds[currentImageIndex]).fadeIn(options);
}


//////////////////////////////////end of slisdeshow/////////////////////////




