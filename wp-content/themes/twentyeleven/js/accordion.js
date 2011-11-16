var $j = jQuery.noConflict();

$j(document).ready(function(){
	$j('.service_content_container').hide();
	//$j('.handle').filter(':first').addClass('active').next().show();
	$j('.showcase-slide').hide();
	$j('.showcase-slide').filter(':first').show();

	$j('.handle').click(function(){
		if( $j(this).next().is(':hidden') ) { 
			$j('.handle').removeClass('active').next().slideUp(); 
			$j(this).toggleClass('active').next().slideDown(); 
		}
		return false;
	});
	
	$j('#showcase-next').click(function(){
		var current = $j('.showcase-slide').filter(':visible');
		var next;

		if(current.next().hasClass('showcase-slide')) {	
			next = current.next();
		} else {
			next = $j('.showcase-slide').filter(':first');
		}
		$j(current).add(next).toggle();
	});
	
	$j('#showcase-previous').click(function(){
		var current = $j('.showcase-slide').filter(':visible');
		var next;

		if(current.prev().hasClass('showcase-slide')) {	
			next = current.prev();
		} else {
			next = $j('.showcase-slide').filter(':last');
		}
		$j(current).add(next).toggle();
	});
});