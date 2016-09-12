jQuery(function($) {

var $container = $('.masonry');
$container.imagesLoaded(function(){
  $container.masonry({
        itemSelector : '.hentry',
  	    isAnimated: true,
   		transitionDuration: 0,
   		columnWidth: '.hentry'
  });
});

$(document).ready(function() {
	$('#menu-menu-1').slicknav();
});
}(jQuery));