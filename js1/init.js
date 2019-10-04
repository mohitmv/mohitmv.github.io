(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space





function scrolltill(name) {
	$('html, body').animate({
		'scrollTop':   $('[name='+name+']').offset().top-100
	}, 700);
}


$(".scolltillname").on("click", function() {
	scrolltill($(this).attr("data-mshref"));
	return false;
});


