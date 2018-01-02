<?php
require_once '../include/common.inc.php';
$rooturl='..';
$css_url='../templates/'.$skin_user.'/css/';
$js_url='../templates/'.$skin_user.'/js/';
$img_url='../templates/'.$skin_user.'/images/';
$navurl=($rooturl=='..')?$rooturl.'/':'';

$query='select * from '.$web_parameter.' where type=4 and use_ok=1 order by no_order';
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	if($list['maxsize']==100){
		$download_para100[]=$list;
	}
	$download_para[]=$list;
}
$id=$_GET['id'];
$download=$db->get_one('select * from '.$web_download.' where id='.$id);
if(!$download){
	okinfo('../',$lang['noid']);
}
$download['c_content']=contentshow($download['c_content']);
$download['e_content']=contentshow($download['e_content']);
$class1=$download['class1'];
$class2=$download['class2'];
$class3=$download['class3'];

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
$query='select * from '.$web_product.$search_sql.$order_sql;
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	$url1_c='showdownload.php?id='.$list['id'];
	$url2_c='showdownload'.$list['id'].'.html';	
	$url1_e='showdownload.php?en=en&id='.$list['id'];
	$url2_e='showdownload'.$list['id'].'_en.html';
	$list['c_url']=$webhtml?$url2_c:$url1_c;
	$list['e_url']=$webhtml?$url2_e:$url1_e;
	if($list['new_ok']==1){
		$download_list_new[]=$list;
	}	
	if($list['com_ok']==1){
		$download_list_com[]=$list;
	}
	$download_list[]=$list;
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
	$show['e_description']=$product['e_description']?$product['e_description']:$e_keywords;
	$show['e_keywords']=$product['e_keywords']?$product['e_keywords']:$e_keywords;
	$e_title_keywords=$product['e_name'].'--'.$e_title_keywords;
	$nav_x['e_name']=$nav_x['e_name'].'>'.$product['e_title'];
	include template('e_showdownload');
}else{
	$show['c_description']=$product['c_description']?$product['c_description']:$c_keywords;
	$show['c_keywords']=$product['c_keywords']?$product['c_keywords']:$c_keywords;
	$c_title_keywords=$product['c_name'].'--'.$c_title_keywords;
	$nav_x['c_name']=$nav_x['c_name'].'>'.$product['c_title'];
	include template('showdownload');	
}

footer();
?>