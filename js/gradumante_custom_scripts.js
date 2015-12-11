jQuery(document).ready(function() {
  jQuery('.menu_toggle').click(function(e){
	  e.preventDefault();
	  jQuery('.main_submenu_wrapper').css('right','0');
	  jQuery('#main_modal').show(300);
  });
   jQuery('.menu_close').click(function(e){
	   var a = jQuery(window).width();
	   if ( a <= 767) {
		   a = a;
	   } else {
		   a = 200;
	   }
	   
	  e.preventDefault();
	  jQuery('.main_submenu_wrapper').css('right',-a);
	  jQuery('#main_modal').hide(300);
  });
  });
  function changeMainWrapperFunction() {
 	var footerHeight = jQuery('#main_footer').height();
	jQuery('#main_all_content_wrapper').css('padding-bottom', footerHeight + 100);
  }
  changeMainWrapperFunction();
  
  jQuery(window).resize(changeMainWrapperFunction);



