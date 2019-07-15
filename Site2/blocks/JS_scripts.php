<script>
    $('#showMenu').click (function () {
        if ($('#mobileMenu').is(':visible')) {
            $('#mobileMenu').hide ();
        } else {
            $('#mobileMenu').show ();
        }
    });

    $(document).scroll (function () { /* если скролим страницу*/
        if ($(document).width () > 1000) {
            if ($(document).scrollTop () > $('header').height () + 30) /* если то сколько мы проскролили больше чем высота header и еще 19px*/
                $('nav').addClass ('fixed');
            else 
                $('nav').removeClass ('fixed');
        }
    });

    window.onresize = function (event) { /* при повороте экрана прячет меню */
        $('#mobileMenu').hide ();
    };

    var width = $(window).width ();
    $(window).resize (function () {
        if ($(this).width () != width) {
            width = $(this).width ();
            $('mobileMenu').hide ();
            $('nav').removeClass ('fixed');
        }
    });
</script>