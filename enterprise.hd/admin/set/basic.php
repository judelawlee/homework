<?php
require_once '../login/login_check.php';
require_once '../left.php';
if($_POST['action']=='modify'){
	$c_webname=$_POST['c_webname'];
	$e_webname=$_POST['e_webname'];
	$weburl=$_POST['weburl'];
	if(substr($weburl,-1,1)!='/'){
		$weburl.='/';
	}
	if(!strstr($weburl,"http://")){
		$weburl="http://".$weburl;
	}
	require_once '../include/upfile.class.php';
	$f=new upfile($web_img_type,'',$web_img_maxsize,'');
	require_once 'configsave.php';
	okinfo('basic.php',$lang['user_admin']);
}else{
	$localurl='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	$localurl_a=explode("/",$localurl);
	$localurl_count=count($localurl_a);
	$localurl_admin=$localurl_a[$localurl_count-3];
	$localurl_admin.'/set/basic';
	$localurl_real=explode($localurl_admin,$localurl);
	$localurl=$localurl_real[0];
	$css_url='../templates/'.$web_skin.'/css/';
	$js_url='../templates/'.$web_skin.'/js/';
	$img_url='../templates/'.$web_skin.'/images/';
	include template('set_basic');
	footer();	
}
?>