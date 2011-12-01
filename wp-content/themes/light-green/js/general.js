// Dropdown menu
jQuery(document).ready(function(){

	jQuery('.mainnav li').hover(function(){
		if ( jQuery(this).children('ul ul').size() > 0 ) {
			jQuery(this).children('ul ul').show();
			jQuery(this).addClass('page_item_dd'); 			
		} 
	}, function(){
		jQuery(this).children('ul ul').hide();
		jQuery(this).removeClass('page_item_dd');
	})

})


