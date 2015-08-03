<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';

?>
<title>聯絡我們 | <?php echo PROJECT; ?></title>

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

<body class="contact_page">
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
		<section class="aphrodite_contact cf">
			<div class="col-xs-3">
				<div class="aphrodite_contact-pic"></div>
			</div>
			<div class="col-xs-9">
				<h2 class="aphrodite-fashion-clinic hide_txt">女神時尚診所 Aphrodite Fashion Clinic</h2>
				<div class="col-xs-6 txt-3">
台北市大安區忠孝東路4段329號7樓之1<br>
板南線國父紀念館站1號出口<br>
營業時間：12:00~9:00<br>
客服專線：02-27526931
				</div>
				<div class="col-xs-6 txt-3">
7F.-1, No.329, Sec. 4, Zhongxiao E. Rd., <br>
Da’an Dist., Taipei City 106, Taiwan (R.O.C.)<br>
OPEN：12:00~9:00<br>
TEL：02-27526931
				</div>
				<div class="col-xs-12 social_btns">
					<div class="col-xs-4 social_btns-item"><a href="">
						<div class="social_btn">
							<div class="inner"><i class="icon-facebook2"></i></div>
						</div>
						<div class="txt">FACEBOOK專頁</div>
					</a></div>
					<div class="col-xs-4 social_btns-item js-openLine">
						<div class="social_btn">
							<div class="inner"><i class="icon-line2"></i></div>
						</div>
						<div class="txt">LINE 即時客服</div>
					</div>
					<div class="col-xs-4 social_btns-item"><a href="">
						<div class="social_btn">
							<div class="inner"><i class="icon-pixnet2"></i></div>
						</div>
						<div class="txt">痞客邦部落格</div>
					</a></div>
				</div>
			</div>
		</section>
		<section class="map iframe-rwd">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.7765151314065!2d121.55699419999999!3d25.041657299999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442abc6fe1e4f7b%3A0x5c20c0beee5217dc!2zMTA25Y-w5YyX5biC5aSn5a6J5Y2A5b-g5a2d5p2x6Lev5Zub5q61MzI56Jmf!5e0!3m2!1szh-TW!2stw!4v1438579988471" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
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
