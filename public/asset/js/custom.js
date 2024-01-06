/*===============================================================================
@File: Ecorik Template JS

* This file contains the JS for the actual template, this
is the file you need to edit to change the look of the
template.

This files table contents are outlined below>>>>>
=================================================================================*/

// Mean Menu
// Preloader
// Nice Select JS
// Header Sticky
// Eorik Slider
// Eorik Slider Three
// Eorik Slider Four
// Eorik Slider Five
// Our Rooms Wrap
// Single City Item
// Restaurants Wrap
// Slider Gallery Wrap
// Testimonials Wrap
// Exclusive Top Wrap
// Customer Wrap
// Customer Wrap Four
// News Wrap Slider
// Service Img Wrap
// Date Picker 1
// Date Picker 2
// Date Picker 3
// Go to Top
// Click Event
// FAQ Accordion
// Count Time 
// Animation
// Tabs 1
// Tabs -2
// Tabs 2
// Tooltip
// Popup Video JS 
// Subscribe form
// AJAX MailChimp
// Testimonials TWO
// MixItUp Shorting

(function($) {
	'use strict';
	jQuery(document).on('ready', function(){ 
		
		// Mean Menu
		jQuery('.mean-menu').meanmenu({ 
			meanScreenWidth: "991"
		});

		// Preloader
		jQuery(window).on('load', function() {
            $('.preloader').fadeOut();
		});

		// Nice Select JS
        $('select').niceSelect();
		
		// Header Sticky
        $(window).on('scroll', function() {
            if ($(this).scrollTop() >150){  
                $('.navbar-area').addClass("is-sticky");
            }
            else{
                $('.navbar-area').removeClass("is-sticky");
            }
		});

		// Eorik Slider
		$('.eorik-slider').owlCarousel({
			loop:true,
			margin:0,
			nav:false,
			mouseDrag: false,
			items:1,
			dots: true,
			autoHeight: true,
			autoplay: true,
			smartSpeed:1500,
			autoplayHoverPause: true,
			animateOut: "fadeOut",
			navText: [
				"<i class='bx bx-chevron-left bx-fade-left'></i>",
				"<i class='bx bx-chevron-right bx-fade-right'></i>",
			],
		});

		// Eorik Slider Three
		$('.eorik-slider-three').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			mouseDrag: false,
			items:1,
			dots: false,
			autoHeight: true,
			autoplay: true,
			smartSpeed:1500,
			autoplayHoverPause: true,
			animateOut: "rollIn",
			navText: [
				"<i class='bx bx-chevron-left bx-fade-left'></i>",
				"<i class='bx bx-chevron-right bx-fade-right'></i>",
			],
		});
		
		// Eorik Slider Four
		$('.eorik-slider-four').owlCarousel({
			loop: true,
            nav: false,
            thumbs: false,
            dots: true,
            thumbsPrerendered: true,
            autoplayHoverPause: true,
            autoplay: true,
            items: 1,
			animateOut: "fadeOut",
		});

		// Eorik Slider Five
		$('.eorik-slider-five').owlCarousel({
			loop: true,
            nav: true,
            thumbs: true,
            dots: false,
            thumbsPrerendered: true,
            autoplayHoverPause: true,
            autoplay: true,
			items: 1,
			animateOut: "flipOutY",
			navText: [
				"<i class='bx bx-chevron-left'></i>",
				"<i class='bx bx-chevron-right'></i>",
			],
		});

		// Single City Item
		$('.single-city-item').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			mouseDrag: true,
			items:1,
			dots: false,
			autoHeight: true,
			autoplay: true,
			smartSpeed:1500,
			autoplayHoverPause: true,
			navText: [
				"<i class='flaticon-back'></i>",
				"<i class='flaticon-right'></i>",
			],
		});
		
        // Restaurants Wrap
		$('.restaurants-wrap').owlCarousel({
			items:1,
			loop:true,
			nav:false,
			autoplay:true,
			autoplayHoverPause: true,
			mouseDrag: true,
			margin: 0,
			center: false,
			dots: false,
			slideTransition: 'linear',
			autoplayTimeout: 4500,
			autoplayHoverPause: true,
			autoplaySpeed: 4500,
			responsive:{
				0:{
					items:1
				},
				576:{
					items:1
				},
				768:{
					items:2
				},
				992:{
					items:2
				},
				1200:{
					items:3
				}
			}
		});

        // Slider Gallery Wrap
		$('.slider-gallery-wrap').owlCarousel({
			items:1,
			loop:true,
			nav:false,
			autoplay:true,
			autoplayHoverPause: true,
			mouseDrag: true,
			margin: 0,
			center: false,
			dots: false,
			slideTransition: 'linear',
			autoplayTimeout: 4500,
			autoplayHoverPause: true,
			autoplaySpeed: 4500,
			responsive:{
				0:{
					items:2
				},
				576:{
					items:2
				},
				768:{
					items:3
				},
				992:{
					items:5
				},
				1200:{
					items:5
				}
			}
		});

        // Testimonials Wrap
		$('.testimonials-wrap').owlCarousel({
			items:1,
			loop:true,
			nav:false,
			autoplay:true,
			autoplayHoverPause: true,
			mouseDrag: true,
			margin: 30,
			center: false,
			dots: false,
			smartSpeed:1500,
			responsive:{
				0:{
					items:1
				},
				576:{
					items:1
				},
				768:{
					items:2
				},
				992:{
					items:3
				},
				1200:{
					items:3
				}
			}
		});

        // Exclusive Top Wrap
		$('.exclusive-top-wrap').owlCarousel({
			items:1,
			loop:true,
			nav:false,
			autoplay:true,
			autoplayHoverPause: true,
			mouseDrag: true,
			margin: 30,
			center: false,
			dots: false,
			smartSpeed:1500,
			responsive:{
				0:{
					items:1
				},
				576:{
					items:1
				},
				768:{
					items:2
				},
				992:{
					items:2
				},
				1200:{
					items:2
				},
				1920:{
					items:3
				}
			}
		});

		// Customer Wrap
		$('.customer-wrap').owlCarousel({
			loop:true,
			nav:false,
			autoplay:true,
			autoplayHoverPause: true,
			mouseDrag: true,
			margin: 30,
			center: true,
			dots: true,
			smartSpeed:1500,
			responsive:{
				0:{
					items:1
				},
				576:{
					items:1
				},
				768:{
					items:1
				},
				992:{
					items:3
				},
				1200:{
					items:3
				}
			}
		}); 

		// Customer Wrap Four
		 $('.customer-wrap-four').owlCarousel({
			 items: 1,
			loop:true,
			nav:true,
			autoplay:false,
			autoplayHoverPause: true,
			mouseDrag: true,
			margin: 30,
			center: true,
			dots: false,
			smartSpeed:1500,
			navText: [
				"<i class='flaticon-back'></i>",
				"<i class='flaticon-right'></i>",
			],
		}); 

		// News Wrap Slider
		$('.news-wrap-slider').owlCarousel({ 
			items:1,
			loop:true,
			nav:true,
			autoplay:true,
			autoplayHoverPause: true,
			mouseDrag: true,
			margin: 0,
			center: false,
			dots: false,
			smartSpeed:1500,
			responsive:{
				0:{
					items:1
				},
				576:{
					items:1
				},
				768:{
					items:2,
					margin: 20,
				},
				992:{
					items:2
				},
				1200:{
					items:2
				}
			},
			navText: [
				"<i class='flaticon-back'></i>",
				"<i class='flaticon-right'></i>",
			],
		});

		// Service Img Wrap
		$('.service-img-wrap').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			mouseDrag: true,
			items:1,
			dots: false,
			autoHeight: true,
			autoplay: true,
			smartSpeed:1500,
			autoplayHoverPause: true,
			animateOut: "flipOutY",
			navText: [
				"<i class='flaticon-back'></i>",
				"<i class='flaticon-right'></i>",
			],
		});

		// Date Picker 1
		$('#datetimepicker-1').datepicker({
			weekStart: 0,
			todayBtn: "linked",
			language: "es",
			orientation: "bottom auto",
			keyboardNavigation: false,
			autoclose: true
		});

		// Date Picker 2
		$('#datetimepicker-2').datepicker({
			weekStart: 0,
			todayBtn: "linked",
			language: "es",
			orientation: "bottom auto",
			keyboardNavigation: false,
			autoclose: true
		});

		// Date Picker 3
		$('#datetimepicker-3').datepicker({
			weekStart: 0,
			todayBtn: "linked",
			language: "es",
			orientation: "bottom auto",
			keyboardNavigation: false,
			autoclose: true
		});

		// Go to Top
		// Scroll Event
		$(window).on('scroll', function(){
			var scrolled = $(window).scrollTop();
			if (scrolled > 300) $('.go-top').addClass('active');
			if (scrolled < 300) $('.go-top').removeClass('active');
		});  

		// Click Event
		$('.go-top').on('click', function() {
			$("html, body").animate({ scrollTop: "0" },  500);
		});

		// FAQ Accordion
		$('.accordion').find('.accordion-title').on('click', function(){
			// Adds Active Class
			$(this).toggleClass('active');
			// Expand or Collapse This Panel
			$(this).next().slideToggle('fast');
			// Hide The Other Panels
			$('.accordion-content').not($(this).next()).slideUp('fast');
			// Removes Active Class From Other Titles
			$('.accordion-title').not($(this)).removeClass('active');		
		});
		
		// Count Time 
        function makeTimer() {
            var endTime = new Date("november  30, 2020 17:00:00 PDT");			
            var endTime = (Date.parse(endTime)) / 1000;
            var now = new Date();
            var now = (Date.parse(now) / 1000);
            var timeLeft = endTime - now;
            var days = Math.floor(timeLeft / 86400); 
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }
            $("#days").html(days + "<span>Days</span>");
            $("#hours").html(hours + "<span>Hours</span>");
            $("#minutes").html(minutes + "<span>Minutes</span>");
            $("#seconds").html(seconds + "<span>Seconds</span>");
        }
		setInterval(function() { makeTimer(); }, 300);

		// Animation
		new WOW().init();

		// Tabs 1
		$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
		$('.tab ul.tabs li').on('click', function (g) {
			var tab = $(this).closest('.tab'), 
			index = $(this).closest('li').index();
			tab.find('ul.tabs > li').removeClass('current');
			$(this).closest('li').addClass('current');
			tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
			tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
			g.preventDefault();
		});

		// Tabs 2
		$('.tab .tabs').addClass('active').find('> .single-tab:eq(0)').addClass('current');
		$('.tab .tabs .single-tab').on('click', function (g) {
			var tab = $(this).closest('.tab'), 
			index = $(this).closest('.single-tab').index();
			tab.find('.tabs > .single-tab').removeClass('current');
			$(this).closest('.single-tab').addClass('current');
			tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
			tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
			g.preventDefault();
		});

		// Tooltip
		$('[data-toggle="tooltip"]').tooltip()
		
		// Odometer 
		$('.odometer').appear(function(e) {
			var odo = $(".odometer");
			odo.each(function() {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			});
		});

		// Popup Video JS 
        $('.popup-youtube, .popup-vimeo').magnificPopup({
            disableOn: 300,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false,
		});

		// Subscribe form
		$(".newsletter-form").validator().on("submit", function (event) {
			if (event.isDefaultPrevented()) {
			// handle the invalid form...
				formErrorSub();
				submitMSGSub(false, "Please enter your email correctly.");
			} else {
				// everything looks good!
				event.preventDefault();
			}
		});
		function callbackFunction (resp) {
			if (resp.result === "success") {
				formSuccessSub();
			}
			else {
				formErrorSub();
			}
		}
		function formSuccessSub(){
			$(".newsletter-form")[0].reset();
			submitMSGSub(true, "Thank you for subscribing!");
			setTimeout(function() {
				$("#validator-newsletter").addClass('hide');
			}, 4000)
		}
		function formErrorSub(){
			$(".newsletter-form").addClass("animated shake");
			setTimeout(function() {
				$(".newsletter-form").removeClass("animated shake");
			}, 1000)
		}
		function submitMSGSub(valid, msg){
			if(valid){
				var msgClasses = "validation-success";
			} else {
				var msgClasses = "validation-danger";
			}
			$("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
		}
		
		// AJAX MailChimp
		$(".newsletter-form").ajaxChimp({
			url: "https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9", // Your url MailChimp
			callback: callbackFunction
		});

		//Testimonials TWO
		var sync1 = $("#sync1");
		var sync2 = $("#sync2");
		var slidesPerPage = 4; //globaly define number of elements per page
		var syncedSecondary = true;
		
		sync1.owlCarousel({
			items : 1,
			slideSpeed : 2000,
			nav: false,
			autoplay: true,
			dots: false,
			loop: true,
			responsiveRefreshRate : 200,
			mouseDrag: false,
		}).on('changed.owl.carousel', syncPosition);
		
		sync2
			.on('initialized.owl.carousel', function () {
				sync2.find(".owl-item").eq(0).addClass("current");
			})
			.owlCarousel({
			dots: false,
			nav: false,
			smartSpeed: 200,
			slideSpeed : 500,
			autoplay: true,
			loop: true,
			center: true,
			mouseDrag: false,
			slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
			responsiveRefreshRate : 100,
			responsive:{
				0:{
					items:1
				},
				576:{
					items:2
				},
				768:{
					items:3
				},
				992:{
					items:3
				},
				1200:{
					items:3
				}
			}
		})
		function syncPosition(el) {
			//if you set loop to false, you have to restore this next line
			//var current = el.item.index;
			
			//if you disable loop you have to comment this block
			var count = el.item.count-1;
			var current = Math.round(el.item.index - (el.item.count/2) - .5);
			
			if(current < 0) {
			current = count;
			}
			if(current > count) {
			current = 0;
			}
			
		//End Block
		sync2
			.find(".owl-item")
			.removeClass("current")
			.eq(current)
			.addClass("current");
			var onscreen = sync2.find('.owl-item.active').length - 1;
			var start = sync2.find('.owl-item.active').first().index();
			var end = sync2.find('.owl-item.active').last().index();
			
			if (current > end) {
				sync2.data('owl.carousel').to(current, 100, true);
			}
			if (current < start) {
				sync2.data('owl.carousel').to(current - onscreen, 100, true);
			}
		}

		// MixItUp Shorting
        $('.shorting').mixItUp();
	});
})(jQuery);