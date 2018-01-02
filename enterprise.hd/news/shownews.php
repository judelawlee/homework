<?php
require_once '../include/common.inc.php';
$rooturl='..';
$css_url='../templates/'.$skin_user.'/css/';
$js_url='../templates/'.$skin_user.'/js/';
$img_url='../templates/'.$skin_user.'/images/';
$navurl=($rooturl=='..')?$rooturl.'/':'';

$news=$db->get_one('select * from '.$web_news.' where id='.$_GET['id']);
if(!$news){ 
	okinfo('../',$lang['noid']);
}
$news['c_content']=contentshow($news['c_content']);
$news['e_content']=contentshow($news['e_content']);
$class1=$news['class1'];
$class2=$news['class2'];
$class3=$news['class3'];

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
$order_sql=list_order($class1_info['list_order']);
if($search=='detail_search'){
	if($c_title){
		$search_sql.=' and c_title like %'.$c_title.'%';
	}	
	if($e_title){
		$search_sql.=' and e_title like %'.$e_title.'%';
	}
}
$query='select * from '.$web_news.$search_sql.$order_sql;
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	$url1_c='shownews.php?id='.$list['id'];
	$url2_c='shownews'.$list['id'].'.html';	
	$url1_e='shownews.php?en=en&id='.$list['id'];
	$url2_e='shownews'.$list['id'].'_en.html';
	$list['c_url']=$webhtml?$url2_c:$url1_c;
	$list['e_url']=$webhtml?$url2_e:$url1_e;
	if($list['new_ok']==1){
		$news_list_new[]=$list;
	}	
	if($list['com_ok']==1){
		$news_list_com[]=$list;
	}
	$news_list[]=$list;
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
	$show['e_description']=$class_info['e_description']?$class_info['e_description']:$e_keywords;
	$show['e_keywords']=$class_info['e_keywords']?$class_info['e_keywords']:$e_keywords;
	$e_title_keywords=$class_info['e_name'].'--'.$e_title_keywords;
	$nav_x['e_name']=$nav_x['e_name'].'>'.$news['e_title'];
	include template('e_shownews');
}else{
	$show['c_description']=$news['c_description']?$news['c_description']:$c_keywords;
	$show['c_keywords']=$news['c_keywords']?$news['c_keywords']:$c_keywords;
	$c_title_keywords=$class_info['c_name'].'--'.$c_title_keywords;
	$nav_x['c_name']=$nav_x['c_name'].'>'.$news['c_title'];
	include template('shownews');	
}

footer();
?>