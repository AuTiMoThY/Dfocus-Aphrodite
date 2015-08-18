<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';


//  最新消息區塊  封面照片  切換圖片用
$count = 6;
$news_pic_array = array(
array('pic'=>'dist/images/temp/tem-pic5.jpg'),
array('pic'=>'dist/images/temp/tem-pic6.jpg'),
array('pic'=>'dist/images/temp/tem-pic5.jpg'),
array('pic'=>'dist/images/temp/tem-pic6.jpg'),
array('pic'=>'dist/images/temp/tem-pic5.jpg'),
array('pic'=>'dist/images/temp/tem-pic6.jpg'),
);


?>
<title>女神時尚診所</title>

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

<body class="index_page">
<?php
//Line 彈出框
	include_once INC_PATH.'line_popup.php';
 ?>


<div id="ip-container" class="ip-container">
	<header class="ip-header">
	    <h1 class="ip-logo">
	        <!-- <svg class="ip-inner" width="100%" height="100%" viewBox="0 0 300 160" preserveAspectRatio="xMidYMin meet" aria-labelledby="logo_title">
	            <title id="logo_title">Delightful Demonstrations by Codrops</title>
	            <path d="...our super-long path..." />
	        </svg> -->
	        <!-- <img src="images/outthere-logo.png" alt=""> -->
	        <?php include("dist/images/aphrodite-logo.svg"); ?>
	    </h1>

	    <div class="ip-loader">
	        <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
	            <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
	            <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
	        </svg>
	    </div>
	</header><!-- /.ip-header  END  !! -->

<div class="ip-main">
<?php
// -------------------------------
// header.php inclube fb code
// -------------------------------
	include_once INC_PATH.'header.php';
?>

<div id="sec1"  class="js-sec1">
	<section id="bannerSlider" class="banner flexslider" >
		<ul class="slides">
			<li class="banner" style="background-image: url('<?php path_au('img'); ?>banner-index1.jpg')"><a href="products_list1.php" class="index-banner hide_txt">more info</a></li>
			<li class="banner" style="background-image: url('<?php path_au('img'); ?>banner-index2.jpg')"><a href="products_list1.php" class="index-banner hide_txt">more info</a></li>
			<li class="banner" style="background-image: url('<?php path_au('img'); ?>banner-index3.jpg')"><a href="products_list1.php" class="index-banner hide_txt">more info</a></li>
			<li class="banner" style="background-image: url('<?php path_au('img'); ?>banner-index4.jpg')"><a href="products_list1.php" class="index-banner hide_txt">more info</a></li>
			<li class="banner" style="background-image: url('<?php path_au('img'); ?>banner-index5.jpg')"><a href="products_list1.php" class="index-banner hide_txt">more info</a></li>
	
		</ul>
	
	</section>
	<section id="indexSlogan" class="slogan">
		<div class="wrapper s">
			<div class="logo2 ">
				<?php include("dist/images/aphrodite-logo2.svg"); ?>
			</div>
			<div class="slogan-txt"><a href="<?php webPageUrlAu('teams'); ?>">
				<p>女神時尚診所依循著古羅馬神話最美的神祈艾芙蘿蒂，用真誠的心服務社會大眾；遵循美麗女神的信念，用愛與關懷服務廣大追求極致美的現代女性。建構一隅美麗殿堂，一群富愛心、耐心的專業護理人員，給予每一位顧客最貼心、最合適的療程諮詢，將最美好的一切奉獻給所有愛美人士。<span class="slogan-more">.....MORE</span></p>
			</a></div>
		</div>
	</section>
</div>

<main>
	<section class="index_service bar">
		<div class="wrapper">
			<ul class="container">
				<li class="mod-block index_service-item col-xs-3">
					<figure><a href="service_cnt.php">
						<div class="mod-block-pic index_service-pic pic">
							<img src="dist/images/temp/tem-pic1.jpg" alt="">
						</div>
						<figcaption>
							<p class="mod-block-h1" data-lang="tw">淨膚雷射</p>
							<p class="mod-block-h2" data-lang="en">LASER TONING</p>
						</figcaption>
						<div class="mod-block-go"><span>go</span></div>
					</a></figure>
				</li>
				<li class="mod-block index_service-item col-xs-3">
					<figure><a href="service_cnt.php">
						<div class="mod-block-pic index_service-pic pic">
							<img src="dist/images/temp/tem-pic2.jpg" alt="">
						</div>
						<figcaption>
							<p class="mod-block-h1" data-lang="tw">淨膚雷射</p>
							<p class="mod-block-h2" data-lang="en">LASER TONING</p>
						</figcaption>
						<div class="mod-block-go"><span>go</span></div>
					</a></figure>
				</li>
				<li class="mod-block index_service-item col-xs-3">
					<figure><a href="service_cnt.php">
						<div class="mod-block-pic index_service-pic pic">
							<img src="dist/images/temp/tem-pic3.jpg" alt="">
						</div>
						<figcaption>
							<p class="mod-block-h1" data-lang="tw">淨膚雷射</p>
							<p class="mod-block-h2" data-lang="en">LASER TONING</p>
						</figcaption>
						<div class="mod-block-go"><span>go</span></div>
					</a></figure>
				</li>
				<li class="mod-block index_service-item col-xs-3">
					<figure><a href="service_cnt.php">
						<div class="mod-block-pic index_service-pic pic">
							<img src="dist/images/temp/tem-pic4.jpg" alt="">
						</div>
						<figcaption>
							<p class="mod-block-h1" data-lang="tw">淨膚雷射</p>
							<p class="mod-block-h2" data-lang="en">LASER TONING</p>
						</figcaption>
						<div class="mod-block-go"><span>go</span></div>
					</a></figure>
				</li>
			</ul><!-- /.container  END  !! -->
			<div class="index_service-more">
				<div class="btn btn-aphrodite"><a href="<?php webPageUrlAu('service'); ?>">MORE SERVICE</a></div>
			</div>
		</div><!-- /.wrapper  END  !! -->
	</section>
	<section class="index_news bar fullbg">
		<div class="wrapper">
			<div class="container">
				<div class="col-xs-4">
					<div class="index_news-pic pic">
						<img src="dist/images/temp/tem-pic5.jpg" alt="">
					</div>
				</div>
				<div class="col-xs-8">
					<ul class="index_news-list">
						<li class="index_news-item" data-pic="<?php echo $news_pic_array[0]['pic']; ?>"><a href="">
							<span class="news-title">【 女神案例 】讓心情黑白變彩色的神奇手術</span>
							<span class="news-time">01-31-2015</span>
						</a></li>
						<li class="index_news-item" data-pic="<?php echo $news_pic_array[1]['pic']; ?>"><a href="">
							<span class="news-title">【 女神案例 】可愛女變身氣質女</span>
							<span class="news-time">11-05-2014</span>
						</a></li>
						<li class="index_news-item" data-pic="<?php echo $news_pic_array[2]['pic']; ?>"><a href="">
							<span class="news-title">【 整形達人 】告別本壘板臉型</span>
							<span class="news-time">09-28-2014</span>
						</a></li>
						<li class="index_news-item" data-pic="<?php echo $news_pic_array[3]['pic']; ?>"><a href="">
							<span class="news-title">【 整形達人 】打造美型五官</span>
							<span class="news-time">06-02-2014</span>
						</a></li>
						<li class="index_news-item" data-pic="<?php echo $news_pic_array[4]['pic']; ?>"><a href="">
							<span class="news-title">【 整形達人 】 整形達人出刊-韓式嘟嘟鼻雕術+娃娃電眼放大術</span>
							<span class="news-time">04-03-2014</span>
						</a></li>
						<li class="index_news-item" data-pic="<?php echo $news_pic_array[5]['pic']; ?>"><a href="">
							<span class="news-title">【 綜藝節目 】綜藝大熱門-嘉仕美素人大集合嘍～</span>
							<span class="news-time">03-13-2014</span>
						</a></li>
					</ul>
					<div class="index_news-more">
						<div class="btn btn-aphrodite"><a href="<?php webPageUrlAu('news'); ?>">MORE NEWS</a></div>
					</div>
				</div>
			</div><!-- /.container  END  !! -->
		</div><!-- /.wrapper  END  !! -->
	</section>
	<section class="index_showcase bar">
		<div class="wrapper">
			<div class="container">
				<ul class="index_showcase-list">
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
				<div class="index_showcase-more">
					<div class="btn btn-aphrodite"><a href="<?php webPageUrlAu('goddess'); ?>">showcase</a></div>
				</div>
			</div><!-- /.container  END  !! -->
		</div><!-- /.wrapper  END  !! -->
	</section>
</main>

<?php
// -------------------------------
// Footer
// -------------------------------
	include_once INC_PATH.'footer.php';
 ?>
</div><!-- /.ip-main  END  !! -->
</div><!-- /.ip-container  END  !! -->

<?php
// -------------------------------
// Script in the FOOT
// -------------------------------
	include_once INC_PATH.'scriptfoot.php';
 ?>

<script>
$(window).load(function(){
	var bannerSlider = $('#bannerSlider');
	if (bannerSlider.length) {

		$('#bannerSlider').flexslider({
			animation      : "fade",
			controlNav     : true,
			directionNav   : true,
			slideshowSpeed : 5000,
			easing: "easeInOutElastic",
			animationLoop: true,
			// initDelay: 1000,
			minItems: 1,
			maxItems: 5,
			// itemMargin: 2,
	        // move:1102,
	        // controlsContainer: $('#hcarouselcontrols .well'),
			init: function(){
				// (function () {

					var support = { animations : Modernizr.cssanimations },
						container = document.getElementById( 'ip-container' ),
						header = container.querySelector( 'header.ip-header' ),
						loader = new PathLoader( document.getElementById( 'ip-loader-circle' ) ),
						animEndEventNames = { 'WebkitAnimation' : 'webkitAnimationEnd', 'OAnimation' : 'oAnimationEnd', 'msAnimation' : 'MSAnimationEnd', 'animation' : 'animationend' },
						// animation end event name
						animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ];

					function init() {
						var onEndInitialAnimation = function() {
							if( support.animations ) {
								this.removeEventListener( animEndEventName, onEndInitialAnimation );
							}

							startLoading();
						};

						// disable scrolling
						window.addEventListener( 'scroll', noscroll );

						// initial animation
						classie.add( container, 'loading' );

						if( support.animations ) {
							container.addEventListener( animEndEventName, onEndInitialAnimation );
						}
						else {
							onEndInitialAnimation();
						}
					}

					function startLoading() {
						// simulate loading something..
						var simulationFn = function(instance) {
							var progress = 0,
								interval = setInterval( function() {
									progress = Math.min( progress + Math.random() * 0.1, 1 );

									instance.setProgress( progress );

									// reached the end
									if( progress === 1 ) {
										classie.remove( container, 'loading' );
										classie.add( container, 'loaded' );
										clearInterval( interval );

										var onEndHeaderAnimation = function(ev) {
											if( support.animations ) {
												if( ev.target !== header ) return;
												this.removeEventListener( animEndEventName, onEndHeaderAnimation );
											}

											classie.add( document.body, 'layout-switch' );
											window.removeEventListener( 'scroll', noscroll );
										};

										if( support.animations ) {
											header.addEventListener( animEndEventName, onEndHeaderAnimation );
										}
										else {
											onEndHeaderAnimation();
										}
									}
								}, 80 );
						};

						loader.setProgressFn( simulationFn );
					}
					
					function noscroll() {
						window.scrollTo( 0, 0 );
					}

					init();

				// })();

			}
		});
	};



});

$(function() {
	$(".index_news-item").hover(function() {
		var thispic = $(this).data('pic');
		// console.log(thispic);
		$(".index_news-pic img").attr("src", thispic);
	}, function() {});
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
