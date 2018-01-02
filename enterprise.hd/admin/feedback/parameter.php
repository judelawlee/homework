<?php
require_once '../login/login_check.php';
require_once '../left.php';
if($_GET['action']=='modify'){
	
}else{
	$query='select * from '.$web_fdparameter.' order by no_order';
	$result=$db->query($query);
	while($row=$db->fetch_array($result)){
		$list[]=$row;
	}
	$css_url='../templates/'.$web_skin.'/css/';
	$js_url='../templates/'.$web_skin.'/js/';
	$img_url='../templates/'.$web_skin.'/images/';
	include template('fd_parameter');
	footer();
}
?>