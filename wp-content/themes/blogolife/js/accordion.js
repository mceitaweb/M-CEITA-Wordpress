var $j = jQuery.noConflict();

$j(document).ready(function(){
	$j('.content_container').hide();
	//$j('.handle').filter(':first').addClass('active').next().show();

	$j('.handle').click(function(){
		if( $j(this).next().is(':hidden') ) { 
			//$j('.handle').removeClass('active').next().slideUp(); //Remove all .handle classes and slide up the immediate next container
			$j(this).toggleClass('active').next().slideDown(); 
		} else if( $j(this).next().is('.content_container') ) {
			$j(this).removeClass('active').next().slideUp();
		}
		return false;
	});
});