<?php
require_once '../login/login_check.php';
require_once '../left.php';
$action=$_POST['action'];
if($action=="modify"){
	$c_title_keywords=$_POST['c_title_keywords'];
	$e_title_keywords=$_POST['e_title_keywords'];
	$web_c_keywords=$_POST['web_c_keywords'];
	$web_e_keywords=$_POST['web_e_keywords'];
	$web_c_description=$_POST['web_c_description'];
	$web_e_description=$_POST['web_e_description'];
	require_once 'configsave.php';
	okinfo('seo.php',$lang['user_admin']);	
}else{
	$css_url='../templates/'.$web_skin.'/css/';
	$js_url='../templates/'.$web_skin.'/js/';
	$img_url='../templates/'.$web_skin.'/images/';
	include template('set_seo');
	footer();
}
?>