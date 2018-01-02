<?php
//系统函数库
function daddslashes($string,$force=0){
	!defined('MAGIC_QUOTES_GPC') && define('MAGIC_QUOTES_GPC',get_magic_quotes_gpc());
	if(!MAGIC_QUOTES_GPC || $force){
		if(is_array($string)){
			foreach($string as $key=>$value){
				$string[$key]=daddslashes($val,$force);
			}
		}else{
			$string=daddslashes($string);
		}
	}
	return $string;
}

function template($template,$ext='php'){
	global $skin_user,$skin;
	if(empty($skin)){
		$skin=$skin_user;
	}
	unset($GLOBALS[con_db_id],$GLOBALS[con_db_pass],$GLOBALS[con_db_name]);
	$path=ROOTPATH_ADMIN.'templates/'.$skin.'/'.$template.$ext;
	!file_exists($path)&&$path=$path=ROOTPATH_ADMIN.'templates/web/'.$template.'.blade.'.$ext;
	return $path;
}

/**操作成功提示**/
function okinfo($url = '../site/sysadmin.php',$langinfo){
	echo("<script type='text/javascript'> alert('$langinfo'); location.href='$url'; </script>");
	exit;
}

/**是否导航条显示**/
function navdisplay($nav){
	switch($nav){
		case '0';
			$nav="<font color=#999999>不显示</font>";
		break;
		case '1';
			$nav="<font color=#990000>头部主导航条</font>";
		break;
		case '2';
			$nav="尾部导航条";
		break;
		case '3';
			$nav="<font color=blue>都显示</font>";
		break;
	}
	return $nav;
}
/**栏目属性显示**/
function if_in($if_in){
	switch($if_in){
		case '0';
			$if_in="系统模块";
		break;
		case '1';
			$if_in="<font color=red>外部栏目</font>";
		break;
	}
	return $if_in;
}

//读取数据排序
function list_order($listid){
	switch($listid){
		case '0';
			$list_order=" order by updatetime desc";
			return $list_order;
		break;
		case '1';
			$list_order=" order by updatetime desc";
			return $list_order;
		break;
		case '2';
			$list_order=" order by addtime desc";
			return $list_order;
		break;
		case '3';
			$list_order=" order by hits desc";
			return $list_order;
		break;
		case '4';
			$list_order=" order by id desc";
			return $list_order;
		break;
		case '5';
			$list_order=" order by id";
			return $list_order;
		break;
	}
}

/**模型显示**/
function module($module){
	switch($module){
		case '0';
			$module="<font color=red>外部模块</font>";
		break;
		case '1';
			$module="简介模块";
		break;
		case '2';
			$module="文章模块";
		break;
		case '3';
			$module="产品模块";
		break;
		case '4';
			$module="下载模块";
		break;
		case '5';
			$module="图片模块";
		break;
		case '6';
			$module="招聘模块";
		break;
		case '7';
			$module="留言模块";
		break;
	}
	return $module;
}

function footer(){
	$output=str_replace(array('<!--<!---->','<!---->','<!--fck-->','<!--fck','fck-->',"\r",substr($admin_url,0,-1)),'',ob_get_contents());
	ob_end_clean();
	echo $output;
	unset($output);
	mysql_close();
	exit;
}
?>