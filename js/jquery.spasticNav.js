(function($) {

	$.fn.spasticNav = function(options) {
	
		options = $.extend({
			overlap : 10,
			speed : 500,
			reset : 500,
			easing : 'easeOutBack'
		}, options);
	
		return this.each(function() {
		
		 	var nav = $(this),
		 		currentPageItem = $('.current-menu-item', nav),
		 		blob,
		 		reset;
		 		
		 	$('<li id="blob"></li>').css({
		 		width : currentPageItem.outerWidth(),
		 		height : currentPageItem.outerHeight() + options.overlap,
		 		left : currentPageItem.position().left,
		 		top : currentPageItem.position().top - options.overlap / 2,
		 	}).appendTo(this);
		 	
		 	blob = $('#blob', nav);
					 	
			$('li:not(#blob)', nav).hover(function() {
				// mouse over
				clearTimeout(reset);
				blob.animate(
					{
						left : $(this).position().left,
						width : $(this).width()
					},
					{
						duration : options.speed,
						easing : options.easing,
						queue : false
					}
				);
			}, function() {
				// mouse out	
				reset = setTimeout(function() {
					blob.animate({
						width : currentPageItem.outerWidth(),
						left : currentPageItem.position().left
					}, options.speed)
				}, options.reset);
				
			});
		 
		
		}); // end each
	
	};

})(jQuery);