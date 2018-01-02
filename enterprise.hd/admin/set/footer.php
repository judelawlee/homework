<?php
require_once '../login/login_check.php';
require_once '../left.php';
$action=$_POST['action'];
if($action=="modify"){
	$c_footright=$_POST[c_footright];
	$e_footright=$_POST[e_footright];
	$c_footaddress=$_POST[c_footaddress];
	$e_footaddress=$_POST[e_footaddress];
	$c_foottel=$_POST[c_foottel];;
	$e_foottel=$_POST[e_foottel];;
	$c_footother=$_POST[c_footother];
	$e_footother=$_POST[e_footother];
	require_once 'configsave.php';
	okinfo('footer.php',$lang['user_admin']);	
}else{
	$css_url='../templates/'.$web_skin.'/css/';
	$js_url='../templates/'.$web_skin.'/js/';
	$img_url='../templates/'.$web_skin.'/images/';
	include template('set_footer');
	footer();
}
?>