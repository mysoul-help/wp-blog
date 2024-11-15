jQuery.noConflict();
(function ($) {
    $(function () {
	var menu = $('.simple-header_burger-menu');

	// Отслеживаем начало перехода
	menu.on('transitionstart', function () {
	    if (!menu.hasClass('close')) {
		$('header ul').addClass('fadeOut');
	    } else {
		$('header ul').addClass('fadeIn');
	    }
	});
	// Отслеживаем завершение перехода
	menu.on('transitionend', function () {
	    if (!menu.hasClass('close')) {
		$('header ul').removeClass('fadeOut');
	    } else {
		$('header ul').removeClass('fadeIn');
	    }	    
	});
	
	$('.simple-header_burger-menu').on('click', function () {
	    $(this).toggleClass('close');
	    $('.simple-header').toggleClass('open');
	});
	
	$(document).click(function (e) {
	    var div = $(".simple-header");
	    if (!div.is(e.target)
		    && div.has(e.target).length === 0 && div.hasClass('open')) {
		$('.simple-header_burger-menu').toggleClass('close');
		$('.simple-header').toggleClass('open');
	    }
	});
    });
})(jQuery);


