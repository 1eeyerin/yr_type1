$(function(){
    //init
    setTimeout(function() {
        $('body').addClass('ani');
    }, 50);
    
    $(window).on('scroll', function() {
        var Scroll = $(window).scrollTop();
		if($('#main').hasClass('portfolio_view')) return;
        if (40 < Scroll) {
            $('#left_bar').addClass('on');
        } else {
            $('#left_bar').removeClass('on');
        }
    }).scroll();

	product();
	portfolio_view();
});

function product() {
	if($('#main').hasClass('m10')===false) return;
	
	function handleScroll() {
		var Scroll = $(window).scrollTop();
		if ($('#main').offset().top < Scroll) {
			$('.list3').addClass('fixed');
		} else {
			$('.list3').removeClass('fixed');
		}
	}
	window.addEventListener('scroll', handleScroll);
	
	$('.list3 button').on('click', function(){
		var thisClass = $(this).attr('class');
		
		$('html, body').stop(true).animate({
			scrollTop: $('#'+thisClass).offset().top
		}, 600);
	});

	
	$(window).scroll(function(){

		var Scroll = $(window).scrollTop();

		$('.product').each(function(index){
			var sectionTop = $(".product:eq("+index+")").offset().top - 50;
			var sectionHeight = $(".product:eq("+index+")").height();

			if(Scroll >= sectionTop && sectionTop + sectionHeight > Scroll){
				$(".list3 li").removeClass("on");
				$(".list3 li:eq("+index+")").addClass("on");
			}
		});

	});

}

function portfolio_view(){
	if($('#main').hasClass('portfolio_view')===false) return;

	//portfolio_view_slide
	var $pvSlide = $('.portfolio_view_slide'),
		$pvArrow = $('.portfolio_view_slide_arrow');
		
	//메인 슬라이드
	$pvSlide.slick({
		fade: true,
		autoplay:false,
		infinite: true,
		arrows: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		//hover, click을 포함한 모든 focus에도 슬라이드 재생
		pauseOnHover:false,
		pauseOnFocus:false,
		cssEase:'linear',
		prevArrow: $pvArrow.find('.prev'),
		nextArrow: $pvArrow.find('.next'),
		dots:false,
	});	
}