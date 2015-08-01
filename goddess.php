<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';


?>
<title>女神案例 | <?php echo PROJECT; ?></title>

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

<body class="goddess_page">
<?php
//Line 彈出框
	include_once INC_PATH.'line_popup.php';
 ?>

<?php
// -------------------------------
// header.php inclube fb code
// -------------------------------
	include_once INC_PATH.'header.php';
echo $get_category;
?>

<section class="banner">
	
</section>
<section class="showcase-slogan fullbg">
	<img src="<?php path_au('img'); ?>showcase-slogan.png" alt="專業醫療團隊   打造完美女神">
</section>

<main>
<div class="wrapper">
    <div class="container">
	<section class="index_showcase">
		<div class="wrapper">
			<div class="container">
				<ul class="index_showcase-list cf">
					<li class="mod-block2 index_showcase-item col-xs-3">
						<figure><a href="goddess_cnt.php">
							<div class="mod-block2-pic index_showcase-pic pic">
								<img src="dist/images/temp/tem-case1.jpg" alt="">
							</div>
							<figcaption>
								拒絕毛手毛腳！！OOO醫生讓ＭＭ們 乾淨清爽過一夏
							</figcaption>
						</a></figure>
					</li>
					<li class="mod-block2 index_showcase-item col-xs-3">
						<figure><a href="goddess_cnt.php">
							<div class="mod-block2-pic index_showcase-pic pic">
								<img src="dist/images/temp/tem-case2.jpg" alt="">
							</div>
							<figcaption>
								拒絕毛手毛腳！！XXX醫生讓DD們 乾淨清爽過一夏
							</figcaption>
						</a></figure>
					</li>
					<li class="mod-block2 index_showcase-item col-xs-3">
						<figure><a href="goddess_cnt.php">
							<div class="mod-block2-pic index_showcase-pic pic">
								<img src="dist/images/temp/tem-case3.jpg" alt="">
							</div>
							<figcaption>
								拒絕毛手毛腳！！OOO醫生讓ＭＭ們 乾淨清爽過一夏
							</figcaption>
						</a></figure>
					</li>
					<li class="mod-block2 index_showcase-item col-xs-3">
						<figure><a href="goddess_cnt.php">
							<div class="mod-block2-pic index_showcase-pic pic">
								<img src="dist/images/temp/tem-case4.jpg" alt="">
							</div>
							<figcaption>
								拒絕毛手毛腳！！OOO醫生讓ＭＭ們 乾淨清爽過一夏
							</figcaption>
						</a></figure>
					</li>
					<li class="mod-block2 index_showcase-item col-xs-3">
						<figure><a href="goddess_cnt.php">
							<div class="mod-block2-pic index_showcase-pic pic">
								<img src="dist/images/temp/tem-case5.jpg" alt="">
							</div>
							<figcaption>
								拒絕毛手毛腳！！OOO醫生讓ＭＭ們 乾淨清爽過一夏
							</figcaption>
						</a></figure>
					</li>
					<li class="mod-block2 index_showcase-item col-xs-3">
						<figure><a href="goddess_cnt.php">
							<div class="mod-block2-pic index_showcase-pic pic">
								<img src="dist/images/temp/tem-case1.jpg" alt="">
							</div>
							<figcaption>
								拒絕毛手毛腳！！OOO醫生讓ＭＭ們 乾淨清爽過一夏
							</figcaption>
						</a></figure>
					</li>
					<li class="mod-block2 index_showcase-item col-xs-3">
						<figure><a href="goddess_cnt.php">
							<div class="mod-block2-pic index_showcase-pic pic">
								<img src="dist/images/temp/tem-case4.jpg" alt="">
							</div>
							<figcaption>
								拒絕毛手毛腳！！OOO醫生讓ＭＭ們 乾淨清爽過一夏
							</figcaption>
						</a></figure>
					</li>
					<li class="mod-block2 index_showcase-item col-xs-3">
						<figure><a href="goddess_cnt.php">
							<div class="mod-block2-pic index_showcase-pic pic">
								<img src="dist/images/temp/tem-case2.jpg" alt="">
							</div>
							<figcaption>
								拒絕毛手毛腳！！OOO醫生讓ＭＭ們 乾淨清爽過一夏
							</figcaption>
						</a></figure>
					</li>
				</ul>
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
	</section>
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
	$('.js-sublist').hide();
	$(window).load(function(){
		console.log("yoyoyoyoyo")
		$(".js-item").each(function(index, el) {
			
			if ($(this).hasClass('active')) {
				$(this).children('.js-sublist').slideDown('400');
			};
		});
	});
	$(".js-item").click(function() {
		if (!$(this).hasClass('active')) {
			$(this).addClass('active').children('.js-sublist').slideDown('400');
		}else{
			$(this).removeClass('active').children('.js-sublist').slideUp('400');
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
