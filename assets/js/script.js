$(document).ready(function() {
	$("#mobile-btn").on("click", function() {
		$(".header__menu").slideToggle();
	});
	$(window).on("resize", function() {
		if ($(window).innerWidth() > 768) {
			$(".header__menu").removeAttr("style");
		}
	});
	$(window).on("scroll", function() {
		if (window.pageYOffset > 0) {
			$(".header__menu").addClass("scrolled");
		} else {
			$(".header__menu").removeClass("scrolled");
		}
	});
});