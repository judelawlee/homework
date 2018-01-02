<?php
require_once '../login/login_check.php';
require_once '../left.php';

$class1=$_GET['class1'];
$class1_info=$db->get_one('select * from '.$column.' where id='.$class1);
if(!$class1_info){
	okinfo('../set/basic.php',$lang['noid']);
}
if($search=='detail_search'){
	
}else{
	$total_count=$db->counter($product,$search_sql,'*');
}
require_once '../include/page.class.php';
$page=(int)$page;
if($page_input){
	$page=$page_input;
}
$list_num=16;
$rowset=new Pager($total_count,$list_num,$page);
$from_record=$rowset->_offset();
$query='select * from '.$web_job.$search_sql.$order_sql.' limit '.$from_record.','.$list_num;
$result=$db->query($query); 
while($list=$db->fetch_array($result)){
	$job_list[]=$list;
}
$page_list=$rowset->link('index.php?admin_id='.$admin_id.'&admin_name='.$admin_name.'&search='.$search.'&page=');
$css_url='../templates/'.$web_skin.'/css/';
$js_url='../templates/'.$web_skin.'/js/';
$img_url='../templates/'.$web_skin.'/images/';
include template('job');
footer();
?>