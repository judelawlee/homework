<?php
require_once '../login/login_check.php';
include_once("../../fckeditor/fckeditor.php");
require_once '../left.php';
$query='select * from '.$web_parameter.' where type=3 order by no_order';
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	if($list['use_ok']==1){
		$list_p[]=$list;
	}
}

$class2_ok=false;
$query='select * from '.$column.' where module=3 order by no_order';
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	if($list['id']==$class1){
		$class1_name=$list['c_name'];
	}	
	if($list['bigclass']==$class1){
		$column_list2[]=$list;
		$class2_ok=true;
	}
	if($class['bigclass']!=0){
		$column_list[]=$list;
	}
}

$css_url='../templates/'.$web_skin.'/css/';
$js_url='../templates/'.$web_skin.'/js/';
$img_url='../templates/'.$web_skin.'/images/';
include template('product_add');
footer();
?>