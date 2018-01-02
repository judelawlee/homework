<?php
require_once '../login/login_check.php';
require_once '../left.php';
$query='select * from '.$column.' order by no_order';
$result=$db->query($query); 
while($list=$db->fetch_array($result)){
	if($list['bigclass']==0){
		$column_big[]=$list;
	}else{
		$column_small[]=$list;
	}
}

$css_url='../templates/'.$web_skin.'/css/';
$js_url='../templates/'.$web_skin.'/js/';
$img_url='../templates/'.$web_skin.'/images/';
include template('column');
footer();
?>