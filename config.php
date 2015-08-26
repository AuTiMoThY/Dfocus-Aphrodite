<?php 
require_once 'plugin/mobiledetect/Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

define('IMG_PATH', 'dist/images/');
define('TEMP_PATH', 'dist/images/temp/');
define('INC_PATH', 'dist/inc/');
define('CSS_PATH', 'dist/css/');
define('JS_PATH', 'dist/js/');

define('PROJECT', '女神時尚診所');
define('KEYWORDS', '網站關鍵字在這');
define('DESCRIPTION', '網站描述在這');
define('COPYRIGHT', '網站Copyright在這');


function path_au($what) {
	switch ($what) {
		case 'img':
			echo IMG_PATH;
			break;
		case 'temp':
			echo TEMP_PATH;
			break;
		case 'css':
			echo CSS_PATH;
			break;
		case 'js':
			echo JS_PATH;
			break;

		default:
			echo IMG_PATH;
			break;
	}
}

function designByDFocus(){
	echo "Design by <a href=\"http://www.ecmd.com.tw/\" target=\"_blank\"><img src=\"" . IMG_PATH . "df-logo.png\" alt=\"\"></a>";
}

?>