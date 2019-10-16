$(function(){
	//init
	setTimeout(function() {
		$('body').addClass('ani');
	}, 200);
	mainSlide('.bb_slide', '.bb_slide_indicator ul', 5000);

}); //end

function mainSlide(selector, naviSelector, speed) {
	var tl = new TimelineMax(),
		t = TweenMax;

	var config = {
		$total : $(selector).find('.item').length,
		$now : 0,
		$next : 0,
		$prev : 0,
		$status : 0,
		$timer : '',
		$speed : speed,
		$direction : 'bottom',
	}

	function showSlide(n){
		//현재 슬라이드거나 재생중일때 실행금지 => 애니메이션 끝나고 넘어감
		if(config.$now === n || config.$status === 1) return false;

		var tween = {
			$slide : $(selector).find('.item'),
			$now : $(selector).find('.item.v0'+n),
			$con : $(selector).find('.item span'),
			$time : 3,
		}

		//init
		clearTimeout(config.$timer);
		config.$status = 1;

		t.set(tween.$now, {zIndex:'2', display : 'block'});	//현재 슬라이드
		$(selector).find('.item span').removeAttr('style');	//span 스타일 초기화
		if($('#wrap').hasClass('first')===false){	//첫 슬라이드 시작시 애니메이션 off
			t.set(tween.$now.find('span'), {'height' : '0'});
		}

		$(naviSelector).find('li').removeClass('on');
		$(naviSelector).find('li:eq(' + (n - 1) + ')').addClass('on');


		if(tween.$now.is('.video')===false) {

			if(config.$direction == 'top') {	//애니메이션 방향
				t.set(tween.$now.find('span'), {'top' : '0', 'bottom' : 'auto'});

				t.staggerTo(tween.$now.find('span'), tween.$time, {
					css: {
						height:'100%', 
					},
					ease:Power4.easeInOut,	//이징효과
					onComplete:moveSlide,	//호출 함수
				}, .2);
				config.$direction = 'bottom';	//top -> bottom -> top -> bottom

			}else if(config.$direction == 'bottom'){	//애니메이션 방향
				t.set(tween.$now.find('span'), {'top' : 'auto', 'bottom' : '0'});

				t.staggerTo(tween.$now.find('span'), tween.$time, {
					css: {
						height:'100%',
					},
					ease:Power4.easeInOut,	//이징효과
					onComplete:moveSlide,	//호출 함수
				}, .2);
				config.$direction = 'top';	//top -> bottom -> top -> bottom
			}

		}//img
		else {
			moveSlide();
		}//video

		//콜백함수
		function moveSlide(){
			tween.$slide.removeAttr('style').removeClass('current');	//새로운 슬라이드 애니메이션 끝난 후 지워줌
			tween.$now.addClass('current');	//애니메이션 끝난 후 현재 슬라이드에게 클래스 붙여줌
			animateEnd();	//호출 함수
		}
		function animateEnd(){config.$status = 0; $('#wrap').removeClass('first');}	// 애니메이션 끝나고 다음 슬라이드 재생, 첫 애니메이션 삭제

		config.$now = n;
		config.$next = (n + 1 > config.$total) ? 1 : ( n + 1 );
		config.$prev = (n - 1 < 1) ? config.$total : ( n - 1 ) ;

		
		config.$timer = setTimeout(function(){	//자동재생
			showSlide(config.$next);
		}, config.$speed);


	}//showSlide

	$(selector).find('.item').each(function (i){
		$(naviSelector).append('<li><button type="button"><span class="blind">'+ ( i + 1 ) +'</span></button></li>');
	});

	$(naviSelector).find('li').on('click', function() {
		var index = $(naviSelector).find('li').index($(this));
		showSlide(index + 1);
	});




	showSlide(1);

} //end