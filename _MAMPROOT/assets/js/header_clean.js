// HEIGHT OF NAV
const navHeight = parseFloat($("header").css("height"));
$(".header-offset").css("height", navHeight)


// SCROLL BUTTONS
$(".header-nav__scroll").on("click", function () {
	const data = $(this).attr("data-name");
	$('html,body').animate({ scrollTop: $(`#${data}`).offset().top - navHeight }, 400);
});

// HAMBURGER
$(".header-hamburger").on("click", function () {
	$(this).toggleClass("hamburger-change");
	$(".header-hamburger-nav").toggleClass("header-hamburger-nav--show");
	$(".header-hamburger__blackout").toggleClass("header-hamburger__blackout--show");
});

$(".header-nav__scroll").on("click", function () {
	$(".header-hamburger").removeClass("hamburger-change");
	$(".header-hamburger-nav").removeClass("header-hamburger-nav--show");
	$(".header-hamburger__blackout").removeClass("header-hamburger__blackout--show");
});

$(".header-hamburger--expand").on("click", function () {
	$(this).toggleClass("header-hamburger--carat-flip");
	$(".header-hamburger__list__nested").toggleClass("hider");
});

$(".header-hamburger__blackout").on("click", function () {
	$(".header-hamburger").toggleClass("hamburger-change");
	$(".header-hamburger-nav").toggleClass("header-hamburger-nav--show");
	$(".header-hamburger__blackout").toggleClass("header-hamburger__blackout--show");
});