<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';

?>
<title>最新消息 | <?php echo PROJECT; ?></title>

<?php
// -------------------------------
// SEO
// CSS
// Script in the HEAD
// -------------------------------
	include_once INC_PATH.'head.php';
 ?>

<?php
//app
	include_once INC_PATH.'social.php';
 ?>

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="news_page">
<?php
//Line 彈出框
	include_once INC_PATH.'line_popup.php';
 ?>

<?php
// -------------------------------
// header.php inclube fb code
// -------------------------------
	include_once INC_PATH.'header.php';
?>

<section class="banner">
	
</section>

<main>
<div class="wrapper">
    <div class="container">
        <section class="news-item open">
        	<div class="news_block-left col">
        		<div class="news-date">2015年&emsp;07&emsp;月&emsp;01&emsp;日</div>
        		<div class="news-pic pic"><img src="<?php path_au('temp'); ?>tem-news1.jpg" alt=""></div>
        	</div>
        	<div class="news_block-right news-cnt col">
        		<h2 class="news-title">拒絕毛手毛腳！！OOO醫生讓ＭＭ們 乾淨清爽過一夏</h2>
        		<article class="editorDF">
        			<!-- 圖文編輯器 -->
        			<img src="<?php path_au('temp'); ?>tem3.jpg" alt="">
        		</article>
        	</div>
        	<div class="ctrl_btn js-ctrl_btn" data-open="CLOSE  " data-close="OPEN  ">
        		PANEL
        	</div>
        </section>

        <section class="news-item">
        	<div class="news_block-left col">
        		<div class="news-date">2015年&emsp;07&emsp;月&emsp;01&emsp;日</div>
        		<div class="news-pic pic"><img src="<?php path_au('temp'); ?>tem-news2.jpg" alt=""></div>
        	</div>
        	<div class="news_block-right news-cnt col">
        		<h2 class="news-title">拒絕毛手毛腳！！OOO醫生讓ＭＭ們 乾淨清爽過一夏</h2>
        		<article class="editorDF">
        			<!-- 圖文編輯器 -->
        			<img src="<?php path_au('temp'); ?>tem3.jpg" alt="">
        		</article>
        	</div>
        	<div class="ctrl_btn js-ctrl_btn" data-open="CLOSE " data-close="OPEN ">
        		PANEL
        	</div>
        </section>

        <section class="news-item">
        	<div class="news_block-left col">
        		<div class="news-date">2015年&emsp;07&emsp;月&emsp;01&emsp;日</div>
        		<div class="news-pic pic"><img src="<?php path_au('temp'); ?>tem-news3.jpg" alt=""></div>
        	</div>
        	<div class="news_block-right news-cnt col">
        		<h2 class="news-title">拒絕毛手毛腳！！OOO醫生讓ＭＭ們 乾淨清爽過一夏</h2>
        		<article class="editorDF">
        			<!-- 圖文編輯器 -->
        			<img src="<?php path_au('temp'); ?>tem3.jpg" alt="">
        		</article>
        	</div>
        	<div class="ctrl_btn js-ctrl_btn" data-open="CLOSE " data-close="OPEN ">
        		PANEL
        	</div>
        </section>

        <section class="news-item">
        	<div class="news_block-left col">
        		<div class="news-date">2015年&emsp;07&emsp;月&emsp;01&emsp;日</div>
        		<div class="news-pic pic"><img src="<?php path_au('temp'); ?>tem-news1.jpg" alt=""></div>
        	</div>
        	<div class="news_block-right news-cnt col">
        		<h2 class="news-title">拒絕毛手毛腳！！OOO醫生讓ＭＭ們 乾淨清爽過一夏</h2>
        		<article class="editorDF">
        			<!-- 圖文編輯器 -->
        			<img src="<?php path_au('temp'); ?>tem3.jpg" alt="">
        		</article>
        	</div>
        	<div class="ctrl_btn js-ctrl_btn" data-open="CLOSE " data-close="OPEN ">
        		PANEL
        	</div>
        </section>

<div class="pages_btn">
	<ul>
		<li class="prev">
			<div class="btn btn-aphrodite btn-prev_page"><a href="#">PREV</a></div>
		</li><!-- 在第一頁時不顯示 -->
		<li class="number active"><a href="">1</a></li>
		<li class="number"><a href="">2</a></li>
		<li class="number"><a href="">3</a></li>
		<li class="number"><a href="">4</a></li>
		<li class="number"><a href="">5</a></li>
		<li class="number"><a href="">6</a></li>
		<li class="number"><a href="">7</a></li>
		<li class="number"><a href="">8</a></li>
		<li class="number"><a href="">9</a></li>
		<li class="number"><a href="">10</a></li>
		<li class="next">
			<div class="btn btn-aphrodite btn-next_page"><a href="#">NEXT</a></div>
		</li><!-- 在最後一頁時不顯示 -->
	</ul>
</div>
    </div><!-- /.container  END  !! -->
</div><!-- /.wrapper  END  !! -->

</main>

<?php
// -------------------------------
// Footer
// -------------------------------
	include_once INC_PATH.'footer.php';
 ?>

<?php
// -------------------------------
// Script in the FOOT
// -------------------------------
	include_once INC_PATH.'scriptfoot.php';
 ?>
<script>
$(function() {
	// $(".news-item").
	$(".js-ctrl_btn").click(function() {
		if (!($(this).parent(".news-item").hasClass('open'))) {
			$(".news-item").removeClass('open');
			$(this).parent(".news-item").addClass('open');
			$(window).scrollTo($(this).parent(".news-item"), 1000, {offset: -80});
		} else{
			$(".news-item").removeClass('open');
			$(window).scrollTo($(this).parent(".news-item"), 1000, {offset: -80});
		};
	});
});
// $(window).load(function() {
// 	$("#bannerSlider").flexslider({
// 		animation      : "fade",
// 		controlNav     : true,
// 		directionNav   : true,
// 		slideshowSpeed : 5000
// 	})
// });
</script>
<?php
// -------------------------------
// google analytics
// -------------------------------
	include_once INC_PATH.'ga.php';
 ?>

</body>
</html>
