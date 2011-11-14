var $j = jQuery.noConflict();

$j(document).ready(function(){
	$j('.service_content_container').hide();
	//$j('.handle').filter(':first').addClass('active').next().show();

	$j('.handle').click(function(){
		if( $j(this).next().is(':hidden') ) { 
			$j('.handle').removeClass('active').next().slideUp(); 
			$j(this).toggleClass('active').next().slideDown(); 
		}
		return false;
	});
});