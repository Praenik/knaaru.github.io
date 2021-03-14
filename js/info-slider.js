$(document).ready(function(){
    $('.gallery-info').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true,
      });    
      
      $(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});