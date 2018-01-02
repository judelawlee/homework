<?php
require_once '../login/login_check.php';
require_once '../left.php';

if($search=='detail_search'){
	
}else{
	$total_count=$db->counter($web_feedback,$search_sql,'*');
}
require_once '../include/page.class.php';
$page=(int)$page;
if($page_input){
	$page=$page_input;
}
$list_num=16;
$rowset=new Pager($total_count,$list_num,$page);
$from_record=$rowset->_offset();
$query='select * from '.$web_feedback.$search_sql.$order_sql.' limit '.$from_record.','.$list_num;
$result=$db->query($query); 
while($list=$db->fetch_array($result)){
	$feedback_list[]=$list;
}
$page_list=$rowset->link('index.php?admin_id='.$admin_id.'&admin_name='.$admin_name.'&search='.$search.'&page=');
$css_url='../templates/'.$web_skin.'/css/';
$js_url='../templates/'.$web_skin.'/js/';
$img_url='../templates/'.$web_skin.'/images/';
include template('feedback');
footer();
?>