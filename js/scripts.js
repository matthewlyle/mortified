Mortified = {
	spotlight: function(){
		jQuery('.js-slick-slider').slick({
			slide: '.js-slick-slide',
			dots: true,
			fade: true,
			lazyLoad: 'ondemand',
			mobileFirst: true,
		})
	},

	nav: function(){
		jQuery('header nav a').click(function(){
			jQuery(this).addClass('is-active')
		})

		jQuery('header img, header nav a, footer a').click(function(){
			jQuery('header nav a').removeClass('is-active');
		})
	},

	responsiveNav: function(){
		var $trigger = jQuery('.responsiveNavTrigger').unbind();
		var $nav = jQuery('.siteNav');

		function showOrHide() {
			if (jQuery(window).width() > 1075) {
				$nav.show();
			}
			if (jQuery(window).width() < 1075) {
				$nav.hide();
			}
		}

		showOrHide();
		jQuery(window).resize(showOrHide);

		$trigger.click(function(){
			if (jQuery(window).width() < 1075) {
				jQuery(this).addClass('is-active');
				$nav.slideToggle();
			}
		})

		$nav.find('a').click(function(){
			if (jQuery(window).width() < 1075) {
				$nav.slideUp();
			}
		})

	}
}

jQuery(function(){
	Mortified.spotlight();
	Mortified.nav();
	Mortified.responsiveNav();
})

$('header a').click(function(){
	setTimeout(
	function() {
		Mortified.spotlight();
		console.log('sure');
	}, 1000);
})

$(window).resize(function() {
  $('.js-slick-slider').slick('resize');
});


