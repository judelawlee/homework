<?php
require_once '../login/login_check.php';
require_once '../left.php';
$action=$_POST['action'];
if($action=="add"){

}elseif($action=='modify'){
	$css_url='../templates/'.$web_skin.'/css/';
	$js_url='../templates/'.$web_skin.'/js/';
	$img_url='../templates/'.$web_skin.'/images/';
	include template('label');
	footer();
}elseif($action=='editor'){
	
}elseif($action=='delete'){
	
}else{
	$css_url='../templates/'.$web_skin.'/css/';
	$js_url='../templates/'.$web_skin.'/js/';
	$img_url='../templates/'.$web_skin.'/images/';
	include template('label');
	footer();	
}
?>