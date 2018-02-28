( function() {

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

	 // MENU MOBILE
	// reset
	$(".hamburger.is-active").removeClass("is-active");
	// ouvrir le menu
	$(".hamburger").on("click", function(e) {
	  $("body").toggleClass("openMenu");
	  $(this).toggleClass("is-active");
	});
	// fermer le menu
	$(".mobile-fermeture").on("click", function(e) {
	  $("body").toggleClass("openMenu");
	  $(".hamburger").toggleClass("is-active");
	});
	// ajouter fleche sous-menu
	$(".menu-mobile li.menu-item-has-children").prepend("<div class='sub-menu-btn'><i class=\"fa fa-chevron-right\"></i></div>");
	$("li.menu-item-has-children .sub-menu-btn").on("click", function(e) {
	  var toggleBtn = $(this).parent();
	  if ( toggleBtn.hasClass("openSubMenu") )
	  {
		toggleBtn.removeClass("openSubMenu");
	  }
	  else
	  {
		$(".openSubMenu").removeClass('openSubMenu');
		toggleBtn.addClass("openSubMenu");
	  }
	});

} )( jQuery );
