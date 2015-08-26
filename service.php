<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';

$get_category = isset($_GET['category']) ? $_GET['category'] : 1;

if ($get_category>3 || $get_category<1) {
	header("Location: service.php?category=1");
}

?>
<title>服務項目 | <?php echo PROJECT; ?></title>

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

<body class="service_page">
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

<nav class="category_bar">
	<div class="wrapper s1">
		<ul class="cf ">
<?php 
if ($get_category==1) {
?>
			<li class="col-xs-4"><a href="service.php?category=2">整形醫療<br>Cosmetic Surgery</a></li>
			<li class="col-xs-4 active"><a href="javascript:void 0;">微整形醫療<br>Micro-Cosmetic Surgery</a></li>
			<li class="col-xs-4"><a href="service.php?category=3">抗衰老醫學<br>Examination</a></li>
<?php
}
elseif ($get_category==2) {
?>
			<li class="col-xs-4"><a href="service.php?category=1">微整形醫療<br>Micro-Cosmetic Surgery</a></li>
			<li class="col-xs-4 active"><a href="javascript:void 0;">整形醫療<br>Cosmetic Surgery</a></li>
			<li class="col-xs-4"><a href="service.php?category=3">抗衰老醫學<br>Examination</a></li>
<?php
}
elseif ($get_category==3) {
?>
			<li class="col-xs-4"><a href="service.php?category=1">微整形醫療<br>Micro-Cosmetic Surgery</a></li>
			<li class="col-xs-4 active"><a href="javascript:void 0;">抗衰老醫學<br>Examination</a></li>
			<li class="col-xs-4"><a href="service.php?category=2">整形醫療<br>Cosmetic Surgery</a></li>

<?php
}
 ?>
		</ul><!-- /.container  END  !! -->
	</div><!-- /.wrapper  END  !! -->
	<div class="bg"></div>
	<div class="shape"></div>
</nav><!-- /.category_bar  END  !! -->

<main>
<div class="wrapper">
    <div class="container">
        <aside class="service_category col-xs-3">
        	<ul class="service_category-list">
        	<?php if ($get_category==1) {?>
        		<li class="js-item active">
        	<?php }else{ ?>
        		<li class="js-item">
    		<?php }?>
        			<a href="javascript:void 0;">微整形醫療</a>
					<ul class="service_category-sub_list js-sublist">
<li class="active"><a href="service.php?category=1&subcate=1">波尿酸</a></li>
<li><a href="service.php?category=1&subcate=2">3D聚左旋乳酸</a></li>
<li><a href="service.php?category=1&subcate=3">音波拉皮</a></li>
<li><a href="service.php?category=1&subcate=4">酷爾塑平</a></li>
<li><a href="service.php?category=1&subcate=5">玫瑰拉提術</a></li>
<li><a href="service.php?category=1&subcate=6">美白針</a></li>
<li><a href="service.php?category=1&subcate=7">杏仁酸換膚</a></li>
<li><a href="service.php?category=1&subcate=8">LPG纖體雕塑</a></li>
<li><a href="service.php?category=1&subcate=9">飛梭雷射</a></li>
<li><a href="service.php?category=1&subcate=10">G緊雷射</a></li>
					</ul>
        		</li>
        	<?php if ($get_category==2) {?>
        		<li class="js-item active">
        	<?php }else{ ?>
        		<li class="js-item">
    		<?php }?>
        			<a href="javascript:void 0;">整形醫療</a>
					<ul class="service_category-sub_list js-sublist">
<li><a href="service.php?category=2&subcate=1">【眼部】縫</a></li>
<li><a href="service.php?category=2&subcate=2">【眼部】迷你切割</a></li>
<li><a href="service.php?category=2&subcate=3">【眼部】眼袋</a></li>
<li><a href="service.php?category=2&subcate=4">【鼻】韓式</a></li>
<li><a href="service.php?category=2&subcate=5">【鼻】GOTEX</a></li>
<li><a href="service.php?category=2&subcate=6">【鼻】自體軟骨</a></li>
<li><a href="service.php?category=2&subcate=7">【拉皮】內視鏡</a></li>
<li><a href="service.php?category=2&subcate=8">【拉皮】5爪8爪</a></li>
<li><a href="service.php?category=2&subcate=9">【胸部】自體</a></li>
<li><a href="service.php?category=2&subcate=10">【胸部】內視果凍</a></li>
<li><a href="service.php?category=2&subcate=12">【抽脂】</a></li>
<li><a href="service.php?category=2&subcate=13">【美腿】</a></li>
					</ul>
        		</li>
        	<?php if ($get_category==3) {?>
        		<li class="js-item active">
        	<?php }else{ ?>
        		<li class="js-item">
    		<?php }?>
        			<a href="service.php?category=3">抗衰老醫學</a>
					<ul class="service_category-sub_list js-sublist">
<li><a href="service.php?category=2&subcate=1">【眼部】縫</a></li>
<li><a href="service.php?category=2&subcate=2">【眼部】迷你切割</a></li>
<li><a href="service.php?category=2&subcate=3">【眼部】眼袋</a></li>
<li><a href="service.php?category=2&subcate=4">【鼻】韓式</a></li>
<li><a href="service.php?category=2&subcate=5">【鼻】GOTEX</a></li>
<li><a href="service.php?category=2&subcate=6">【鼻】自體軟骨</a></li>
<li><a href="service.php?category=2&subcate=7">【拉皮】內視鏡</a></li>
<li><a href="service.php?category=2&subcate=8">【拉皮】5爪8爪</a></li>
<li><a href="service.php?category=2&subcate=9">【胸部】自體</a></li>
<li><a href="service.php?category=2&subcate=10">【胸部】內視果凍</a></li>
<li><a href="service.php?category=2&subcate=12">【抽脂】</a></li>
<li><a href="service.php?category=2&subcate=13">【美腿】</a></li>
					</ul>
        		</li>
        	</ul>
        </aside>
        <section class="service_list-wrap col-xs-9">
        	<ul class="cf">
				<li class="mod-block service_list-item col-xs-4">
					<figure><a href="service_cnt.php">
						<div class="mod-block-pic service_list-pic pic">
							<img src="dist/images/temp/tem-pic1.jpg" alt="">
						</div>
						<figcaption>
							<p class="mod-block-h1" data-lang="tw">波尿酸</p>
							<p class="mod-block-h2" data-lang="en">HYALURONIC ACID</p>
						</figcaption>
						<div class="mod-block-go"><span>go</span></div>
					</a></figure>
				</li>
				<li class="mod-block service_list-item col-xs-4">
					<figure><a href="service_cnt.php">
						<div class="mod-block-pic service_list-pic pic">
							<img src="dist/images/temp/tem-pic1.jpg" alt="">
						</div>
						<figcaption>
							<p class="mod-block-h1" data-lang="tw">波尿酸</p>
							<p class="mod-block-h2" data-lang="en">HYALURONIC ACID</p>
						</figcaption>
						<div class="mod-block-go"><span>go</span></div>
					</a></figure>
				</li>
				<li class="mod-block service_list-item col-xs-4">
					<figure><a href="service_cnt.php">
						<div class="mod-block-pic service_list-pic pic">
							<img src="dist/images/temp/tem-pic1.jpg" alt="">
						</div>
						<figcaption>
							<p class="mod-block-h1" data-lang="tw">波尿酸</p>
							<p class="mod-block-h2" data-lang="en">HYALURONIC ACID</p>
						</figcaption>
						<div class="mod-block-go"><span>go</span></div>
					</a></figure>
				</li>
				<li class="mod-block service_list-item col-xs-4">
					<figure><a href="service_cnt.php">
						<div class="mod-block-pic service_list-pic pic">
							<img src="dist/images/temp/tem-pic1.jpg" alt="">
						</div>
						<figcaption>
							<p class="mod-block-h1" data-lang="tw">波尿酸</p>
							<p class="mod-block-h2" data-lang="en">HYALURONIC ACID</p>
						</figcaption>
						<div class="mod-block-go"><span>go</span></div>
					</a></figure>
				</li>
				<li class="mod-block service_list-item col-xs-4">
					<figure><a href="service_cnt.php">
						<div class="mod-block-pic service_list-pic pic">
							<img src="dist/images/temp/tem-pic1.jpg" alt="">
						</div>
						<figcaption>
							<p class="mod-block-h1" data-lang="tw">波尿酸</p>
							<p class="mod-block-h2" data-lang="en">HYALURONIC ACID</p>
						</figcaption>
						<div class="mod-block-go"><span>go</span></div>
					</a></figure>
				</li>
        	</ul>
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
