<?php
require_once '../include/common.inc.php';
$rooturl='..';
$css_url='../templates/'.$skin_user.'/css/';
$js_url='../templates/'.$skin_user.'/js/';
$img_url='../templates/'.$skin_user.'/images/';
$navurl=($rooturl=='..')?$rooturl.'/':'';
$navtitle=($en=='en')?'Friendly Link':'友情链接';
if($en=='en'){
	$query='select * from '.$web_link.' where link_lang!=\'ch\' and show_ok=1 order by orderno desc';
}else{
	$query='select * from '.$web_link.' where link_lang!=\'en\' and show_ok=1 order by orderno desc';
}
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	if($list['link_type']==0){
		$link_img[]=$list;
	}	
	if($list['link_type']==1){
		$link_text[]=$list;
	}
	$link[]=$list;
}
require_once '../include/head.php';
if($en=='en'){
	$show['e_description']=$e_keywords;
	$show['e_keywords']=$e_keywords;
	$e_title_keywords=$navtitle.'--'.$e_title_keywords;
	include template('e_link');
}else{
	$show['e_description']=$c_keywords;
	$show['e_keywords']=$c_keywords;
	$e_title_keywords=$navtitle.'--'.$c_title_keywords;
	include template('link');
}

?>