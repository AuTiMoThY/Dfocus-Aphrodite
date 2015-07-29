<?php 


/**
* 
*/
class PageUrlAu {
    public $webPageBuild=   "javascript: alert('網頁建置中，敬請稍待!');";
    public $index=          "index.php";
    public $service=        "service.php";
    public $teams=          "teams.php";
    public $goddess=        "goddess.php";
    public $news=           "news.php";
    public $contact=        "contact.php";


}
/**
* 
*/
class navAu extends PageUrlAu {

	function navListAu($headerOrFooter) {

		$understanding_sub = array(
		                '什麼是肢端肥大症'=>$this->understanding_1,
		                '疾病重要三激素'=>$this->understanding_2,
		                '發病率'=>$this->understanding_3
		                );


		$Nav = array();
		$Nav['服務項目']=$this->service;
		$Nav['醫療團隊']=$this->teams;
		$Nav['女神案例']=$this->goddess;
		$Nav['最新資訊']=$this->news;
		$Nav['聯絡我們']=$this->contact;
		$NavLen = 0;
		$NavLen ++;

		if ($headerOrFooter == 'headerNav') {
			foreach ($Nav as $item => $url) {
						# code...
echo "<li class=\"main_nav-item nav-aphr item$NavLen\">";
if (is_array($url)) {
echo "	<a href=\"javascript:mainNavLink('goto$NavLen');\">";
}else{
echo "	<a href=\"$url\">";
}
echo "		<span class=\"wrap\"><i class=\"main_nav-icon\"></i><span class=\"main_nav-txt\">$item</span></span>";
echo "	</a>";
if (is_array($url)) {
$subNavLen = 0;
$subNavLen ++;
echo "	<ul class=\"subNav js-subNav\">";
	foreach ($url as $subNav => $subUrl) {
echo "		<li class=\"subNav-item item{$NavLen}_{$subNavLen}\">";
echo "			<a href=\"{$subUrl}\">{$subNav}</a>";
echo "		</li>";
++$subNavLen;
	}
echo "		<li class=\"padding\"></li>";
echo "	</ul>";
}
echo "</li>";

				++$NavLen;
			}
		} elseif ($headerOrFooter == 'footerNav') {
			foreach ($Nav as $item => $url) {

echo <<<_OUTPUT
<li class="footer_nav-item nav-IPC item$NavLen">
	<a href="$url">
		<span class="wrap"><span class="footer_nav-icon"></span><span>$item</span></span>
	</a>
</li>
_OUTPUT;

				++$NavLen;
			}
		}
	}
}

/**
* function
*/

function headerNavAu(){
	$navAu = new navAu();
	$navAu -> navListAu($headerOrFooter ='headerNav');

}

function footerNavAu(){
	$navAu = new navAu();
	$navAu -> navListAu($headerOrFooter ='footerNav');

}

function webPageUrlAu($url){
	$PageUrlAu = new PageUrlAu();
	echo $PageUrlAu->{$url};
}



 ?>