$(document).on('click', 'a[href="#none"]', function(e) {
	e.preventDefault();
});

$(document).ready(function(){

    var $animation_elements = $('.ani');
	var $window = $(window);

	function check_if_in_view() {
	  var window_height = $window.height();
	  var window_top_position = $window.scrollTop();
	  var window_bottom_position = (window_top_position + window_height);

	  $.each($animation_elements, function() {
		var $element = $(this);
		var element_height = $element.outerHeight();
		var element_top_position = $element.offset().top+200;
		var element_bottom_position = (element_top_position + element_height);
		//console.log(element_top_position);

		//check to see if this current container is within viewport
		if ((element_bottom_position >= window_top_position) &&
		  (element_top_position <= window_bottom_position)) {
		  $element.addClass('in-view');
		} else {
		 //$element.removeClass('in-view');
		}
	  });
	}

	$window.on('scroll resize', check_if_in_view);
	$window.trigger('scroll');
    
	//서브페이지 pagenavigation
	$('.sub_top .navigation > div h2').on('click', function(){
		if($(this).parent().hasClass('on')==false) {
			$('.sub_top .navigation > div ul').stop(true).slideUp();
			$('.sub_top .navigation > div').removeClass('on');
		}
		$(this).next().stop(true).slideToggle(450);
        $(this).parent().toggleClass('on');
    });
    
    //네비 토글
    $('#left_bar .menu').on('click', function(){
        // 메뉴가 열렸을때 검색 토글은 닫힘
        $('#search').removeClass('on');
    	$('header').stop(true).toggleClass('open');
    	$('.menu-trigger').stop(true).toggleClass('active');
        
        if($('header').hasClass('open')){
			$('#left_bar .menu').find('a .name').text('CLOSE');
		} else {
			$('#left_bar .menu').find('a .name').text('MENU');
		}
    });
    
    //모바일 메뉴 닫기 버튼
    $('#left_bar nav .m_close').on('click', function(){
        $('header').removeClass('open');
    	$('.menu-trigger').removeClass('active');
        $('#left_bar .menu').find('a .name').text('MENU');
    });

	//브랜드사이트 바로가기
	$('#search [class*="_site"] h2').on('click', function(){
		$(this).next().stop(true).slideToggle(450);
		$(this).toggleClass('on');
	});

	//검색 토글
	$('#search_btn').on('click', function(){
        //브랜드사이트 기본값 : 닫힘
        $('#search [class*="_site"] ul').hide();
        $('#search [class*="_site"] h2').addClass('on');
        //검색창 기본값 : null, focus
        $('#search .input input').val('');
        
		$('header .logo').toggleClass('on');
		$('#search').toggleClass('on');
        
		if($('#search').hasClass('on')){
			$(this).find('a').text('CLOSE');
		} else {
			$(this).find('a').text('SEARCH');
		}

	});
	//검색어 지우기
	$('#search .input .clear').on('click', function(){
		$('#search .input input').val('').focus();
	});
});