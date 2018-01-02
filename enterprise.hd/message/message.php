<?php
require_once '../include/common.inc.php';
$settings=parse_ini_file('config.inc.php');
@extract($settings);
$rooturl='..';
$css_url='../templates/'.$skin_user.'/css/';
$js_url='../templates/'.$skin_user.'/js/';
$img_url='../templates/'.$skin_user.'/images/';
$navurl=($rooturl=='..')?$rooturl.'/':'';
$ip=getenv('REMOTE_ADDR');
$message_column=$db->get_one('select * from '.$web_column.' where module=7');
$navtitle=($en=='en')?$message_column['e_name']:$message_column['c_name'];
if($action=='add'){
	
}else{
	require_once '../include/head.php';
	if($en=='en'){
		$show['e_description']=$e_keywords;
		$show['e_keywords']=$e_keywords;
		$e_title_keywords=$navtitle.'--'.$e_title_keywords;
		include template('e_message');
	}else{
		$show['e_description']=$c_keywords;
		$show['e_keywords']=$c_keywords;
		$e_title_keywords=$navtitle.'--'.$c_title_keywords;
		include template('message');
	}
}
?>