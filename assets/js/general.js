$( window ).load(function() {
	
	ctaScroll();
	$("header .sun").on('click', function() {
		smoothScroll($('.body-wrapper'), 0)
	})
	$(".hamburger").on('click', function() {
		$(".menu-wrapper").fadeToggle();
		$('.body-wrapper').toggle();
		$('body').toggleClass('gray');
		$('header').toggleClass('open');
	})
	if ($(window).width() > 850) {
		divEqualizer($('.question'))
	} else {
		
	}

})

$( document).ready(function() {
heroHeight();
})

$( window ).resize(function() {
	heroHeight();
	if ($(window).width() > 990) {
		
	} else {
		
	}	
})

$(document).ajaxComplete( function() {
	
})


function squareMaker(selector) {
	var width = selector.width();
	selector.css('height', width);
	if ($(window).width() > 1150) {
		$('.contact.offset-cont .side-cont').css('height', width);
	}
}

function divEqualizer(divSelector) {
	var maxHeight = 0;
	divSelector.each(function(){
   		if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
	});
	divSelector.height(maxHeight);
}

function centerBlogImages() {
	$('img.aligncenter').parent().css('text-align','center')
}

function smoothScroll(element, padding) {
	$('html, body').animate({
        scrollTop: element.offset().top - padding
    }, 600);
}

function heroHeight() {
	$windowHeight = $(window).height();
	$('.hero-image').css('height', $windowHeight)
}

function ctaScroll() {
	$('.ctas a').on('click', function(e) {
		e.preventDefault();
		var href = $(this).attr('href');
		smoothScroll($(href), 0)
	})
}




