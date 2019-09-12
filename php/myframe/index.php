<?php
	$root=dirname(__FILE__);
	$root=str_replace("\\","/",$root);
	define('ROOT',$root);
	$url=$_SERVER['SERVER_NAME'];
	$url='http://'.$url.dirname($_SERVER['PHP_SELF']).'index.php';
	define('__URL__',$url);
	require_once('config/conf.php');	//加载配置文件
	require_once('lib/common.class.php');	//加载公共文件
	require_once('core/model/Model.class.php');	//加载模型文件
	require_once('lib/function.php');	//加载公共方法库
	$query_string=$_SERVER['QUERY_STRING'];
	$common=common::getInstance();
	$query_string=$common->get_query_string($query_string);
	$module=isset($_GET['m'])?$_GET['m']:'';	//获取模块名称
	$action=isset($_GET['a'])?$_GET['a']:'';	//获取模块方法 
	$common->route($module,$action,$query_string);	//路由并执行相应控制器
	// echo '<pre>';
	// print_r($_SERVER);
	
	
	
	
	
	
	
	
	
	
	
	
	
	