<?php
require_once '../include/common.inc.php';
$settings=parse_ini_file('config.inc.php');
@extract($settings);
$rooturl='..';
$css_url='../templates/'.$skin_user.'/css/';
$js_url='../templates/'.$skin_user.'/js/';
$img_url='../templates/'.$skin_user.'/images/';
$navurl=($rooturl=='..')?$rooturl.'/':'';
$fromurl=$_SERVER['HTTP_REFERER'];
$ip=getenv('REMOTE_ADDR');
if($title==''){
	$navtitle=($en=='en')?'FeedBack':'咨询反馈';
	$title=$navtitle;
}else{
	$c_navtitle='['.$title.']信息反馈';
	$e_navtitle='['.$title.']FeedBack';
	$navtitle=($en=='en')?$e_navtitle:$c_navtitle;
}
if($action=='add'){
	$addtime=$now_date;
	$ipok=$db->get_one('select * from '.$web_feedback.' where id='.$ip.' order by addtime desc');
	$time1=strtotime($ipok['addtime']);
	$time2=strtotime($now_date);
	$timeok=(float)($time2-$time1);

	if($timeok<=$fd_time){
		$c_fd_time='请不要在'.$fd_time.'秒内重复提交信息，谢谢合作！';
		$e_fd_time='Please do not send information again in '.$fd_time.' second!';
		$fd_time=($en=='en')?$e_fd_time:$c_fd_time;
		okinfo('javascript:history.back();',$fd_time);
	}
	
	$fdstr=$web_fd_word;
	$fdarray=explode('|',$fdstr);
	$fdarrayno=count($fdarray);
	$fdok=false;
	for($j=1;$j<=20;$j++){
		$para='para'.$j;
		$content=$content.'-'.$$para;
	}
	for($i=0;$i<$fdarrayno;$i++){
		if(strstr($content,$fdarray[$i])){
			$fdok=true;
			$fd_word=$fdarray[$i];
			break;
		}
	}
	
	$c_fd_word='反馈信息中不能包含['.$fd_word.']!';
	$e_fd_word='['.$fd_word.'] is not permited to send!';
	$fd_word=($en=='en')?$e_fd_word:$c_fd_word;
	if($fdok==true){
		okinfo('javascript:history.back();',$fd_word);
	}
}else{
	$query='select * from '.$web_fdlist.' order by no_order';
	$result=$db->query($query);
	while($list=$db->fetch_array($result)){
		$fdlist[]=$list;
	}
	
	$query='select * from '.$web_fdparameter.' where use_ok=1 order by no_order';
	$result=$db->query($query);
	while($list=$db->fetch_array($result)){
		if($list['wr_ok']=='1'){
			$list['wr_must']='*';
		}
		switch($list['type']){
			case 1:
				$list['c_input']='<input name=para'.$list['id'].' type=text size=30 />';
				$list['e_input']='<input name=para'.$list['id'].' type=text size=30 />';
			break;
			case 2:
				$list['c_input']='<select name=para'.$list['id'].'><option select=selected value="">请选择</option>';
				foreach($fdlist as $key=>$val){
					if($val['bigid']==$list['id']){
						$list['c_input']=$list['c_input'].'<option value='.$val['c_list'].'>'.$val['c_list'].'</option/>';
						$list['e_input']=$list['e_input'].'<option value='.$val['e_list'].'>'.$val['e_list'].'</option/>';
					}
				}
				$list['input']=$list['e_input'].'</select>';
			break;
			case 3:
				$list['c_input']='<textarea name=para'.$list['id'].' cols=50 rows=5></textarea>';
				$list['e_input']='<textarea name=para'.$list['id'].' cols=50 rows=5></textarea>';
			break;
		}
		$fd_para[]=$list;
		if($list['wr_ok']){
			$fdwr_list[]=$list;
		}
	}
}

require_once '../include/head.php';
if($en=='en'){
	$show['e_description']=$e_keywords;
	$show['e_keywords']=$e_keywords;
	$e_title_keywords=$navtitle.'--'.$e_title_keywords;
	include template('e_feedback');
}else{
	$show['c_description']=$c_keywords;
	$show['c_keywords']=$c_keywords;
	$c_title_keywords=$navtitle.'--'.$c_title_keywords;
	include template('feedback');	
}

footer();
?>