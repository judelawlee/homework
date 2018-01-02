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
	$path=ROOTPATH.'templates/'.$skin.'/'.$template.$ext;
	!file_exists($path)&&$path=ROOTPATH.'templates/'.$skin.'/'.$template.'.blade.'.$ext;
	return $path;
}

function footer(){
	$output=str_replace(array('<!--<!---->','<!---->','<!--fck-->','<!--fck','fck-->',"\r",substr($admin_url,0,-1)),'',ob_get_contents());
	ob_end_clean();
	echo $output;
	unset($output);
	mysql_close();
	exit;
}

function utf8Substr($str, $from, $len){ 
	return preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$from.'}'. 
	'((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s', 
	'$1',$str); 
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

function contentshow($content){
	require_once(ROOTPATH.'config/str.inc.php');
	foreach($str as $key=>$val){
		$content=str_replace($val[0],$val[1],$content);
	}
	return $content;
}

/**操作成功提示**/
function okinfo($url = '../site/sysadmin.php',$langinfo){
	echo("<script type='text/javascript'> alert('$langinfo'); location.href='$url'; </script>");
	exit;
}
?>

