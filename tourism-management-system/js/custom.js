$(document).ready(function () {
	$("#menu_btn").click(function () {
		$(".slide_menu, .slide_menu_bg").toggleClass("slide-left");
	});

	$(".close, .slide_menu_bg").click(function () {
		$(".slide_menu, .slide_menu_bg").removeClass("slide-left");
	});
});
$(document).ready(function () {
	var owl = $('.owl-theme');
	owl.owlCarousel({
		margin: 15,
		nav: true,

		loop: true,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 2
			},
			600: {
				items: 2
			},
			1000: {
				items: 2
			}
		}
	})
});

$(document).ready(function () {
	var owl = $('.owl-inner');
	owl.owlCarousel({
		margin: 15,
		nav: true,

		loop: true,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 4
			}
		}
	})
});


$(document).ready(function () {
	$(".more, .nav-tab>li").click(function () {
		$(".selected").toggleClass("actives");
	});

	$(".more").click(function () {
		$(".nav-tab>li.active").removeClass("active");
	});

});




$(window).scroll(function () {
	if ($(this).scrollTop() > 600) {
		$('header').addClass('fix-nav');
	} else {
		$('header').removeClass('fix-nav');
	}
});
