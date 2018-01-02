<?php
require_once '../login/login_check.php';
require_once '../left.php';
$type=$_GET['type'];
switch($type){
	case '3':
		$p_title='产品参数设置';
		$k=1;
	break;
}
if($action=='modify'){
	
}else{
	$query='select * from '.$web_parameter.' where type='.$type.' order by no_order';
	$result=$db->query($query);
	while($list1=$db->fetch_array($result)){
		$list1['use_ok']=($list1['use_ok']==1)?'checked="checked"':"";
		if($web_en_lang!=1){
			$e_markok="disabled='disabled'";
			$list1['e_mark1']='英文没有开启';
		}else{
			$list1['e_mark1']=$list['e_mark'];
		}
		$list[]=$list1;
	}
}


$css_url='../templates/'.$web_skin.'/css/';
$js_url='../templates/'.$web_skin.'/js/';
$img_url='../templates/'.$web_skin.'/images/';
include template('parameter');
footer();
?>