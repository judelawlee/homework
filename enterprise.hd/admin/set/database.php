<?php
require_once '../login/login_check.php';
require_once '../left.php';
if($action=='export'){
	
}elseif($action=='import'){
	
}elseif($action=='delete'){
	
}elseif($action=='down'){
	
}elseif($action=='uploadsql'){
	
}else{
	$k=0;
	$res=$db->query('show tables from '.$con_db_name);
	while($row=$db->fetch_row($res)){
		$tables[$k]=$row[0];
		$count=$db->get_one('select count(*) as number from '.$row[0]);
		$bkresults[$k]=$count['number'];
		$q=$db->query('show table status from '.$con_db_name.' like \''.$row[0].'\'');
		$s=$db->fetch_array($q);
		$size[$k]=round($s['Data_length']/1024/1024,2);
		$totalsize+=$size[$k];
		$k++;
	}
}
$css_url='../templates/'.$web_skin.'/css/';
$js_url='../templates/'.$web_skin.'/js/';
$img_url='../templates/'.$web_skin.'/images/';
include template('database');
footer();
?>