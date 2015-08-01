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
<section class="fullbg">
	<div class="container">
		<div class="col-xs-3 back_to_list text-center">
			<a href="goddess.php" class="txt-w1"><i class="icon-tri_left"></i>回到列表</a>
		</div>
	</div>
</section>

<main>
<div class="wrapper">
    <div class="container">
        <aside class="goddess_aside col-xs-3">
			<div class="mod-block2 goddess_aside-now">
				<figure>
					<div class="mod-block2-pic goddess_aside-pic pic">
						<img src="dist/images/temp/tem-case1.jpg" alt="">
					</div>
					<figcaption>
						CURRENT VIEWING <i class="icon-tri_right"></i>
					</figcaption>
				</figure>
			</div>
			<div class="goddess_aside-new_add">
				<div class="title">NEW ADDITION</div>
			<!-- 顯示最新三則 ( 除本篇外 ) -->
				<ul class="goddess_aside-list cf">
					<li class="mod-block2 goddess_aside-item">
						<figure><a href="goddess_cnt.php">
							<div class="mod-block2-pic goddess_aside-pic pic">
								<img src="dist/images/temp/tem-case5.jpg" alt="">
							</div>
							<figcaption>
								拒絕毛手毛腳！！OOO醫生讓ＭＭ們 乾淨清爽過一夏
							</figcaption>
						</a></figure>
					</li>
					<li class="mod-block2 goddess_aside-item">
						<figure><a href="goddess_cnt.php">
							<div class="mod-block2-pic goddess_aside-pic pic">
								<img src="dist/images/temp/tem-case2.jpg" alt="">
							</div>
							<figcaption>
								拒絕毛手毛腳！！XXX醫生讓DD們 乾淨清爽過一夏
							</figcaption>
						</a></figure>
					</li>
					<li class="mod-block2 goddess_aside-item">
						<figure><a href="goddess_cnt.php">
							<div class="mod-block2-pic goddess_aside-pic pic">
								<img src="dist/images/temp/tem-case3.jpg" alt="">
							</div>
							<figcaption>
								拒絕毛手毛腳！！OOO醫生讓ＭＭ們 乾淨清爽過一夏
							</figcaption>
						</a></figure>
					</li>
				</ul>
			</div>
        </aside>
        <section class="goddess_cnt col-xs-9">
        	<article class="goddess_cnt-block">
        		<header class="">
        			<h1 class="goddess_cnt-h1">拒絕毛手毛腳毛手毛腳！！OOO醫生讓ＭＭ們 乾淨清爽過一夏乾淨清爽過一夏乾淨清爽過一夏</h1>
        		</header>
        		<section class="goddess_cnt-container">
        			<div class="editorDF">
        				<!-- 圖文編輯器 -->
        				<img src="<?php path_au('temp'); ?>tem2.jpg" alt="" class="temp">
        			</div>
        		</section>
        		<footer>
        			<div class="go_next text-right">
        				<a href="goddess_cnt.php" class="txt-w1">
    						NEXT : 淚溝衰臉掰掰掰 OOO醫生拯救我的掉漆模特路
        					<i class="icon-tri_right"></i>
        				</a>
        			</div>
        		</footer>
        	</article>
			<div class="btns">
				<div class="btn btn-aphrodite btn-back ib" style="margin-right:1.2em"><a href="javascript:history.go(-1);">BACK</a></div>
				<div class="btn btn-aphrodite btn-top ib"><a href="#top">TOP</a></div>
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
	$(".btn-top").localScroll();
});

</script>
<?php
// -------------------------------
// google analytics
// -------------------------------
	include_once INC_PATH.'ga.php';
 ?>

</body>
</html>
