var $j = jQuery.noConflict();

$j(document).ready(function(){

	$j('.sub-menu').filter('li:parent').append('<img src="images/drop_down.png" />');
	
	$j('.service_content_container').hide();
	//$j('.handle').filter(':first').addClass('active').next().show();

	$j('.handle').click(function(){
		if( $j(this).next().is(':hidden') ) { 
			//$j('.handle').removeClass('active').next().slideUp(); //Remove all .handle classes and slide up the immediate next container
			$j(this).toggleClass('active').next().slideDown(); 
		} else if( $j(this).next().is('.service_content_container') ) {
			$j(this).removeClass('active').next().slideUp();
		}
		return false;
	});
});