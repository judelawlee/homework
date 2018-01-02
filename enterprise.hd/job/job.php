<?php
require_once '../include/common.inc.php';
$rooturl='..';
$css_url='../templates/'.$skin_user.'/css/';
$js_url='../templates/'.$skin_user.'/js/';
$img_url='../templates/'.$skin_user.'/images/';
$navurl=($rooturl=='..')?$rooturl.'/':'';

$search_sql=' where 1=1';
$order_sql=list_order($class1_info['list_order']);
if($search=='detail_search'){
	if($c_title){
		$search_sql.=' and c_title like %'.$c_title.'%';
	}	
	if($e_title){
		$search_sql.=' and e_title like %'.$e_title.'%';
	}
	$total_count=$db->counter($web_job,$search_sql,'*');
}else{
	$total_count=$db->counter($web_job,$search_sql,'*');
}
require_once '../include/page.class.php';
$page=(int)$page;
if($page_input){
	$page=$page_input;
}
$list_num=$web_job_list;
$rowset=new Pager($total_count,$list_num,$page);
$from_record=$rowset->_offset();
$query='select * from '.$web_job.$search_sql.$order_sql.' limit '.$from_record.','.$list_num;
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	$url1_c='showjob.php?id='.$list['id'];
	$url2_c='showjob'.$list['id'].'.html';	
	$url1_e='showjob.php?en=en&id='.$list['id'];
	$url2_e='showjob'.$list['id'].'_en.html';
	$list['c_url']=$webhtml?$url2_c:$url1_c;
	$list['e_url']=$webhtml?$url2_e:$url1_e;
	if($list['new_ok']==1){
		$job_list_new[]=$list;
	}	
	if($list['com_ok']==1){
		$job_list_com[]=$list;
	}
	$job_list[]=$list;
}
$c_page_list=$rowset->link('job.php?class1='.$class1.'&class2='.$class2.'&class3='.$class3.'&search='.$search.'&c_title='.$c_title.'&page=');
$e_page_list=$rowset->link('job.php?en=en&class1='.$class1.'&class2='.$class2.'&class3='.$class3.'&search='.$search.'&c_title='.$c_title.'&page=');
require_once '../include/head.php';

$class_info=$db->get_one('select * from '.$web_column.' where module=6');
$nav_x['c_name']=$class_info['c_name'];
$nav_x['e_name']=$class_info['e_name'];

if($en=='en'){
	$show['e_description']=$class_info['e_description']?$class_info['e_description']:$e_keywords;
	$show['e_keywords']=$class_info['e_keywords']?$class_info['e_keywords']:$e_keywords;
	$e_title_keywords=$class_info['e_name'].'--'.$e_title_keywords;
	include template('e_job');
}else{
	$show['c_description']=$class_info['c_description']?$class_info['c_description']:$c_keywords;
	$show['c_keywords']=$class_info['c_keywords']?$class_info['c_keywords']:$c_keywords;
	$c_title_keywords=$class_info['c_name'].'--'.$c_title_keywords;
	include template('job');	
}

footer();
?>