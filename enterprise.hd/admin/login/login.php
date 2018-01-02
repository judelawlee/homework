<?php
	$admin_index=false;
	require_once '../include/common.inc.php';
	if($webinfo_admin_name&&$webinfo_admin_pass){
		header('location:../index.php');
	}else{
		
		$css_url='../templates/'.$web_skin.'/css/';
		$js_url='../templates/'.$web_skin.'/js/';
		$img_url='../templates/'.$web_skin.'/images/';
		include template('login');
		footer();		
	}
?>