<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>
<title></title>

<?php
// -------------------------------
// SEO
// CSS
// Script in the HEAD
// -------------------------------
	include_once INC_PATH.'head.php';
 ?>

<style>
main img {
	width: 100%;
	max-width: none;
}
</style>
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
// -------------------------------
// header.php inclube fb code
// -------------------------------
	// include_once INC_PATH.'header.php';
 ?>

<main>
	<img src="<?php echo TEMP_PATH; ?>sec1.jpg" alt="">
	<img src="<?php echo TEMP_PATH; ?>sec2.jpg" alt="">
	<img src="<?php echo TEMP_PATH; ?>sec3.jpg" alt="">
	<img src="<?php echo TEMP_PATH; ?>sec4.jpg" alt="">
	<img src="<?php echo TEMP_PATH; ?>sec5.jpg" alt="">
</main>

<?php
// -------------------------------
// Footer
// -------------------------------
	// include_once INC_PATH.'footer.php';
 ?>

<?php
// -------------------------------
// Script in the FOOT
// -------------------------------
	include_once INC_PATH.'scriptfoot.php';
 ?>

<?php
// -------------------------------
// google analytics
// -------------------------------
	include_once INC_PATH.'ga.php';
 ?>

</body>
</html>
