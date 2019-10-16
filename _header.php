<?
	include_once "include/common/common.php";
	$s_url = '/';
	
	
	if($bo_table=='notice'){
	    $pn=3;
	    $sn=7; 
	}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6" lang="ko"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="ko"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="ko"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9" lang="ko"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="ko" class="no-js demo-4"><!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
<meta name="format-detection" content="telephone=no, address=no, email=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>MIDAM</title>
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:400,500|Raleway:500,700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?=$s_url?>css/common.css" />
<?if(!$pn){?>
<link rel="stylesheet" type="text/css" href="<?=$s_url?>css/index_pc.css" media="screen and (min-width:1280px)" />
<link rel="stylesheet" type="text/css" href="<?=$s_url?>css/index_tablet.css" media="screen and (min-width:768px) and (max-width:1279px)" />
<link rel="stylesheet" type="text/css" href="<?=$s_url?>css/index_mobile.css" media="screen and (max-width:767px)" />
<link rel="stylesheet" type="text/css" href="<?=$s_url?>css/bookblock.css" />
<?}else {?>
<link rel="stylesheet" type="text/css" href="<?=$s_url?>css/style_pc.css" media="screen and (min-width:1280px)" />
<link rel="stylesheet" type="text/css" href="<?=$s_url?>css/style_tablet.css" media="screen and (min-width:768px) and (max-width:1279px)" />
<link rel="stylesheet" type="text/css" href="<?=$s_url?>css/style_mobile.css" media="screen and (max-width:767px)" />
<?}?>
<link rel="stylesheet" type="text/css" href="<?=$s_url?>css/slick_min.css" />
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<![endif]-->
<meta name="Robots" content="all" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="" />
<meta name="Author" content="DESIGNPIXEL" />
<meta name="Copyright" content="(c)DESIGNPIXEL" />
<meta name="publisher" content="DESIGNPIXEL">
<meta name="reply-to" content="" />
<meta name="date" content="" />
<!-- jquery -->
<script src="<?=$s_url?>js/jquery-1.9.1.min.js"></script>
<script src="<?=$s_url?>js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?=$s_url?>js/jquery.easing.1.3.js"></script>
<!-- 공통 css/js -->
<script src="<?=$s_url?>js/common.js"></script>
<?if(!$pn){?>
<script src="<?=$s_url?>js/index.js"></script>
<?}else {?>
<script src="<?=$s_url?>js/style.js"></script>
<?}?>
<script src="<?=$s_url?>js/modernizr.custom.js"></script>
<script src="<?=$s_url?>js/jquerypp.custom.js"></script>
<script src="<?=$s_url?>js/jquery.bookblock.js"></script>
<!-- slick -->
<script src="<?=$s_url?>js/slick.min.js"></script>
<script src="<?=$s_url?>js/jquery-ui.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script type="text/javascript">
	WebFont.load({
		google: {families: ['Noto Sans KR', 'Oswald']}
	});
</script>
<script type="text/javascript">
$(document).ready(function () {
	if($('html').is('.ie6, .ie7, .ie8, .ie9')) {
		$('div.ie_alert_text').show();
		$('div.ie_alert_text').html('현재 사이트는 IE9 이하의 하위브라우저를 지원하지 않습니다. <br />브라우저를 최신 버전으로 <b>업데이트</b>해 주세요.');
	}
});
</script>

</head>
<body>
<a href="#contents" id="skip-nav" tabIndex="0">본문 바로가기</a>
<!-- 하위 브라우저 지원 불가 알림창 -->
<div class="ie_alert_text"></div>
<div id="bg"></div>

<div id="wrap" class="first">
<header>
	<h1 class="logo">
		<a href="<?=$s_url?>">
			<span class="blind">MIDAM</span>
		</a>
	</h1>
	<div id="search">
	    <div class="btn" id="search_btn"><a href="#none">SEARCH</a></div>
	    <div class="inner">
	        <div class="input">
	        	<form action="/m20.php" method="get">
	            <input name="key_word" type="text" placeholder="Search here" />
				<a href="#none" class="clear"><img src="<?=$s_url?>images/common/i_clear.png" alt="clear" /></a>
	            <button type="submit">
	            	<img src="<?=$s_url?>images/common/i_search1.png" alt="enter" />
	            </button>
	        	
	        	</form>
	        </div> <!-- input -->
	        <div class="suggestions">
	            <span class="tit1">SUGGESTIONS</span>
				
				<div class="midamwon_site">
					<h2 class="on"><a href="#none" class="midamwon"><span class="en">MIDAMWON</span> (미담원)</a></h2>
					<ul class="list">
						<li><a href="https://naver.com" target="_blank">MOUNT GARDEN</a></li>
						<li><a href="https://naver.com" target="_blank">COLUMNAR JOINT GARDEN</a></li>
						<li><a href="https://naver.com" target="_blank">CULTURESTONE GARDEN</a></li>
						<li><a href="https://naver.com" target="_blank">DRY GRADEN</a></li>
					</ul> <!-- list -->
				</div> <!-- midamwon_site -->

				<div class="midambyuk_site">
					<h2 class="on"><a href="#none" class="midambyuk"><span class="en">MIDAMBYUK</span> (미담벽)</a></h2>
					<ul class="list">
						<li><a href="https://naver.com" target="_blank">MDB1</a></li>
						<li><a href="https://naver.com" target="_blank">MDB2</a></li>
						<li><a href="https://naver.com" target="_blank">MDB3</a></li>
						<li><a href="https://naver.com" target="_blank">WATERFALL</a></li>
						<li><a href="https://naver.com" target="_blank">STAIRS</a></li>
					</ul> <!-- list -->
				</div> <!-- midambyuk_site -->

				<div class="link">
					<a href="http://lagomdesign.co.kr/" target="_blank"><span class="en">LAGOM</span> (라곰)</a>
					<a href="#none"><span class="en">LANDSCAPE</span> (조경)</a>
				</div>
	        </div> <!-- suggestions -->
	    </div> <!-- inner -->
	</div> <!-- search -->
</header>

<div id="left_bar">
    <div class="menu">
        <a href="#none">
            <span class="name">MENU</span>
            <div class="bar">
                <div class="menu-trigger">
                    <span class="l1"></span>
                    <span class="l2"></span>
                    <span class="l3"></span>
                </div> <!-- menu-trigger -->
            </div>  <!-- bar -->
        </a>
    </div> <!-- menu -->
    <nav id="main_nav">
        <a href="#none" class="mb_br m_close"><img src="<?=$s_url?>images/common/i_m_close.png" alt="close" /></a>
        <h1 class="blind">메뉴</h1>
        <ul>
            <li>
                <a href="/m11.php">
                    Product
                </a>
            </li>
            <li>
                <a href="/m20.php">
                    Portfolio
                </a>
            </li>
            <li>
                <a href="/m31.php">
                    About
                </a>
            </li>
            <li>
                <a href="/m41.php">
                    Contact
                </a>
            </li>
        </ul>
        <div class="foot">
            <address>
                서울시 강서구 마곡중앙로 161-8 두산더랜드파크 C동 1113호
            </address>
            <span class="tel">Tel. <a href="tel:02-6951-1041">02-6951-1041</a></span>
            <span class="fax">Fax. <a href="fax:02.6951.1042">02-6951-1042</a></span>
            <span class="email">Email. <a href="mailto:midam@mi-dam.com">midam@mi-dam.com</a></span>
        </div> <!-- foot -->
    </nav>
</div> <!-- left_bar -->

<!-- //header -->		
<div id="contents">
<div id="container">
<main role="main">