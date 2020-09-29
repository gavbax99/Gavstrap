// ==================== Create debounce functionality for window scroll
let debouncing = false;
window.onscroll = function () { 
	if (debouncing) {
		stickyScroll()
	}  else {
		setTimeout(() => {debouncing = true}, 50)
	}
};

// ==================== Height of nav
var navHeight = parseFloat($("header").css("height"));
$(".header-offset").css("height", navHeight)

// ==================== Function called on screen scroll (changes nav color)
function stickyScroll() {
	// Check if the scroll has already happened
	var checkIfStuck = $(".header-nav").hasClass("header-nav--scrolled");

	if (window.pageYOffset >= navHeight && !checkIfStuck) {
		// If it has not yet been scrolled, apply scroll graphics
		$(".header-logo--lite").addClass("hider");
		$(".header-logo--dark").removeClass("hider");
		$(".header-contact").addClass("header-contact--scrolled");
		$(".header").addClass("header--scrolled");
		$(".header-nav").addClass("header-nav--scrolled");
		$(".header-nav__sublist--display").addClass("header-nav__sublist--display--scrolled");
		$(".header-hamburger-nav").addClass("header-hamburger-nav--scrolled");
		$(".header-hamburger__contact").addClass("header-hamburger__contact--scrolled");
	} else if (window.pageYOffset < navHeight && checkIfStuck) {
		// If it has been scrolled, remove scroll graphics
		$(".header-logo--lite").removeClass("hider");
		$(".header-logo--dark").addClass("hider");
		$(".header-contact").removeClass("header-contact--scrolled");
		$(".header").removeClass("header--scrolled");
		$(".header-nav").removeClass("header-nav--scrolled");
		$(".header-nav__sublist--display").removeClass("header-nav__sublist--display--scrolled");
		$(".header-hamburger-nav").removeClass("header-hamburger-nav--scrolled");
		$(".header-hamburger__contact").removeClass("header-hamburger__contact--scrolled");
	}
};

function stickyInit() {
	// If loading in down the page, initialize the scroll
	if (window.pageYOffset >= navHeight) {
		$(".header-logo--lite").addClass("hider");
		$(".header-logo--dark").removeClass("hider");
		$(".header-contact").addClass("header-contact--scrolled");
		$(".header").addClass("header--scrolled");
		$(".header-nav").addClass("header-nav--scrolled");
		$(".header-nav__sublist--display").addClass("header-nav__sublist--display--scrolled");
		$(".header-hamburger-nav").addClass("header-hamburger-nav--scrolled");
		$(".header-hamburger__contact").addClass("header-hamburger__contact--scrolled");
	}
};

stickyInit();

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
