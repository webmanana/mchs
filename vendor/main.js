$(document).foundation();
Toggler.Init();
$(document).ready(function() {
	var animationParam = 250;

	$('.e-top-menu .top-menu__item').click(function(e) {
		$('.b-header').trigger('header-close', 'topmenu');
		e.preventDefault();

		if ($(window).width() < 480 ) {
			document.location.href = $(this).attr('href');
			return false;
		}

		var prevActive = $('.e-top-menu').find('.f-menu-open');
		if ( $(this).parent().hasClass('f-menu-open') ) {
			$('.b-header').trigger('header-close');
			return;
		}

		if( prevActive.length ) {
			prevActive.removeClass('f-menu-open');
			$( prevActive.find('a').data('href') ).slideUp(animationParam);
			$( $(this).data('href') ).slideToggle(animationParam);
			//$('.b-header').trigger('header-close', 'widget');
		} else {
			$( $(this).data('href') ).slideToggle(animationParam);
			if ( $(this).hasClass('top-menu__item--search') ) {
				$('.b-header .b-wrapper').addClass('f-on');
			}
		};
		$(this).parent().addClass('f-menu-open');
		$(this).closest('.b-header').addClass('f-topmenu-open');

		if ($(window).width() > 480 ) {
			return false;
		}

	});

	$('.b-header').on('telefon-show', function() {
		$('.telefon-block').slideDown(animationParam);
		$('#telefon-opener').addClass('f-active');
	});

	$('.b-header').on('map-show', function() {
		$('.svg-map').addClass('f-map-open');
		/*$('.svg-map__cont').slideDown();*/
		$('.svg-map__cont').slideDown(animationParam);
		$('#map-opener').addClass('f-active');
	});
$('.b-header').on('telefon-show', function() {
		$('.telefon-block').slideDown(animationParam);
		$('#telefon-opener').addClass('f-active');
	});

	$('.b-header').on('map-show', function() {
		$('.svg-map').addClass('f-map-open');
		/*$('.svg-map__cont').slideDown();*/
		$('.svg-map__cont').slideDown(animationParam);
		$('#map-opener').addClass('f-active');
	});

	$('.b-header').on('header-close', function(e, trigger) {

		if (trigger != 'topmenu') {
			var prevActive = $('.e-top-menu').find('.f-menu-open');
			prevActive.removeClass('f-menu-open');
			if (prevActive.find('a').hasClass('top-menu__item--search') && $(window).width() < 960 ) {
				$('.b-header .b-wrapper').removeClass('f-on');
			} else {
				$( prevActive.find('a').data('href') ).slideUp(animationParam, function() {
					$('.b-header .b-wrapper').removeClass('f-on');
				});
			}
		}

		if (trigger != 'telefon') {
			$('.telefon-block').slideUp(animationParam);
			$('#telefon-opener').removeClass('f-active');
		}

		if (trigger != 'map') {
			$('.svg-map').removeClass('f-map-open');
			$('.svg-map__cont').slideUp(animationParam);
			$('#map-opener').removeClass('f-active');
		}

		/*if (trigger) {
			$('#gosmonitor_widget_wrapper_main').hide();
			$('#mkgu-widget').hide()
		} else {
			$('#gosmonitor_widget_wrapper_main').show();
			$('#mkgu-widget').show()
		}*/

	});

	$('.e-submenu').click(function(e) {
		var targetNode = $( $(this).attr('href') ),
				targetNodeHeight = 0,
				targetTitle = $(this).closest('.top-menu__inner-holder').find('.top-menu__submenu-back-title'),
				curMenuItem = $(this).html();

		targetNode.children('.cell').each(function() {
			targetNodeHeight = targetNodeHeight < $(this).height() ? $(this).height() : targetNodeHeight;
		});

		targetNode.closest('.top-menu__inner').css({'min-height': targetNodeHeight + 70});

		targetNode.addClass('f-active');
		$(this).closest('.top-menu__inner-holder').addClass('f-submenu-open');
		targetTitle.html(curMenuItem);

		if( targetTitle.width() > 450 ) {
			targetTitle.addClass('f-long');
		} else {
			targetTitle.removeClass('f-long');
		}

		e.preventDefault();
	});

	$('.top-menu__submenu-back a').click(function(e) {
		$(this).closest('.top-menu__inner-holder')
			.removeClass('f-submenu-open')
			.find('.top-menu__submenu.f-active')
			.removeClass('f-active')
			.closest('.top-menu__inner').css({'min-height': 0});
		e.preventDefault();
	});

	$('#telefon-opener').click(function (e) {
		if( $(this).hasClass('f-active') ) {
			$('.b-header').trigger('header-close');
		} else {
			$('.b-header').trigger('header-close', 'telefon');
			$('.b-header').trigger('telefon-show');
		}
		e.preventDefault();
	});

	$('#map-opener').click(function (e) {
		if( $(this).hasClass('f-active') ) {
			$('.b-header').trigger('header-close');
		} else {
			$('.b-header').trigger('header-close', 'map');
			$('.b-header').trigger('map-show');
		}
		e.preventDefault();
	});
});
$(document).ready(function(){
  $('.announce_content').slick({
	  slidesToShow: 1,
	  dots: false,
	  prevArrow: $('.prev'),
      nextArrow: $('.next'),
	  focusOnSelect: true,
	  vertical: false,
	  arrows: true,
	  infinite: false,
	  draggable: false,
	  verticalSwiping: false,
	  responsive: [
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 1,
	        draggable: true
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        draggable: true,
	        asNavFor: false,
	        vertical: false,
	        asNavFor: false,
	        arrows: true
	      }
	    }
	  ]
  });
  $('.sidebar_content').slick({
	  slidesToShow: 1,
	  dots: false,
	  prevArrow: $('.prev_news'),
      nextArrow: $('.next_news'),
	  unslick: true,
	  focusOnSelect: true,
	  vertical: false,
	  arrows: true,
	  infinite: false,
	  draggable: false,
	  verticalSwiping: false,
	  responsive: [
		{
            breakpoint: 9999,
            settings: "unslick"
        },
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        draggable: true
	      }
	    },
		{
	      breakpoint: 650,
	      settings: {
	        slidesToShow: 2,
	        draggable: true
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        draggable: true,
	        asNavFor: false,
	        vertical: false,
	        asNavFor: false,
	        arrows: true
	      }
	    }
	  ]
  });
  $('.sidebar_content_oper').slick({
	  slidesToShow: 1,
	  dots: false,
	  prevArrow: $('.prev_oper'),
      nextArrow: $('.next_oper'),
	  unslick: true,
	  focusOnSelect: true,
	  vertical: false,
	  arrows: true,
	  infinite: false,
	  draggable: false,
	  verticalSwiping: false,
	  responsive: [
		  {
            breakpoint: 9999,
            settings: "unslick"
        },
		{
	      breakpoint: 650,
	      settings: {
	        slidesToShow: 2,
	        draggable: true
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: "unslick"
	    }
	  ]
  });
});
