<?php
require_once '../login/login_check.php';
include_once("../../fckeditor/fckeditor.php");
require_once '../left.php';
if($action=='modify'){
	
}else{
	$id=$_GET['id'];
	$about=$db->get_one('select * from '.$column.' where id='.$id);
	if(!$about){
		okinfo('../set/basic.php',$lang['noid']);
	}
}
$rooturl="..";
$css_url='../templates/'.$web_skin.'/css/';
$js_url='../templates/'.$web_skin.'/js/';
$img_url='../templates/'.$web_skin.'/images/';
include template('about');
footer();
?>