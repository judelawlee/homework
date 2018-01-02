<?php
require_once '../login/login_check.php';
require_once '../left.php';
$action=$_POST['action'];
if($action=="modify"){
	$banner_x=$_POST['banner_x'];
	$banner_y=$_POST['banner_y'];
	require_once 'configsave.php';
	okinfo('banner.php',$lang['user_admin']);	
}else{
	$css_url='../templates/'.$web_skin.'/css/';
	$js_url='../templates/'.$web_skin.'/js/';
	$img_url='../templates/'.$web_skin.'/images/';
	include template('set_banner');
	footer();
}
?>