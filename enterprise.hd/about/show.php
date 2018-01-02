<?php
require_once('../include/common.inc.php');
$rooturl='..';
$css_url='../templates/'.$skin_user.'/css/';
$js_url='../templates/'.$skin_user.'/js/';
$img_url='../templates/'.$skin_user.'/images/';
$navurl=($rooturl=='..')?$rooturl.'/':'';

$show=$db->get_one('select * from '.$web_column.' where id='.$_GET['id']);
if(!$show){
	okinfo('../',$lang['noid']);
}
if($show['classtype']==3){
	$show3=$db->get_once('select * from '.$web_column.' where id='.$show['bigclass']);
	$class1=$show3['bigclass'];
}else{
	$class1=$show['bigclass']?$show['bigclass']:$_GET['id'];
}
$class1_list=$db->get_one('select * from '.$web_column.' where id='.$class1);
require_once '../include/head.php';
if($en=='en'){
	$show['e_content']=$show['e_content'];
	$show['e_description']=$show['e_description']?$show['e_description']:$e_keywords;
	$show['e_keywords']=$show['e_keywords']?$show['e_keywords']:$e_keywords;
	$e_title_keywords=$show['e_name'].'--'.$e_title_keywords;
	include template('e_show');
}else{
	$show['c_content']=$show['c_content'];
	$show['c_description']=$show['c_description']?$show['c_description']:$c_keywords;
	$show['c_keywords']=$show['c_keywords']?$show['c_keywords']:$c_keywords;
	$c_title_keywords=$show['c_name'].'--'.$c_title_keywords;
	include template('show');
}
footer();
?>