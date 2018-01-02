<?php
require_once '../login/login_check.php';
require_once '../left.php';
if($_POST['action']=='modify'){
	$web_img_type=$_POST['web_img_type'];;
	$web_img_maxsize=$_POST['web_img_maxsize'];
	$web_text_fonts=$_POST['web_text_font'];;
	$web_text_size=$_POST['web_text_size'];;
	$web_text_color=$_POST['web_text_color'];;
	$web_text_angle=$_POST['web_text_angle'];
	$web_img_x=$_POST['web_img_x'];
	$web_img_y=$_POST['web_img_y'];
	require_once '../include/upfile.class.php';
	$f=new upfile($web_water_img,'',$web_img_maxsize,'');
	require_once 'configsave.php';
	okinfo('img.php',$lang['user_admin']);
}else{
	if($web_big_water==1){
		$web_big_water1='checked=\'checked\'';
	}	
	if($web_thumb_water==1){
		$web_thumb_water1='checked=\'checked\'';
	}
	if($web_water_class==1){
		$web_water_class1='checked=\'checked\'';
	}	
	if($web_water_class==2){
		$web_water_class2='checked=\'checked\'';
	}
	switch($web_watermark){
		case 0:
			$web_watermark0='checked=\'checked\'';
		break;		
		case 1:
			$web_watermark1='checked=\'checked\'';
		break;		
		case 2:
			$web_watermark2='checked=\'checked\'';
		break;		
		case 3:
			$web_watermark3='checked=\'checked\'';
		break;		
		case 4:
			$web_watermark4='checked=\'checked\'';
		break;		
		case 5:
			$web_watermark5='checked=\'checked\'';
		break;		
		case 6:
			$web_watermark6='checked=\'checked\'';
		break;		
		case 7:
			$web_watermark7='checked=\'checked\'';
		break;
		case 8:
			$web_watermark8='checked=\'checked\'';
		break;
	}

	$css_url='../templates/'.$web_skin.'/css/';
	$js_url='../templates/'.$web_skin.'/js/';
	$img_url='../templates/'.$web_skin.'/images/';
	include template('set_img');
	footer();	
}
?>