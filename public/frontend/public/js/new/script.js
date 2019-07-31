$(document).ready(function(){
	
// nav addClass	

	$(window).scroll(function(){
		if($(this).scrollTop()>10){
			$('.nav-background').addClass('active');
		} else{
			//$('.nav-background').removeClass('active');
		}
	});





	// carousel caption

	var carouselSize = $('.carousel-caption').height()/2;

	$('.carousel-caption').css({
		marginBottom: -carouselSize,
	});



	

	$('a[href]').on('click', function(){
		var target = $(this).attr('href');
		
		$('html,body').animate({
			'scrollTop': $(target).offset().top-60,
		},500);
	});
	
	
	
});







// panel

$(document).ready(function(){
  $(".panel-head").on('click', function(){
    $(".panel-body").removeClass('active');
    $(this).closest('.panel').find('.panel-body').addClass('active');
  });

});
