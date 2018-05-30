(function ($, root, undefined) {

	$(function () {
		$('.onglet').click(function(){
			$('.onglet').removeClass('actif');
			$(this).addClass('actif');
			$('.contenu').removeClass('actif');
		});

		$('#onglet1').click(function(){
			$('#contenu1').addClass('actif');
		});

		$('#onglet2').click(function(){
			$('#contenu2').addClass('actif');
		});

		$('#onglet3').click(function(){
			$('#contenu4').addClass('actif');
		});

		$('#onglet4').click(function(){
			$('#contenu2').addClass('actif');
		});

		$('#onglet5').click(function(){
			$('#contenu3').addClass('actif');
		});

		$('#onglet6').click(function(){
			$('#contenu4').addClass('actif');
		});

		$('#onglet7').click(function(){
			$('#contenu3').addClass('actif');
		});

		$('#onglet8').click(function(){
			$('#contenu2').addClass('actif');
		});

		$('#onglet9').click(function(){
			$('#contenu3').addClass('actif');
		});

		'use strict';

  $('.slider-home').slick({
	dots: false,
	infinite: true,
	speed: 500,
	fade: true,
	cssEase: 'linear',
	arrows: true,
	autoplay: true,
	});



	});




})(jQuery, this);
