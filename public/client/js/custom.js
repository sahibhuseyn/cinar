(function($){
    'use strict';

    // Pre-loader
    setTimeout(function() {
        $('body').addClass('loaded');
    }, 3500);


    // menu options
    var fixed_top = $(".main-menu");
    var scroll_top_open = $(".scroll-top");
    // var fixed_top_four = $(".menu-four");

    $(window).on('scroll', function(){
      
      if( $(this).scrollTop() > 100 ){  
        fixed_top.addClass("animated fadeInDown menu-fixed");
      }
      else{
        fixed_top.removeClass("animated fadeInDown menu-fixed");
      }

      if( $(this).scrollTop() > 800 ){  
        scroll_top_open.addClass("open");
      }
      else{
        scroll_top_open.removeClass("open");
      }
    });


	// jQuery for page scrolling feature - requires jQuery Easing plugin
	$('a.page-scroll').on('click', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1500, 'easeInOutExpo');
		event.preventDefault();
	});


	jQuery(window).on('load',function() {	
		//Isotope activation js codes
		var $gellary_img = $('.gallery-items').isotope({
		  itemSelector: '.gallery-item',
		  percentPosition: true,
		  transitionDuration: '0.5s',
		  masonry: {
			// use outer width of grid-sizer for columnWidth
			columnWidth: '.gallery-item',
			gutter: 30
		  },
		  getSortData: {
			name: '.name',
			symbol: '.symbol',
			number: '.number parseInt',
			category: '[data-category]',
			weight: function( itemElem ) {
			  var weight = $( itemElem ).find('.weight').text();
			  return parseFloat( weight.replace( /[\(\)]/g, '') );
			}
		  }
		});
	

		// filter functions
		var filterFns = {
		  // show if number is greater than 50
		  numberGreaterThan50: function() {
			var number = $(this).find('.number').text();
			return parseInt( number, 10 ) > 50;
		  },
		  // show if name ends with -ium
		  ium: function() {
			var name = $(this).find('.name').text();
			return name.match( /ium$/ );
		  }
		};

		// bind filter button click
		$('.gallery-menu').on( 'click', 'li', function() {
		  var filterValue = $( this ).attr('data-filter');
		  // use filterFn if matches value
		  filterValue = filterFns[ filterValue ] || filterValue;
		  $gellary_img.isotope({ filter: filterValue });
		});


		// change is-checked class on buttons
		$('.gallery-menu').each( function( i, liList ) {
		  var $liList = $( liList );
		  $liList.on( 'click', 'li ', function() {
			$liList.find('.active').removeClass('active');
			$( this ).addClass('active');
		  });
		});	
	});



	 //lightcase
  	$('a[data-rel^=lightcase]').lightcase();


  	//Counter up
	$('.counter').counterUp();



    //nst slider
    $('.nstSlider').nstSlider({
        "rounding": {
            "100": "1000",
            "1000": "10000",
            "10000": "100000"
        },
        "left_grip_selector": ".leftGrip",
        "right_grip_selector": ".rightGrip",
        "value_bar_selector": ".bar",
        "value_changed_callback": function(cause, leftValue, rightValue) {
            var $container = $(this).parent();
            $container.find('.leftLabel').text(leftValue);
            $container.find('.rightLabel').text(rightValue);
        }
    });


    //flex slider
	$(window).on('load',function() {
		// The slider being synced must be initialized first
		$('#carousel').flexslider({
		  animation: "slide",
		  controlNav: false,
		  animationLoop: false,
		  slideshow: false,
		  itemWidth: 84,
		  itemMargin: 4,
		  asNavFor: '#slider'
		});

		$('#slider').flexslider({
		  animation: "slide",
		  controlNav: false,
		  animationLoop: false,
		  slideshow: false,
		  sync: "#carousel"
		});
	});


	//Banner slider
	var swiper = new Swiper('.banner-slider', {
	    slidesPerView: 1,
	    pagination: '.swiper-pagination',
	    paginationClickable: true,
    	autoplay: 3500,
    	loop: true

	    });


  	//Testimonial slider
	var swiper = new Swiper('.testimonial-slider', {
	    slidesPerView: 3,
    	autoplay: 2000,
	    spaceBetween: 30,
	    breakpoints: {
		    // when window width is <= 580px
		    580: {
		      slidesPerView: 1
		    },
		    // when window width is <= 991px
		    991: {
		      slidesPerView: 2
		    }
		  }
	    });


	//Testimonial slider two
	var swiper = new Swiper('.testimonial-slider-two', {
	    slidesPerView: 2,
    	autoplay: 2000,
	    spaceBetween: 30,
	    breakpoints: {
		    // when window width is <= 580px
		    767: {
		      slidesPerView: 1
		    },
		  }
	    });

	//Testimonial slider three
	var swiper = new Swiper('.testimonial-slider-three', {
	    slidesPerView: 1,
    	autoplay: 2000,
	    });


})(jQuery);	  