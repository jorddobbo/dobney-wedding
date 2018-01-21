import slick from './slick.js';
import particles from './particles.js';
import wow from './wow.js';

export default function() {

	jQuery(document).ready(function($) {

		if($('#particles-js').length) {
			particlesJS.load('particles-js', '/wp-content/themes/dobney/assets/js/modules/particles.json', function() {
			console.log('callback - particles.js config loaded');
			});
		};

		if($('#dbo--particles').length) {
			particlesJS.load('dbo--particles', '/wp-content/themes/dobney/assets/js/modules/particles.json', function() {
			console.log('callback - particles.js config loaded');
			});
		};

		function venue() {

		$('.dbo--venue__gallery ul').slick({
		  prevArrow: $('.slick__prev'),
		  nextArrow: $('.slick__next'),
		  adaptiveHeight: true,
		  slidesToShow: 1,
		});

		} venue();

		$('#accordion').find('.accordion-toggle').click(function(){

		  $(this).next().slideToggle('fast');

		  $(".accordion-content").not($(this).next()).slideUp('fast');

		});

		function menu() {

		$('.header').on('click', '.header__menu', function(e) {
			e.preventDefault();
		 	$('.header nav').addClass('open');
		 	$('.header__close').addClass('open');
		});

		$('.header').on('click', '.header__close', function(e) {
			e.preventDefault();
		 	$('.header nav').removeClass('open');
		 	$('.header__close').removeClass('open');
		});

		$('.header').on('click', 'a[href^="#"]', function (event) {
			event.preventDefault();

			console.log('ffuuuu');

			if($('.header nav').hasClass('open')) {

			    $('.header nav').removeClass('open');
			 	$('.header__close').removeClass('open');

			}

		    $('html, body').animate({
		        scrollTop: $('#anchor__rsvp').offset().top
		    }, 500, function() {
		    	console.log('nnuuuu');
		    });
		});

		} menu();


	}); /* end of as page load scripts */

}