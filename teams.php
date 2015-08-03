<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';

?>
<title>醫療團隊 | <?php echo PROJECT; ?></title>

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

<body class="teams_page">
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
        <section class="teams_intro">
        	<div class="logo ib">
        		<img src="<?php path_au('img'); ?>logo-3.png" alt="">
        	</div>
        	<div class="teams_intro-txt ib">
        		<h2>專業醫療服務團隊</h2>
        		<p class="txt-1">女神時尚診所已由政府機關主管單位市政府及衛生局，合法登記設立完成，營業項目醫美微整型、整形外科、非侵入式曲線雕塑、MSC抗衰老因子、NGS次世代癌症基因檢測等六大項目:醫療團隊背景由台大、陽明、中國附醫之專科醫師及博士研究員，橫跨臨床醫學、學術、醫療級保養品專業領域之醫療團隊組成。實施系統性的管理及專業化的分工，注意每位顧客的隱私且要受到尊重，各階層皆環環相扣，把關優良的服務品質。</p>
        	</div>
        </section>

	<section class="teams_doctor meet_our_costumers cf">
		<div id="" class="cf">
<div id="mocScrollBox">
	<ul class="moc-list cf">
		<?php// foreach ($customer as $ckey => $cval) {?>
		<? //} ?>
		<li id="moc1" class="moc-item">
			<figure>
				<div class="teams_doctor-pic pic">
					<img src="<?php path_au('temp'); ?>tem-doctor1.jpg" alt="">
				</div>
				<figcaption class="txt-w1">李進良 醫師</figcaption>
			</figure>
		</li>
		<li id="moc2" class="moc-item">
			<figure>
				<div class="teams_doctor-pic pic">
					<img src="<?php path_au('temp'); ?>tem-doctor2.jpg" alt="">
				</div>
				<figcaption class="txt-w1">李進良 醫師</figcaption>
			</figure>
		</li>
		<li id="moc3" class="moc-item">
			<figure>
				<div class="teams_doctor-pic pic">
					<img src="<?php path_au('temp'); ?>tem-doctor3.jpg" alt="">
				</div>
				<figcaption class="txt-w1">劉佳政 醫師</figcaption>
			</figure>
		</li>
		<li id="moc4" class="moc-item">
			<figure>
				<div class="teams_doctor-pic pic">
					<img src="<?php path_au('temp'); ?>tem-doctor4.jpg" alt="">
				</div>
				<figcaption class="txt-w1">張峯瑞 醫師</figcaption>
			</figure>
		</li>
		<li id="moc5" class="moc-item">
			<figure>
				<div class="teams_doctor-pic pic">
					<img src="<?php path_au('temp'); ?>tem-doctor5.jpg" alt="">
				</div>
				<figcaption class="txt-w1">方穎涵 醫師</figcaption>
			</figure>
		</li>
	
	</ul>
</div><!-- /#mocScrollBox  END  !! -->
<script>
var total = 5;
function mocScrollBox(){
	$("#mocScrollBox li.active").removeClass('active');
	$("#mocScrollBox li").eq(2).addClass('active');

for (var i = 1; i <= total; i++) {
    if ($("#moc"+i).hasClass('active')) {
    	$("#moc"+i+"Article").addClass('active');
    } else{
    	$("#moc"+i+"Article").removeClass('active');
    };
};
}
</script>
			<div class="moc-block col-xs-12">
				<div class="moc-row">
					<ul class="moc-ctrl">
						<li id="mocPrevBtn" class="moc-btn btn btn-prev"></li>
						<li id="mocNextBtn" class="moc-btn btn btn-next"></li>
					</ul>
				</div>
				<div id="mocQueue" class="moc-row">
<ul class="cf">
	<li id="moc1Article">
		<p class="moc-name txt-w1 text-center">李進良&nbsp;醫師</p>
		<div class="moc-cnt txt-w1 cf">
			<p class="moc-cnt-left col-xs-6">
			<!-- 純文字編輯器 後台textarea 串接要加nl2br -->
			Radiesse微晶瓷專業認證醫師<br>
			瑞絲朗玻尿酸專業認證醫師<br>
			Radiesse微晶瓷專業認證醫師<br>
			3D聚左旋乳酸Sculptra注射專業認證醫師
			</p>
			<p class="moc-cnt-right col-xs-6">
			<!-- 純文字編輯器 後台textarea 串接要加nl2br-->
			瑞絲朗玻尿酸專業認證醫師<br>
			3D聚左旋乳酸Sculptra注射專業認證醫師<br>
			瑞絲朗玻尿酸專業認證醫師<br>
			Radiesse微晶瓷專業認證醫師
			</p>
		</div>
	</li>

	<li id="moc2Article">
		<p class="moc-name txt-w1 text-center">李進良&nbsp;醫師</p>
		<div class="moc-cnt txt-w1 cf">
			<p class="moc-cnt-left col-xs-6">
			<!-- 純文字編輯器 後台textarea 串接要加nl2br -->
			瑞絲朗玻尿酸專業認證醫師<br>
			Radiesse微晶瓷專業認證醫師<br>
			3D聚左旋乳酸Sculptra注射專業認證醫師<br>
			瑞絲朗玻尿酸專業認證醫師
			</p>
			<p class="moc-cnt-right col-xs-6">
			<!-- 純文字編輯器 後台textarea 串接要加nl2br-->
			瑞絲朗玻尿酸專業認證醫師<br>
			Radiesse微晶瓷專業認證醫師<br>
			3D聚左旋乳酸Sculptra注射專業認證醫師
			</p>
		</div>
	</li>

	<li id="moc3Article">
		<p class="moc-name txt-w1 text-center">劉佳政&nbsp;醫師</p>
		<div class="moc-cnt txt-w1 cf">
			<p class="moc-cnt-left col-xs-6">
			<!-- 純文字編輯器 後台textarea 串接要加nl2br -->
			瑞絲朗玻尿酸專業認證醫師<br>
			Radiesse微晶瓷專業認證醫師<br>
			3D聚左旋乳酸Sculptra注射專業認證醫師<br>
			瑞絲朗玻尿酸專業認證醫師<br>
			3D聚左旋乳酸Sculptra注射專業認證醫師
			</p>
			<p class="moc-cnt-right col-xs-6">
			<!-- 純文字編輯器 後台textarea 串接要加nl2br-->
			瑞絲朗玻尿酸專業認證醫師<br>
			Radiesse微晶瓷專業認證醫師<br>
			3D聚左旋乳酸Sculptra注射專業認證醫師<br>
			瑞絲朗玻尿酸專業認證醫師<br>
			3D聚左旋乳酸Sculptra注射專業認證醫師
			</p>
		</div>
	</li>

	<li id="moc4Article">
		<p class="moc-name txt-w1 text-center">張峯瑞&nbsp;醫師</p>
		<div class="moc-cnt txt-w1 cf">
			<p class="moc-cnt-left col-xs-6">
			<!-- 純文字編輯器 後台textarea 串接要加nl2br -->
			瑞絲朗玻尿酸專業認證醫師<br>
			Radiesse微晶瓷專業認證醫師<br>
			3D聚左旋乳酸Sculptra注射專業認證醫師<br>
			瑞絲朗玻尿酸專業認證醫師<br>
			3D聚左旋乳酸Sculptra注射專業認證醫師
			</p>
			<p class="moc-cnt-right col-xs-6">
			<!-- 純文字編輯器 後台textarea 串接要加nl2br-->
			瑞絲朗玻尿酸專業認證醫師<br>
			Radiesse微晶瓷專業認證醫師<br>
			3D聚左旋乳酸Sculptra注射專業認證醫師<br>
			瑞絲朗玻尿酸專業認證醫師<br>
			3D聚左旋乳酸Sculptra注射專業認證醫師
			</p>
		</div>
	</li>

	<li id="moc5Article">
		<p class="moc-name txt-w1 text-center">方穎涵&nbsp;醫師</p>
		<div class="moc-cnt txt-w1 cf">
			<p class="moc-cnt-left col-xs-6">
			<!-- 純文字編輯器 後台textarea 串接要加nl2br -->
			瑞絲朗玻尿酸專業認證醫師<br>
			Radiesse微晶瓷專業認證醫師<br>
			3D聚左旋乳酸Sculptra注射專業認證醫師<br>
			瑞絲朗玻尿酸專業認證醫師<br>
			3D聚左旋乳酸Sculptra注射專業認證醫師
			</p>
			<p class="moc-cnt-right col-xs-6">
			<!-- 純文字編輯器 後台textarea 串接要加nl2br-->
			瑞絲朗玻尿酸專業認證醫師<br>
			Radiesse微晶瓷專業認證醫師<br>
			3D聚左旋乳酸Sculptra注射專業認證醫師<br>
			瑞絲朗玻尿酸專業認證醫師<br>
			3D聚左旋乳酸Sculptra注射專業認證醫師
			</p>
		</div>
	</li>

</ul>
				</div><!-- /#mocQueue  END  !! -->
			</div><!-- /.moc-block  END  !! -->
		</div>
	</section><!-- /.teams_doctor  END  !! -->
	<section class="teams_art1 teams_art-block cf">
		<div class="col-xs-8 ib">
			<article>
				<h2 class="txt-title1">打造VIP客製化美麗</h2>
<p class="txt-2">醫美產業不僅僅是醫療產業，最重要的這是美的產業，因為美的事業是，是如女神般一樣神聖、一樣備受寵愛，落實所有員工本著真誠、善良、美麗的心態來服務每位貴賓，使貴賓們不僅在視覺上得到滿足，同時也讓心靈更富足了，提升對美的認知。<br>
深信美貌與身心健康是密不可分，首創訴求「全方位身心靈平衡」的醫療美容殿堂，。診所整體設計結合法國宮廷奢華風格，人可以沉浸在全方位精品氛圍中，頂級SPA服務、皇家級規格全身保養、高科技醫學美容、塑身療程，及VIP客製化健康管理，將讓您的美不是僅呈現在表面，僅停留在瞬間，而是由裡到外散發出來美麗光采，在美麗發展到極致，讓所有消費者都能得到從頭到腳的呵護及無微不至的完美照料。</p>
			</article>
		</div>
		<div class="col-xs-4 ib">
			<div class="teams_art1-pic pic">
				<img src="<?php path_au('temp'); ?>tem-pic7.jpg" alt="">
			</div>
		</div>
	</section><!-- /.teams_art1  END  !! -->
	<section class="teams_art2 teams_art-block cf">
		<div class="col-xs-6 ib">
			<div class="teams_art2-pic pic">
				<img src="<?php path_au('temp'); ?>tem-pic8.jpg" alt="">
			</div>
		</div>
		<div class="col-xs-6 ib">
			<article>
				<h2 class="txt-title1">成為智慧與美貌並俱的現代女性</h2>
<p class="txt-2"><美神> 艾芙蘿戴蒂Aphrodite，掌管愛與美之神， 亙古至今藝術家們無不對美的追求窮極一生。在千年的神話中更是超越時空恆久不滅美的盛宴，時至今日醫學技術的純熟，而我們心中對美的認知有了更精確的要求，發現美也不再是那麼遙不可及了，簡單幸福追求的美便是女神時尚診所的核心精神:"贈人玫瑰，手有餘香，手繪美麗，幸福相隨"成為智慧與美貌並俱的現代女性，讓女神時尚陪您一起美麗幸福下去吧!</p>
			</article>
		</div>
	</section><!-- /.teams_art2  END  !! -->
	<div class="goback">
		<div class="btn btn-aphrodite btn-back"><a href="javascript:history.go(-1);">BACK</a></div>
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
<script src="plugin/scrollbox/jquery.scrollbox.js"></script>
<script>
$(function() {
	$("#mocScrollBox li").eq(2).addClass('active');
	$("#mocQueue li").eq(2).addClass('active');
	var getCustomerId = $("#mocScrollBox li").eq(2).attr("id");
	var customerArt = getCustomerId+"Article";
	console.log(getCustomerId);
	console.log(customerArt);

	// $("#mocQueue")
     // var dis = $('.popular_prod-item').outerHeight();
     $("#mocScrollBox").scrollbox({
     	direction: 'h',
		// distance: dis,
		autoPlay: false,
		// infiniteLoop: false,
		// switchAmount: 1,
		// speed: 60
		// queue: 'mocQueue'
		afterForward: function (data) {
			// console.log(data.currentFirstChild);
			// if (data.switchCount >= 3) {
			// 	this.trigger('backward');
			// }
			mocScrollBox();
		},
		afterBackward: function (data) {
			// console.log(data);
			mocScrollBox();
		}
	})
     $('#mocPrevBtn').click(function () {
          $('#mocScrollBox').trigger('backward');
     });
     $('#mocNextBtn').click(function () {
          $('#mocScrollBox').trigger('forward');
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
