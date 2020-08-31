// ==================== Height of nav
var navHeight = parseFloat($("header").css("height"));
$(".header-offset").css("height", navHeight)


// SCROLL BUTTONS

$(".header-nav__scroll").on("click", function () {
	var data = $(this).attr("data-name");
	$('html,body').animate({ scrollTop: $(`#${data}`).offset().top - navHeight }, 400);
});

// HAMBURGER

$(".header-hamburger").on("click", function () {
	$(this).toggleClass("hamburger-change");
	$(".header-hamburger-nav").toggleClass("header-hamburger-nav--show");
	$(".header-hamburger__blackout").toggleClass("header-hamburger__blackout--show")
});

$(".header-nav__scroll").on("click", function () {
	$(".header-hamburger").removeClass("hamburger-change");
	$(".header-hamburger-nav").removeClass("header-hamburger-nav--show");
	$(".header-hamburger__blackout").removeClass("header-hamburger__blackout--show")
});

$(".header-hamburger--expand").on("click", function () {
	$(this).toggleClass("header-hamburger--carat-flip");
	$(".header-hamburger__list__nested").toggleClass("hider");
});
