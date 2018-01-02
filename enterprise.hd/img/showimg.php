<?php
require_once '../include/common.inc.php';
$rooturl='..';
$css_url='../templates/'.$skin_user.'/css/';
$js_url='../templates/'.$skin_user.'/js/';
$img_url='../templates/'.$skin_user.'/images/';
$navurl=($rooturl=='..')?$rooturl.'/':'';

$query='select * from '.$web_parameter.' where type=5 and use_ok=1 order by no_order';
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	if($list['maxsize']==100){
		$img_para100[]=$list;
	}
	$img_para[]=$list;
}
$id=$_GET['id'];
$img=$db->get_one('select * from '.$web_img.' where id='.$id);
if(!$img){
	okinfo('../',$lang['noid']);
}
$img['c_content']=contentshow($img['c_content']);
$img['e_content']=contentshow($img['e_content']);
$class1=$img['class1'];
$class2=$img['class2'];
$class3=$img['class3'];

$class1_info=$db->get_one('select * from '.$web_column.' where id='.$class1);
if(!$class1_info){
	okinfo('../',$lang['noid']);
}

$search_sql=' where class1='.$class1;
if($class2){
	$search_sql.=' and class2='.$class2;
}
if($class3){
	$search_sql.=' and class3='.$class3;
}
if($search=='detail_search'){
	if($c_title){
		$search_sql.=' and c_title like %'.$c_title.'%';
	}	
	if($e_title){
		$search_sql.=' and e_title like %'.$e_title.'%';
	}
}
$order_sql=list_order($class1_info['list_order']);
$query='select * from '.$web_img.$search_sql.$order_sql;
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	$url1_c='showimg.php?id='.$list['id'];
	$url2_c='showimg'.$list['id'].'.html';	
	$url1_e='showimg.php?en=en&id='.$list['id'];
	$url2_e='showimg'.$list['id'].'_en.html';
	$list['c_url']=$webhtml?$url2_c:$url1_c;
	$list['e_url']=$webhtml?$url2_e:$url1_e;
	if($list['new_ok']==1){
		$img_list_new[]=$list;
	}	
	if($list['com_ok']==1){
		$img_list_com[]=$list;
	}
	$img_list[]=$list;
}

require_once '../include/head.php';

$nav_x['c_name']=$class1_info['c_name'];
$nav_x['e_name']=$class1_info['e_name'];

if($class2!=''){
	foreach($nav_list2[$class1] as $key=>$val){
		if($class2==$val['id']){
			$class2_info=$val;
			$nav_x['c_name']=$class1_info['c_name'].' > '.$class2_info['c_name'];
			$nav_x['e_name']=$class1_info['e_name'].' > '.$class2_info['e_name'];
		}
	}
}
if($class3!=''){
	foreach($nav_list3[$class2] as $key=>$val){
		if($class3==$val['id']){
			$class3_info=$val;
			$nav_x['c_name']=$class1_info['c_name'].' > '.$class2_info['c_name'].' > '.$class3_info['c_name'];
			$nav_x['e_name']=$class1_info['e_name'].' > '.$class2_info['e_name'].' > '.$class3_info['e_name'];
		}
	}
}

if($en=='en'){
	$show['e_description']=$img['e_description']?$img['e_description']:$e_keywords;
	$show['e_keywords']=$img['e_keywords']?$img['e_keywords']:$e_keywords;
	$e_title_keywords=$img['e_name'].'--'.$e_title_keywords;
	$nav_x['e_name']=$nav_x['e_name'].'>'.$img['e_title'];
	include template('e_showimg');
}else{
	$show['c_description']=$img['c_description']?$img['c_description']:$c_keywords;
	$show['c_keywords']=$img['c_keywords']?$img['c_keywords']:$c_keywords;
	$c_title_keywords=$img['c_name'].'--'.$c_title_keywords;
	$nav_x['c_name']=$nav_x['c_name'].'>'.$img['c_title'];
	include template('showimg');	
}

footer();
?>