// remap jQuery to $
(function($){})(window.jQuery);

/* trigger when page is ready */
$(document).ready(function (){

	/* Management Showing/Hiding */
	
	$('#migraines dt').click(function() {
		$(this).toggleClass('active')
		.siblings('dt').removeClass('active');
		$(this).next('dd').toggleClass('active')
		.siblings('dd').removeClass('active');
	});

	$(".contact").click(function () {
		$(this).toggleClass("active");
	});

	$(".close").click(function(){
		$("dd").removeClass("active");
		$('dt').toggleClass("active");
	});

});


/* optional triggers

$(window).load(function() {
	
});

$(window).resize(function() {
	
});

*/