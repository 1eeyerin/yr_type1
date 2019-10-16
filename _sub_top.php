<? include "_header.php"; ?>
<? include "_pagenav.php";?>

<section class="sub_top st<?=$pn?> st<?=$pn?><?=$sn?>">
	<div class="bgimg"></div>
	<div class="inner">
		<h1 class="tit1"><?echo $depth1?></h1>
        <div class="navigation">

            <div class="list1">
                <h2><a href="#none"><?echo $depth1?></a></h2>
                <ul class="list">
                    <li><a href="/m11.php">PRODUCT</a></li>
                    <li><a href="/m20.php">PORTFOLIO</a></li>
                    <li><a href="/m31.php">ABOUT</a></li>
                    <li><a href="/m41.php">CONTACT</a></li>
                </ul> <!-- list -->
            </div> <!-- list1 -->

            <?if(($pn==1) || ($pn==2) || ($pn==3)){?>
            <div class="list2">
                <h2><a href="#none"><?echo $depth2?></a></h2>
                <ul class="list">
                    <?if($pn==1){?>
                        <li><a href="/m11.php">MIDAMWON</a></li>
                        <li><a href="/m12.php">MIDAMBYUK</a></li>
                        <li><a href="/m13.php">LAGOM</a></li>
                    <?}else if($pn==2){?>
                        <li><a href="/m20.php">ALL</a></li>
                        <li><a href="/m21.php?port=MIDAMWON">MIDAMWON</a></li>
                        <li><a href="/m21.php?port=MIDAMBYUK">MIDAMBYUK</a></li>
                        <li><a href="/m21.php?port=LANDSCAPE">LANDSCAPE</a></li>
                        <li><a href="http://lagomdesign.co.kr/bbs/board.php?bo_table=s41" target="_blank">LAGOM</a></li>
                    <?}else if($pn==3){?>
                        <li><a href="/m31.php">ABOUT US</a></li>
                        <li><a href="/m32.php">CEO MESSAGE</a></li>
                        <li><a href="/m33.php">BUSINESS AREA</a></li>
                        <li><a href="/m34.php">CERTIFICATION</a></li>
                        <li><a href="/m35.php">GROUP</a></li>
                        <li><a href="/board/board.php?bo_table=notice">NEWS</a></li>
                    <?}?>
                </ul> <!-- list -->
            </div> <!-- list2 -->
            <?}?>

        </div> <!-- navigation -->
	</div> <!-- inner -->
</section><!-- sub_top -->
<div class="line_left"></div>
<div class="line_center"></div>
<div class="line_right"></div>

<script type="text/javascript">
</script>