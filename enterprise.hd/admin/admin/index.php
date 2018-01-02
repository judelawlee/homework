<?php
require_once '../login/login_check.php';
require_once '../left.php';
$search_sql=false;
if($search=="detail_search"){
	$search_sql=' where 1=1';
	if($admin_id){
		$search_sql.=' and admin_id like %$admin_id%';
	}	
	if($admin_id){
		$search_sql.=' and admin_name like %$admin_name%';
	}
	$total_count=$db->counter($web_admin_table,$search_sql,'*');
}else{
	$total_count=$db->counter($web_admin_table,$search_sql,'*');
}
require_once '../include/page.class.php';
$page=(int)$page;
if($page_input){
	$page=$page_input;
}
$list_num=16;
$rowset=new Pager($total_count,$list_num,$page);
$from_record=$rowset->_offset();
$query='select * from '.$web_admin_table.$search_sql.' order by admin_modify_date desc limit '.$from_record.','.$list_num;
$result=$db->query($query); 
while($list=$db->fetch_array($result)){
	$admin_list[]=$list;
}
$page_list=$rowset->link('index.php?admin_id='.$admin_id.'&admin_name='.$admin_name.'&search='.$search.'&page=');
$css_url='../templates/'.$web_skin.'/css/';
$js_url='../templates/'.$web_skin.'/js/';
$img_url='../templates/'.$web_skin.'/images/';
include template('admin');
footer();
?>