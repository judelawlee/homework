<?php
$index_c_url=$webhtml?$weburl.'index.html':$weburl.'index.php';
$index_e_url=$webhtml?$weburl.'index_en.html':$weburl.'index.php?en=en';
if($index_type){
	$index_e_url=$webhtml?$weburl.'index.html':$weburl.'index.php';
	$index_c_url=$webhtml?$weburl.'index_en.html':$weburl.'index.php?ch=ch';	
}
$searchurl=($en=='en')?$navurl.'search/search.php?en=en':$navurl.'search/search.php';

if($index=='index'){
	$logoarray=explode('../',$logo);
	$logo=$logoarray[1];
	for($i=1;$i<6;$i++){
		$banner='banner_'.$i;
		$banner_array=explode('../',$$banner);
		$$banner=$banner_array[1];
	}
	for($i=1;$i<6;$i++){
		$e_banner='e_banner_'.$i;
		$e_banner_array=explode('../',$$e_banner);
		$$e_banner=$e_banner_array[1];
	}
	
	$banner_backarray=explode('../',$banner_back);
	$banner_back=$banner_backarray[1];
	
	$banner_urlarray=explode('../',$banner_url);
	$banner_url=$banner_urlarray[1];
	
	$e_banner_backarray=explode('../',$e_banner_back);
	$e_banner_back=$e_banner_backarray[1];
	
	$e_banner_urlarray=explode('../',$e_banner_url);
	$e_banner_url=$e_banner_urlarray[1];
}	

$banner_1=($banner_1=='')?'':$banner_1.'|';	
$banner_2=($banner_2=='')?'':$banner_2.'|';	
$banner_3=($banner_3=='')?'':$banner_3.'|';	
$banner_4=($banner_4=='')?'':$banner_4.'|';	
$banner_5=($banner_5=='')?'':$banner_5.'|';	
$banner_img=$banner_1.$banner_2.$banner_3.$banner_4.$banner_5;
$banner_img=substr($banner_img,0,-1);	
$e_banner_1=($e_banner_1=='')?'':$e_banner_1.'|';	
$e_banner_2=($e_banner_2=='')?'':$e_banner_2.'|';	
$e_banner_3=($e_banner_3=='')?'':$e_banner_3.'|';	
$e_banner_4=($e_banner_4=='')?'':$e_banner_4.'|';	
$e_banner_5=($e_banner_5=='')?'':$e_banner_5.'|';	
$e_banner_img=$e_banner_1.$e_banner_2.$e_banner_3.$e_banner_4.$e_banner_5;
$e_banner_img=substr($e_banner_img,0,-1);	

$bannerurl_1=($bannerurl_1=='')?'':$bannerurl_1.'|';
$bannerurl_2=($bannerurl_2=='')?'':$bannerurl_2.'|';
$bannerurl_3=($bannerurl_3=='')?'':$bannerurl_3.'|';
$bannerurl_4=($bannerurl_4=='')?'':$bannerurl_4.'|';
$bannerurl_5=($bannerurl_5=='')?'':$bannerurl_5.'|';
$banner_url=$bannerurl_1.$bannerurl_2.$bannerurl_3.$bannerurl_4.$bannerurl_5;
$banner_url=substr($banner_url,0,-1);

$banner_xpx=$banner_x.'px';
$banner_ypx=$banner_y.'px';

$query='select * from '.$web_column.' where classtype=\'1\' order by no_order';	//网站一级栏目
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	$nav_list_1[]=$list;
	if($list['module']==2 or $list['module']==3 or $list['module']==4 or $list['module']==5){
		$nav_search[]=$list;
	}
}

$query='select * from '.$web_column.' where classtype=\'2\' order by no_order';	//网站二级栏目
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	$nav_list_2[]=$list;
}

$query='select * from '.$web_column.' where nav=1 or nav=3 order by no_order';	//获得主导航信息
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	switch($list['module']){
		case 0:
			$list['c_url']=(strstr($list['c_out_url'],'http://'))?$list['c_out_url']:$navurl.$list['c_out_url'];
			$list['e_url']=(strstr($list['e_out_url'],'http://'))?$list['e_out_url']:$navurl.$list['e_out_url'];
		break;
		case 1:
			$list['c_url']=$webhtml?$navurl.$list['foldername'].'/'.$list['filename'].'.html':$navurl.$list['foldername'].'/'.'show.php?id='.$list['id'];
		    $list['e_url']=$webhtml?$navurl.$list['foldername'].'/'.$list['filename'].'_en.html':$navurl.$list['foldername'].'/'.'show.php?en=en&id='.$list['id'];
		break;
		case 2:
			$list['c_url']=$navurl.$list['foldername'].'/'.'news.php?class1='.$list['id'];
		    $list['e_url']=$navurl.$list['foldername'].'/'.'news.php?en=en&class1='.$list['id'];
		break;
		case 3:
			$list['c_url']=$navurl.$list['foldername'].'/'.'product.php?class1='.$list['id'];
		    $list['e_url']=$navurl.$list['foldername'].'/'.'product.php?en=en&class1='.$list['id'];
		break;		
		case 4:
			$list['c_url']=$navurl.$list['foldername'].'/'.'download.php?class1='.$list['id'];
		    $list['e_url']=$navurl.$list['foldername'].'/'.'download.php?en=en&class1='.$list['id'];
		break;		
		case 5:
			$list['c_url']=$navurl.$list['foldername'].'/'.'img.php?class1='.$list['id'];
		    $list['e_url']=$navurl.$list['foldername'].'/'.'img.php?en=en&class1='.$list['id'];
		break;		
		case 6:
			$list['c_url']=$navurl.$list['foldername'].'/'.'job.php';
		    $list['e_url']=$navurl.$list['foldername'].'/'.'job.php';
		break;
	}
	if($list['id']==$id&&$list['module']==1){
		$nav_listabout[]=$list;
	}
	if($show['bigclass']==$list['id']&&$list['module']==1){
		$nav_listabout[]=$list;
	}	
	if($show3['bigclass']==$list['id']&&$list['module']==1){
		$nav_listabout[]=$list;
	}
	$nav_list[]=$list;
}

foreach($nav_list_1 as $key=>$val){
	$query='select * from '.$web_column.' where bigclass='.$val['id'].' order by no_order';
	$result=$db->query($query);
	while($list=$db->fetch_array($result)){
		switch($list['module']){
			case 0:
				$list['c_url']=(strstr($list['c_out_url'],'http://'))?$list['c_out_url']:$navurl.$list['c_out_url'];
				$list['e_url']=(strstr($list['e_out_url'],'http://'))?$list['e_out_url']:$navurl.$list['e_out_url'];
			break;
			case 1:
				$list['c_url']=$webhtml?$navurl.$list['foldername'].'/'.$list['filename'].'.html':$navurl.$list['foldername'].'/'.'show.php?id='.$list['id'];
			    $list['e_url']=$webhtml?$navurl.$list['foldername'].'/'.$list['filename'].'_en.html':$navurl.$list['foldername'].'/'.'show.php?en=en&id='.$list['id'];
			break;
			case 2:
				$list['c_url']=$navurl.$list['foldername'].'/'.'news.php?class1='.$list['bigclass'].'&class2='.$list['id'];
			    $list['e_url']=$navurl.$list['foldername'].'/'.'news.php?en=en&class1='.$list['bigclass'].'&class2='.$list['id'];
			break;	
			case 3:
				$list['c_url']=$navurl.$list['foldername'].'/'.'product.php?class1='.$list['bigclass'].'&class2='.$list['id'];
			    $list['e_url']=$navurl.$list['foldername'].'/'.'product.php?en=en&class1='.$list['bigclass'].'&class2='.$list['id'];
			break;	
			case 4:
				$list['c_url']=$navurl.$list['foldername'].'/'.'download.php?class1='.$list['bigclass'].'&class2='.$list['id'];
			    $list['e_url']=$navurl.$list['foldername'].'/'.'download.php?en=en&class1='.$list['bigclass'].'&class2='.$list['id'];
			break;			
		}
		$nav_list2[$val['id']][]=$list;
	}
}

if($show['module']==1){
	$count=count($nav_list2[$class1]);
	for($i=$count;$i>0;$i=$i-1){
		$nav_list2[$class1][$i]=$nav_list2[$class1][$i-1];
	}
	$nav_list2[$class1][0]=$nav_listabout[0];
}

foreach($nav_list_2 as $key=>$val){
	$query='select * from '.$web_column.' where bigclass='.$val['id'].' order by no_order';
	$result=$db->query($query);
	while($list=$db->fetch_array($result)){
		$class2_foot=$db->get_one('select * from '.$web_column.' where id='.$list['bigclass']);
		$class_type='class1='.$class2_foot['bigclass'].'&class2='.$list['bigclass'].'&class3='.$list['id'];
		switch($list['module']){
			case 0:
				$list['c_url']=(strstr($list['c_out_url'],'http://'))?$list['c_out_url']:$navurl.$list['c_out_url'];
				$list['e_url']=(strstr($list['e_out_url'],'http://'))?$list['e_out_url']:$navurl.$list['e_out_url'];
			break;		
			case 2:
				$list['c_url']=$navurl.$list['foldername'].'/'.'news.php?class1='.$list['bigclass'].'&class2='.$list['id'];
			    $list['e_url']=$navurl.$list['foldername'].'/'.'news.php?en=en&class1='.$list['bigclass'].'&class2='.$list['id'];
			break;	
			case 3:
				$list['c_url']=$navurl.$list['foldername'].'/'.'product.php?'.$class_type;
			    $list['e_url']=$navurl.$list['foldername'].'/'.'product.php?en=en$'.$class_type;
			break;		
		}
		$nav_list3[$val['id']][]=$list;
	}
}

$query='select * from '.$web_column.' where nav=2 or nav=3 order by no_order';
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	$class_type='class1='.$list['id'];
	if($list['classtype']==2){
		$class_type='class1='.$list['bigclass'].'&class2='.$list['id'];
	}
	if($list['classtype']==3){
		$class2_foot=$db->get_one('select * from '.$column.' where id='.$list['bigclass']);
		$class_type='class1='.$class2_foot['bigclass'].'&class2='.$list['bigclass'].'&class3='.$list['id'];
				
	}
	switch($list['module']){
		case 0:
			$list['c_url']=(strstr($list['c_out_url'],'http://'))?$list['c_out_url']:$navurl.$list['c_out_url'];
			$list['e_url']=(strstr($list['e_out_url'],'http://'))?$list['e_out_url']:$navurl.$list['e_out_url'];
		break;
		case 1:
			$list['c_url']=$webhtml?$navurl.$list['foldername'].'/'.$list['filename'].'.html':$navurl.$list['foldername'].'/'.'show.php?id='.$list['id'];
		    $list['e_url']=$webhtml?$navurl.$list['foldername'].'/'.$list['filename'].'_en.html':$navurl.$list['foldername'].'/'.'show.php?en=en&id='.$list['id'];
		break;	
		case 2:
			$list['c_url']=$navurl.$list['foldername'].'/'.'news.php?class1='.$list['id'];
		    $list['e_url']=$navurl.$list['foldername'].'/'.'news.php?en=en&class1='.$list['id'];
		break;
		case 4:
			$list['c_url']=$navurl.$list['foldername'].'/'.'download.php?class1='.$list['id'];
		    $list['e_url']=$navurl.$list['foldername'].'/'.'download.php?en=en&class1='.$list['id'];
		break;
		case 6:
			$list['c_url']=$navurl.$list['foldername'].'/'.'job.php';
		    $list['e_url']=$navurl.$list['foldername'].'/'.'job.php?en=en';
		break;		
		case 7:
			$list['c_url']=$navurl.$list['foldername'].'/'.'message.php';
		    $list['e_url']=$navurl.$list['foldername'].'/'.'message.php?en=en';
		break;			
	}
	$navfoot_list[]=$list;
}

if($class1==''){
	$class1=$_GET['class1'];
}
foreach($nav_list2[$class1] as $key=>$val){
	$nav_c_list.='<li><a href="'.$val['c_url'].'"'.$val['new_windows'].' title='.$val['c_name'].'>'.$val['c_name'].'</a></li>';
	$class_2=$val['id'];
	foreach($nav_list3[$class_2] as $key=>$val2){
		$nav_c_list.='<p>&nbsp;&nbsp;&nbsp;-<font style=font-size:12px;><a href=\''.$val2['c_url'].'\''.$val2['new_windows'].'title='.$val2['c_name'].'>'.$val2['c_name'].'</a></font></p>';		
	}
}

foreach($nav_list2[$class1] as $key=>$val){
	$nav_e_list.='<li><a href='.$val['e_url'].$val['new_windows'].' title='.$val['e_name'].'>'.$val['e_name'].'</a></li>';
	$class_2=$val['id'];
	foreach($nav_list3[$class_2] as $key=>$val2){
		$nav_e_list.='<br/>&nbsp;&nbsp;&nbsp;<font style=font-size:12px;><a href='.$val2['e_url'].$val2['new_windows'].'title='.$val2['e_name'].'>'.$val2['e_name'].'</a></font>';		
	}
}
?>