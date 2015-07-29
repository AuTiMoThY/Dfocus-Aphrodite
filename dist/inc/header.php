<?php
// fb-root
//  include_once INC_PATH.'fbscript.php';
 ?>

<header class="global_hd">
	<div id="top"></div>
	<div class="wrapper">
		<header id="logo" class="ib"><a href="<?php webPageUrlAu('index'); ?>" title="女神時尚診所首頁"><img src="dist/images/logo.png" alt=""></a></header>
		<nav class="main_nav ib">
			<ul class="cf">
			<?php headerNavAu(); ?>

			<?php
				// $mainNav = array(
				// 				'首頁'        => $indexPageUrlAu,
				// 				'書城'        => "index_bookShop.php",
				// 				'課程'        => $webPageBuild,
				// 				'財金觀點'    => $webPageBuild,
				// 				'哈燒快訊'    => $webPageBuild,
				// 				'我的IPC'     => $webPageBuild);
				// $mainNavLen = 0;
				// $mainNavLen ++;

				// foreach ($mainNav as $item => $url) {
			?>
<!-- 				<li class="main_nav-item nav-IPC item<?php //echo $mainNavLen; ?>">
					<a href="<?php //echo $url; ?>">
						<span class="wrap"><span class="main_nav-icon"></span><span><?php //echo $item; ?></span></span>
					</a>
				</li> -->
			<?php
				// 	++$mainNavLen;
				// }
			?>
			</ul>
		</nav>
	</div>
</header>
