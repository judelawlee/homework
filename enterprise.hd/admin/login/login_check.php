<?php
session_start();
if($admin_index){
	require_once 'include/common.inc.php';
}elseif($fckeditor){
	require_once'../../../../include.php/common.inc.php';
}else{
	require_once '../include/common.inc.php';
}
if($force_index!='webinfo'){
	if(!strstr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST'])){
		//die($lang['nomeet']);
	}
}

if($_POST['action']=='login'){
	$webinfo_admin_name=$_POST['login_name'];
	$webinfo_admin_pass=md5($_POST['login_pass']);
	$web_login_code=0;
	//登录验证码判断
	if($web_login_code==1){
		
	}
	
	$admin_list=$db->get_one('select * from '.$web_admin_table.' where admin_id=\''.$webinfo_admin_name.'\'');
	if(!$admin_list){
		echo("<script type='text/javascript'> alert('$lang[login_name]');location.href='login.php';</script>");
		exit;
	}elseif($admin_list['admin_pass']!=$webinfo_admin_pass){
		echo("<script type='text/javascript'> alert('$lang[login_pass]');location.href='login.php';</script>");
		exit;
	}else{
		$_SESSION['webinfo_admin_name']=$webinfo_admin_name;
		$_SESSION['webinfo_admin_pass']=$webinfo_admin_pass;
		$_SESSION['webinfo_admin_id']=$admin_list['id'];
		$_SESSION['webinfo_admin_pop']=$admin_list['admin_type'];
		$_SESSION['webinfo_admin_time']=$m_now_time;
		$query='update '.$web_admin_table.' set admin_modify_date=\''.strtotime($m_now_date).'\',admin_login=admin_login+1,admin_modify_ip=\''.ip2long($m_user_ip).'\' where admin_id=\''.$webinfo_admin_name.'\'';
		$db->query($query);
	};
	header("location:../");
}

if(!$_SESSION['webinfo_admin_name'] || !$_SESSION['webinfo_admin_pass']){
	if($admin_index){
		header('location:login/login.php');
	}else{
		header('location:../login/login.php');
	}
}






?>