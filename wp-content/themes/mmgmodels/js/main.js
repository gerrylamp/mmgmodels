$(document).ready(function(){

	var window_width = $(window).width();

    $(window).scroll(function(){ 
	    var windowScroll = $(this).scrollTop();

        // Fix Header
        if ($('.fixheadpos').length >= 1) {
            var fixbtmbg = $('.fixheadpos').offset().top;
            if (windowScroll > fixbtmbg && window_width > 1024){
                $('#header').addClass('fixheader');
            } else {
                $('#header').removeClass('fixheader');
            }
        }

		if ($('#book_cta').length >= 1) {
            var fixbtmbg = $('#book_cta').offset().top;
            if (windowScroll > fixbtmbg && window_width > 1024){
                $('#book_cta').addClass('fixbg');
            } else {
                $('#book_cta').removeClass('fixbg');
            }
        }

	});

	// Burger Menu
	$(".burger").on("click", function () {
		$(this).toggleClass("open");
		$(".main_nav").toggleClass("active");
		$("body").toggleClass("no-scroll"); // disable/enable scrolling
	});

	$(".close_btn").on("click", function () {
		$(".main_nav").removeClass("active");
		$(".burger").removeClass("open");
		$("body").removeClass("no-scroll"); // re-enable scrolling
	});

    //Carousel
	$(".owl-carousel").owlCarousel({
		loop: true,
		nav: true,
		dots: true,
		responsiveRefreshRate: 0,
		autoplay: true,
		autoplayHoverPause: true,
		responsive: {
		  0: {
			items: 1,
		  },
		  601: {
			items: 2,
		  },
		  1001: {
			items: 3,
		  },
		  1301: {
			items: 4,
		  },
		},
	});

	function swap_this(){
		if(window_width <= 600){
			$('.social_icons').appendTo('.main_nav');

		} else if(window_width > 600 && window_width <= 800){
			$('.social_icons').appendTo('.main_nav');

		} else if(window_width > 800 && window_width <= 1000){
			$('.social_icons').appendTo('.main_nav');
			
		} else {
			$('.social_icons').appendTo('.header_con');
		}
	}

	swap_this();

	$(window).resize(function(){
		window_width = $(this).width();

		swap_this();
	});

	new WOW().init();

	


});