<?php
require_once '../login/login_check.php';
require_once '../left.php';
if($_POST['action']=='modify'){
	$web_product_list=$_POST['web_product_list'];
	$web_news_list=$_POST['web_news_list'];
	$web_download_list=$_POST['web_download_list'];
	$web_img_list=$_POST['web_img_list'];
	$web_job_list=$_POST['web_job_list'];
	$web_search_list=$_POST['web_search_list'];
	require_once 'configsave.php';
	okinfo('skin.php',$lang['user_admin']);
}else{
	$query='select * from '.$web_skin_table.' order by id';
	$result=$db->query($query);
	while($list=$db->fetch_array($result)){
		$skin_list[]=$list;
	}
	$css_url='../templates/'.$web_skin.'/css/';
	$js_url='../templates/'.$web_skin.'/js/';
	$img_url='../templates/'.$web_skin.'/images/';
	include template('set_skin');
	footer();	
}
?>