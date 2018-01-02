<?php
require_once '../login/login_check.php';
require_once '../left.php';

$class1=$_GET['class1'];
$class1_info=$db->get_one('select * from '.$column.' where id='.$class1);
if(!$class1_info){
	okinfo('../set/basic.php',$lang['noid']);
}
$query='select * from '.$column.' where bigclass='.$class1;
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	$class2_list[]=$list;
}
$search_sql=' where class1='.$class1;
$class2=$_GET['class2'];
if($class2){
	$search_sql.=' and class2='.$class2;
	$query='select * from '.$column.' where bigclass='.$class2;
	$result=$db->query($query);
	while($list=$db->fetch_array($result)){
		$class3_list[]=$list;
	}
}
$class3=$_GET['class3'];
$order_sql=list_order($class1_info['list_order']);
if($search=='detail_search'){
	
}else{
	$total_count=$db->counter($news,$search_sql,'*');
}
require_once '../include/page.class.php';
$page=(int)$page;
if($page_input){
	$page=$page_input;
}
$list_num=16;
$rowset=new Pager($total_count,$list_num,$page);
$from_record=$rowset->_offset();
$query='select * from '.$news.$search_sql.$order_sql.' limit '.$from_record.','.$list_num;
$result=$db->query($query); 
while($list=$db->fetch_array($result)){
	$news_list[]=$list;
}
$page_list=$rowset->link('index.php?admin_id='.$admin_id.'&admin_name='.$admin_name.'&search='.$search.'&page=');
$css_url='../templates/'.$web_skin.'/css/';
$js_url='../templates/'.$web_skin.'/js/';
$img_url='../templates/'.$web_skin.'/images/';
include template('article');
footer();
?>