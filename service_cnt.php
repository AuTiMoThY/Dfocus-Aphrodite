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
			<li class="col-xs-4"><a href="service.php?category=2">整形外科<br>Cosmetic Surgery</a></li>
			<li class="col-xs-4 active"><a href="javascript:void 0;">微整<br>Micro-Cosmetic Surgery</a></li>
			<li class="col-xs-4"><a href="service.php?category=3">檢測<br>Examination</a></li>
<?php
}
elseif ($get_category==2) {
?>
			<li class="col-xs-4"><a href="service.php?category=1">微整<br>Micro-Cosmetic Surgery</a></li>
			<li class="col-xs-4 active"><a href="javascript:void 0;">整形外科<br>Cosmetic Surgery</a></li>
			<li class="col-xs-4"><a href="service.php?category=3">檢測<br>Examination</a></li>
<?php
}
elseif ($get_category==3) {
?>
			<li class="col-xs-4"><a href="service.php?category=1">微整<br>Micro-Cosmetic Surgery</a></li>
			<li class="col-xs-4 active"><a href="javascript:void 0;">檢測<br>Examination</a></li>
			<li class="col-xs-4"><a href="service.php?category=2">整形外科<br>Cosmetic Surgery</a></li>

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
        			<a href="javascript:void 0;">微整</a>
					<ul class="service_category-sub_list js-sublist">
<li class="active"><a href="">波尿酸</a></li>
<li><a href="service.php?category=1">3D聚左旋乳酸</a></li>
<li><a href="service.php?category=1">音波拉皮</a></li>
<li><a href="service.php?category=1">酷爾塑平</a></li>
<li><a href="service.php?category=1">玫瑰拉提術</a></li>
<li><a href="service.php?category=1">美白針</a></li>
<li><a href="service.php?category=1">杏仁酸換膚</a></li>
<li><a href="service.php?category=1">LPG纖體雕塑</a></li>
<li><a href="service.php?category=1">飛梭雷射</a></li>
<li><a href="service.php?category=1">G緊雷射</a></li>
					</ul>
        		</li>
        	<?php if ($get_category==2) {?>
        		<li class="js-item active">
        	<?php }else{ ?>
        		<li class="js-item">
    		<?php }?>
        			<a href="javascript:void 0;">整形外科</a>
					<ul class="service_category-sub_list js-sublist">
<li><a href="service.php?category=2">【眼部】縫</a></li>
<li><a href="service.php?category=2">【眼部】迷你切割</a></li>
<li><a href="service.php?category=2">【眼部】眼袋</a></li>
<li><a href="service.php?category=2">【鼻】韓式</a></li>
<li><a href="service.php?category=2">【鼻】GOTEX</a></li>
<li><a href="service.php?category=2">【鼻】自體軟骨</a></li>
<li><a href="service.php?category=2">【拉皮】內視鏡</a></li>
<li><a href="service.php?category=2">【拉皮】5爪8爪</a></li>
<li><a href="service.php?category=2">【胸部】自體</a></li>
<li><a href="service.php?category=2">【胸部】內視果凍</a></li>
<li><a href="service.php?category=2">【抽脂】</a></li>
<li><a href="service.php?category=2">【美腿】</a></li>
					</ul>
        		</li>
        	<?php if ($get_category==3) {?>
        		<li class="active">
        	<?php }else{ ?>
        		<li>
    		<?php }?>
        			<a href="">檢測</a></li>
        	</ul>
        </aside>
        <section class="service_cnt col-xs-9">
        	<article class="service_cnt-block">
        		<header class="">
        			<h1 class="service_cnt-h1">玫瑰拉提術</h1>
        			<h2 class="service_cnt-h2">ROSE LIFTING</h2>
					<img src="upload/service/banner-service1-5.jpg" alt="玫瑰拉提術 ROSE LIFTING">
        		</header>
        		<section class="service_cnt-container">
        			<div class="editorDF">
        				<!-- 圖文編輯器 -->
        				<img src="<?php path_au('temp'); ?>tem1.jpg" alt="" class="temp">
        			</div>
        		</section>
        	</article>
			<div class="goback">
				<div class="btn btn-aphrodite btn-back"><a href="javascript:history.go(-1);">BACK</a></div>
			</div>
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
