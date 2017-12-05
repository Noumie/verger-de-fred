
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