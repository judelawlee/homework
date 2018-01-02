<?php
require_once '../login/login_check.php';
require_once '../left.php';
if($_GET['action']=='modify'){
	require_once('configsave.php');
	okinfo('inc.php',$lang['user_admin']);
}else{
	$settings=parse_ini_file('../../message/config.inc.php');
	@extract($settings);
	$web_fd_email1=($web_fd_email?'checked="checked"':'');
	$web_fd_type1=($web_fd_type?'checked="checked"':'');
	$web_fd_back1=($web_fd_back?'checked="checked"':'');
	$css_url='../templates/'.$web_skin.'/css/';
	$js_url='../templates/'.$web_skin.'/js/';
	$img_url='../templates/'.$web_skin.'/images/';
	include template('message_inc');
	footer();
}
?>