<?php
require_once '../login/login_check.php';
require_once '../left.php';
require_once('../../fckeditor/fckeditor.php');
if($action=="modify"){
	
}else{
	$index=$db->get_one('select * from '.$web_index.' order by id desc');
	if(!$index){
		okinfo('../index.php',$lang['noid']);
	}
}

$css_url='../templates/'.$web_skin.'/css/';
$js_url='../templates/'.$web_skin.'/js/';
$img_url='../templates/'.$web_skin.'/images/';
include template('index_set');
footer();
?>