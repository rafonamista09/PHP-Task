(function($) {
   
    $.fn.animateMyForm = function(options) {

        element = this;

        var settings = $.extend({

            'step' : null
        
        }, options );        

        var step = settings.step;

        var cw = $('body').outerWidth();

        $(this).click(function(e) {

            e.preventDefault();

            if (  step == 'next'  ) {

                $(this).closest('.formInputHolder').animate({

                    'right' : '-' + cw + 'px',
                    'opacity' : 0

                }, 300 , function() {

                    window.location.href = 'result.php?string=' + $('#string').val() ;

                });

            } else if ( step == 'back' ) {

                $(this).closest('.formInputHolder2').animate({

                    'left' : '-' + cw + 'px',
                    'opacity' : 0

                }, 300 , function() {

                    window.location.href = 'index.php';

                });

            }

        });

    }

})(jQuery);