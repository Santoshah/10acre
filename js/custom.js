
var ww = document.body.clientWidth;
jQuery(document).ready(function($) {


  $(".navbar-nav li a").each(function() {
    if ($(this).next().length > 0) {
      $(this).addClass("parent");
    };
  })

  adjustMenu();


if(ww<768) {
    var s = $(".sidebar").clone().wrap('<p>').parent().html();
	$('.container1').append(s);
    $('.article + .sidebar').addClass('show');
}


});


$(window).bind('resize orientationchange', function() {
  ww = document.body.clientWidth;
  adjustMenu();


	if(ww<768) {
	    var s = $(".sidebar").clone().wrap('<p>').parent().html();
		$('.container1').append(s);
	    $('.article + .sidebar').addClass('show');
	    // alert("e")
	    // $('.sidebar + .sidebar').remove();
	} else {
	    $('.article + .sidebar').remove();

	}
});







var adjustMenu = function() {


  if (ww < 999) {

   // $(".responsive_menu_icon").css("display", "block");
  $(".navbar-toggle").click(function(e) {
    // e.preventDefault();
    $(".navbar-nav li").removeClass('hoverr');
    
  });

$('a.parent').each(function(){
    var s = $(this).clone().wrap('<p>').parent().html();
    $(this).siblings('.sub-menu').prepend(s);
    $(".sub-menu > a").wrap('<li class="unique-mobile-class"></li>').removeClass('parent');
    $(".unique-mobile-class + .unique-mobile-class").remove();
    // console.log(s);

});


    $(".navbar-nav li").unbind('mouseenter mouseleave');
    $(".navbar-nav li a.parent").unbind('click').bind('click', function(e) {
      // must be attached to anchor element to prevent bubbling
      e.preventDefault();
      $(".unique-mobile-class + .unique-mobile-class").remove();
      $(this).parent("li").toggleClass("hoverr");
    });
  } else if (ww >= 1000) {
    
    $(".unique-mobile-class").remove();

    $(".navbar-nav li").removeClass("hoverr");
    $(".navbar-nav li a").unbind('click');
    $(".navbar-nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
      // must be attached to li so that mouseleave is not triggered when hover over submenu
      $(this).toggleClass('hoverr');
    });
  }


}

