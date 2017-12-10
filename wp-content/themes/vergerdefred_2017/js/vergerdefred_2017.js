( function() {

    // if( $("body").hasClass("home") ) {
    //     var positionElementInPage = $('.overlay').offset().top;
    //     $( window ).resize(function() {
    //         positionElementInPage = $('.overlay').offset().top;
    //     });
    // }else {
    //     var positionElementInPage = $('.entry-title').offset().top;
    //     $( window ).resize(function() {
    //         positionElementInPage = $('.entry-title').offset().top;
    //     });
    // };

    var positionElementInPage = $('.overlay').offset().top;
    $( window ).resize(function() {
        positionElementInPage = $('.overlay').offset().top;
    });

    $(window).scroll(
        function() {
            if ($(window).scrollTop() > positionElementInPage) {
                // fixed
                $('.site-header').addClass("fixedTop");
            } else {
                // unfixed
                $('.site-header').removeClass("fixedTop");
            }
        }
    );

} )( jQuery );