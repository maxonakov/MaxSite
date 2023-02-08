(function ($) {

	/* search toggle */
    $('body').click(function(evt){
      if(!( $(evt.target).closest('.header-search-content').length || $(evt.target).hasClass('search-toggle') ) ){
        if ($(".search-toggle").hasClass("search-active")){
        $(".search-toggle").removeClass("search-active");
        $(".search-box").slideUp("slow");
      }
    }
    });
    $(".search-toggle").click(function(){
    $(".search-box").toggle("slow");
          if ( !$(".search-toggle").hasClass("search-active")){
        $(".search-toggle").addClass("search-active");

    }
    else{
    $(".search-toggle").removeClass("search-active");
    }
  });
	
	
  // Frontpage Slider
  const featuredSlider = new Swiper ('.bizness-slider-warapper', {
    // Optional parameters
    loop: true,
    speed: 300,
    autoplay: {
      delay: 5000,
    },
    coverflowEffect: {
      rotate: 30,
      slideShadows: true
    },
    // If we need pagination
    pagination: {
      el: '.bizness-swiper-pagination',
      clickable:!0
    },
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  // Testimonials Swiper
  function initParadoxWay(){"use strict";if($(".testimonials-carousel").length>0){var j2=new Swiper(".testimonials-carousel .swiper-container",{
    preloadImages:!1,
    slidesPerView:1,
    loop:!0,
    grabCursor:!0,
    mousewheel:!1,
    initialSlide:1,
    pagination:{el:'.tc-pagination',clickable:!0,dynamicBullets:!0,},
    navigation:{nextEl:'.listing-carousel-button-next',prevEl:'.listing-carousel-button-prev',},
    breakpoints:{
      1024:{slidesPerView:3,},
      576:{slidesPerView:2,},
      320:{slidesPerView:1,}
      ,}
    })}}$(document).ready(function(){initParadoxWay()})
   
    jQuery('.site-header #primary-menu').meanmenu({
        meanMenuContainer: '.site-header .main-navigation',
        meanScreenWidth: "767",
        meanRevealPosition: "right",
    });
	$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $(".site-header").addClass("fixed-site-header");
    } else {
        $(".site-header").removeClass("fixed-site-header");
    }
  });

  /* back-to-top button*/
	$('.back-to-top').hide();
	$('.back-to-top').on("click", function (e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, 'slow');
	});

	$(window).scroll(function () {
		var scrollheight = 400;
		if ($(window).scrollTop() > scrollheight) {
			$('.back-to-top').fadeIn();

		} else {
			$('.back-to-top').fadeOut();
		}
	});
  
})(jQuery);