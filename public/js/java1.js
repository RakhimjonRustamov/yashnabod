// ----------------------------------------navbar javascript------------------------------------------

$(window).scroll(function() {
    if ($(this).scrollTop() > 20) {
        $('#navbar').css({ 'background-color': 'rgba(255, 255, 255, 1)', 'border-bottom': '1px solid #24B24B' });

    } else {
        $('#navbar').css({ 'background-color': 'rgba(0,0,0,0)', 'transition': '.5s ease', 'border-bottom': '0' });

    }

    if ($(this).scrollTop() > 20) {
        $('.dropdown-content ').css({ 'background-color': 'rgba(255, 255, 255, 1)' });

    } else {
        $('.dropdown-content ').css({ 'background-color': 'rgba(0,0,0,0)', 'transition': '.5s ease', 'border-bottom': '0', 'color': 'black' });

    }

});


$(window).bind('DOMMouseScroll', function(e) {
    if (e.originalEvent.detail > 100) {
        //scroll down
        $('.navbar-trans').addClass('afterscroll');
    } else {
        //scroll up
        $('.navbar-trans').removeClass('afterscroll');
    }

    //prevent page fom scrolling
    return true;
});

//IE, Opera, Safari
$(window).bind('mousewheel', function(e) {
    if (e.originalEvent.wheelDelta < 0) {
        $('.navbar-trans').addClass('afterscroll');
    } else {
        //scroll up
        $('.navbar-trans').removeClass('afterscroll');
    }

    //prevent page fom scrolling
    return true;
});


// ---------------------------------------- end of navbar javascript -------------------------------




// ---------------------------------------- slideanim ---------------------------------------------
$(window).scroll(function() {
    $(".slideanim").each(function() {
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
        if (pos < winTop + 730) {
            $(this).addClass("slide");
        } else {
            $(this).removeClass('slide');
        }
    });
});

// --------------------------------------- end of slideanim ------------------------------------------------




// ---------------------------------------- top scroller ---------------------------------------------------

$(document).ready(function() {

    $(window).scroll(function() {
        if ($(this).scrollTop() > 150) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });

});

// --------------------------------------------- end of top scroller -------------------------------------------







// ----------------------------------------------- accordion button ------------------------------------------- 

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    }
}


// ----------------------------------------------- end of accordion button -----------------------------------------------


/* main page counter js */
$(document).ready(function() {
    $(window).scroll(function() {

        $('.counter').each(function() {
            var $this = $(this),
                countTo = $this.attr('data-count');
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            if (bottom_of_window > bottom_of_object) {

                $({ countNum: $this.text() }).animate({
                        countNum: countTo
                    },

                    {

                        duration: 2000,
                        easing: 'linear',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                            //alert('finished');
                        }

                    });
            }
        });
    });
});



