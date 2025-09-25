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


	$('.wp-block-gallery-1').addClass('models_carousel owl-carousel banner');
	
    //Carousel
	$(".owl-carousel.multiple").owlCarousel({
		loop: true,
		nav: true,
		dots: true,
		responsiveRefreshRate: 0,
		autoplay: true,
		autoplayHoverPause: true,
		navContainer: '.owl-controls-wrapper .owl-nav',
    	dotsContainer: '.owl-controls-wrapper .owl-dots',
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
	$(".owl-carousel.banner").owlCarousel({
		loop: true,
		nav: true,
		dots: true,
		items: 1,               // always show 1 item
		responsiveRefreshRate: 0,
		responsive: {           // optional, can also remove entirely
			0: { items: 1 },
			601: { items: 1 },
			1001: { items: 1 },
			1301: { items: 1 }
		}
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


	// Light Gallery
	const gallery = document.querySelector('.wp-block-gallery-2');
    
    if (gallery) {
        lightGallery(gallery, {
            selector: 'a',
            download: false,
        });
    }
});