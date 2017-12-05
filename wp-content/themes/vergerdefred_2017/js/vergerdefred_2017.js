
	$('.overlay').waypoint(function() {
		alert('you have scrolled to the h1!');
		$("header").toggleClass("header-scroll");
	});  