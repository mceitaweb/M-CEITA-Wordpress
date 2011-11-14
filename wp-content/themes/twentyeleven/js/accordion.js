$(document).ready(function(){
	$('.service_content_container').hide();
	//$('.handle').filter(':first').addClass('active').next().show();

	$('.handle').click(function(){
		if( $(this).next().is(':hidden') ) { 
			$('.handle').removeClass('active').next().slideUp(); 
			$(this).toggleClass('active').next().slideDown(); 
		}
		return false;
	});
});