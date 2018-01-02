<?php
require_once '../login/login_check.php';
require_once '../left.php';
$query='select * from '.$column.' where bigclass=0 and if_in=0 order by no_order';
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	$column_list[]=$list;
}

$css_url='../templates/'.$web_skin.'/css/';
$js_url='../templates/'.$web_skin.'/js/';
$img_url='../templates/'.$web_skin.'/images/';
include template('admin_add');
footer();
?>