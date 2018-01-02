<?php
require_once '../login/login_check.php';
require_once '../left.php';
if($search=="detail_search"){
	$search_sql=' where 1=1';
	if($c_name){
		$search_sql.=' and c_name like %$c_name%';
	}	
	$total_count=$db->counter($web_online,$search_sql,'*');
}else{
	$total_count=$db->counter($web_online,$search_sql,'*');
}
require_once '../include/page.class.php';
$page=(int)$page;
if($page_input){
	$page=$page_input;
}
$list_num=20;
$rowset=new Pager($total_count,$list_num,$page);
$from_record=$rowset->_offset();
$query='select * from '.$web_online.$search_sql.' order by no_order limit '.$from_record.','.$list_num;
$result=$db->query($query); 
while($list=$db->fetch_array($result)){
	$online_list[]=$list;
}
$page_list=$rowset->link('index.php?&search='.$search.'&page=');
$css_url='../templates/'.$web_skin.'/css/';
$js_url='../templates/'.$web_skin.'/js/';
$img_url='../templates/'.$web_skin.'/images/';
include template('online');
footer();
?>