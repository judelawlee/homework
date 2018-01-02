<?php
$admin_index=false;
require_once '../login/login_check.php';
$adminno=$db->counter($web_admin_table,'','*');
if($adminno<=1){
	okinfo('index.php','请先添加管理员再删除');
}
if($action=='del'){
	
}else{
	$admin_list=$db->get_one('select * from '.$web_admin_table.' where id='.$_GET['id']);
	if(!$admin_list){
		okinfo('index.php',$lang['noid']);
	}
	$query='delete from '.$web_admin_table.' where id='.$_GET['id'];
	$db->query($query);
	okinfo('index.php',$lang['user_admin']);
}
?>