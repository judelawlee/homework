<?php
require_once '../login/login_check.php';
require_once '../left.php';
$admin_ok=1;
if($_POST['action']=='add'){
	$useid=$_POST['useid'];
	$admin_if=$db->get_one('select * from '.$web_admin_table.' where admin_id=\''.$useid.'\'');
	if($admin_if){
		okinfo('javascript:history.back();',$lang['user_mudb1']);
	}
	$pass1=md5($_POST['pass1']);
	$name=$_POST['name'];
	$sex=$_POST['sex'];
	$tel=$_POST['tel'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$qq=$_POST['qq'];
	$msn=$_POST['msn'];
	$taobao=$_POST['taobao'];
	$admin_introduction=$_POST['admin_introduction'];
	$admin_register_date=strtotime($m_now_date);
	$admin_approval_date=strtotime($m_now_date);
	$admin_ok=$admin_ok;
	$query='insert into '.$web_admin_table.' set admin_id=\''.$useid.'\',admin_pass=\''.$pass1.'\',admin_name=\''.$name.'\',admin_sex='.$sex.',admin_mobile=\''.$mobile.'\',admin_email=\''.$email.'\',admin_qq=\''.$qq.'\',admin_msn=\''.$msn.'\',admin_taobao=\''.$taobao.'\',admin_introduction=\''.$admin_introduction.'\',admin_register_date='.$admin_register_date.',admin_approval_date='.$admin_approval_date.',admin_ok='.$admin_ok;
	$db->query($query);
	okinfo('index.php',$lang['user_admin']);
	

}
?>