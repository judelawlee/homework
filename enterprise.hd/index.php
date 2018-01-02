<?php
if(!file_exists('config/install.lock')){	//判断数据库是否已经安装
	header('location:install/index.php');
	exit;
}
require_once 'include/common.inc.php';	//引入公共配置文件

$css_url='templates/'.$skin_user.'/css/';	//静态资源url
$js_url='templates/'.$skin_user.'/js/';
$img_url='templates/'.$skin_user.'/images/';

$navurl=($rooturl=='..')?$rooturl.'/':'';
$index='index';
require_once 'include/head.php';

foreach($nav_list_1 as $key=>$val){	//网站的一级栏目
	switch($val['module']){
		case 0:
			$val['c_url']=$val['c_out_url'];
			$val['e_url']=$val['e_out_url'];
		break;	
	}
	$class1_list[$val['id']]=$val;	
}

foreach($nav_list_2 as $key=>$val){	//网站二级栏目
	switch($val['module']){
		case 0:
			$val['c_url']=$val['c_out_url'];
			$val['e_url']=$val['e_out_url'];
		break;	
	}
	$class2_list[$val['id']]=$val;
}

$query='select * from '.$web_news.' order by updatetime desc';	//获取首页新闻信息
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	$filename=$class1_list[$list['class1']]['foldername'];
	$url1_c=$filename.'/shownews.php?id='.$list['id'];
	$url2_c=$filename.'/shownews'.$list['id'].'.html';	
	$url1_e=$filename.'/shownews.php?en=en&id='.$list['id'];
	$url2_e=$filename.'/shownews'.$list['id'].'_en.html';
	$list['c_url']=$webhtml?$url2_c:$url1_c;
	$list['e_url']=$webhtml?$url2_e:$url1_e;
	$listarray['imgurls']=explode('../',$listurls);
	$list['imgurls']=$listarray['imgurls'][1];	
	$listarray['imgurl']=explode('../',$listurl);
	$list['imgurl']=$listarray['imgurl'][1];
	$list['updatetime']=date('Y-m-d',strtotime($list['updatetime']));
	if($list['new_ok']==1){
		$news_list_new[]=$list;
	}	
	if($list['com_ok']==1){
		$news_list_com[]=$list;
	}
	$news_list[]=$list;
}

$query='select * from '.$web_news.' order by hits desc';	//获取首页新闻信息，按照点击数大小排序
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	$filename=$class1_list[$list['class1']]['foldername'];
	$url1_c=$filename.'/shownews.php?id='.$list['id'];
	$url2_c=$filename.'/shownews'.$list['id'].'.html';	
	$url1_e=$filename.'/shownews.php?en=en&id='.$list['id'];
	$url2_e=$filename.'/shownews'.$list['id'].'_en.html';
	$list['c_url']=$webhtml?$url2_c:$url1_c;
	$list['e_url']=$webhtml?$url2_e:$url1_e;
	$listarray['imgurls']=explode('../',$listurls);
	$list['imgurls']=$listarray['imgurls'][1];	
	$listarray['imgurl']=explode('../',$listurl);
	$list['imgurl']=$listarray['imgurl'][1];
	$list['updatetime']=date('Y-m-d',strtotime($list['updatetime']));
	if($list['new_ok']==1){
		$news_listhits_new[]=$list;
	}	
	if($list['com_ok']==1){
		$news_listhits_com[]=$list;
	}
	$news_listhits[]=$list;
}

$query='select * from '.$web_product.' order by updatetime desc';	//获取首页产品信息
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	$filename=$class1_list[$list['class1']]['foldername'];
	$url1_c=$filename.'/showproduct.php?id='.$list['id'];
	$url2_c=$filename.'/showproduct'.$list['id'].'.html';	
	$url1_e=$filename.'/showproduct.php?en=en&id='.$list['id'];
	$url2_e=$filename.'/showproduct'.$list['id'].'_en.html';
	$list['c_url']=$webhtml?$url2_c:$url1_c;
	$list['e_url']=$webhtml?$url2_e:$url1_e;
	$listarray['imgurls']=explode('../',$list['imgurls']);
	$list['imgurls']=$listarray['imgurls'][1];	
	$listarray['imgurl']=explode('../',$list['imgurl']);
	$list['imgurl']=$listarray['imgurl'][1];
	$list['updatetime']=date('Y-m-d',strtotime($list['updatetime']));
	if($list['new_ok']==1){
		$product_list_new[]=$list;
	}	
	if($list['com_ok']==1){
		$product_list_com[]=$list;
	}
	$product_list[]=$list;
}

$query='select * from '.$web_product.' order by hits desc';	//获取首页产品信息，按照点击数大小排序
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	$filename=$class1_list[$list['class1']]['foldername'];
	$url1_c=$filename.'/showproduct.php?id='.$list['id'];
	$url2_c=$filename.'/showproduct'.$list['id'].'.html';	
	$url1_e=$filename.'/showproduct.php?en=en&id='.$list['id'];
	$url2_e=$filename.'/showproduct'.$list['id'].'_en.html';
	$list['c_url']=$webhtml?$url2_c:$url1_c;
	$list['e_url']=$webhtml?$url2_e:$url1_e;
	$listarray['imgurls']=explode('../',$list['imgurls']);
	$list['imgurls']=$listarray['imgurls'][1];	
	$listarray['imgurl']=explode('../',$list['imgurl']);
	$list['imgurl']=$listarray['imgurl'][1];
	$list['updatetime']=date('Y-m-d',strtotime($list['updatetime']));
	if($list['new_ok']==1){
		$product_listhits_new[]=$list;
	}	
	if($list['com_ok']==1){
		$product_listhits_com[]=$list;
	}
	$product_listhits[]=$list;
}

$query='select * from '.$web_download.' order by updatetime desc';	//获取首页下载信息
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	$filename=$class1_list[$list['class1']]['foldername'];
	$url1_c=$filename.'/showdownload.php?id='.$list['id'];
	$url2_c=$filename.'/showdownload'.$list['id'].'.html';	
	$url1_e=$filename.'/showdownload.php?en=en&id='.$list['id'];
	$url2_e=$filename.'/showdownload'.$list['id'].'_en.html';
	$list['c_url']=$webhtml?$url2_c:$url1_c;
	$list['e_url']=$webhtml?$url2_e:$url1_e;
	$listarray['downloadurl']=explode('../',$list['downloadurl']);
	$list['downloadurl']=$listarray['downloadurl'][1];
	$list['updatetime']=date('Y-m-d',strtotime($list['updatetime']));
	if($list['new_ok']==1){
		$download_list_new[]=$list;
	}	
	if($list['com_ok']==1){
		$download_list_com[]=$list;
	}
	$download_list[]=$list;
}

$query='select * from '.$web_download.' order by hits desc';	//获取首页下载信息，按照点击量大小排序
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	$filename=$class1_list[$list['class1']]['foldername'];
	$url1_c=$filename.'/showdownload.php?id='.$list['id'];
	$url2_c=$filename.'/showdownload'.$list['id'].'.html';	
	$url1_e=$filename.'/showdownload.php?en=en&id='.$list['id'];
	$url2_e=$filename.'/showdownload'.$list['id'].'_en.html';
	$list['c_url']=$webhtml?$url2_c:$url1_c;
	$list['e_url']=$webhtml?$url2_e:$url1_e;
	$listarray['downloadurl']=explode('../',$list['downloadurl']);
	$list['downloadurl']=$listarray['downloadurl'][1];
	$list['updatetime']=date('Y-m-d',strtotime($list['updatetime']));
	if($list['new_ok']==1){
		$download_listhits_new[]=$list;
	}	
	if($list['com_ok']==1){
		$download_listhits_com[]=$list;
	}
	$download_listhits[]=$list;
}

$query='select * from '.$web_img.' order by updatetime desc';	//获取首页图片信息
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	$filename=$class1_list[$list['class1']]['foldername'];
	$url1_c=$filename.'/showimg.php?id='.$list['id'];
	$url2_c=$filename.'/showimg'.$list['id'].'.html';	
	$url1_e=$filename.'/showimg.php?en=en&id='.$list['id'];
	$url2_e=$filename.'/showimg'.$list['id'].'_en.html';
	$list['c_url']=$webhtml?$url2_c:$url1_c;
	$list['e_url']=$webhtml?$url2_e:$url1_e;
	$listarray['imgurls']=explode('../',$list['imgurls']);
	$list['imgurls']=$listarray['imgurls'][1];	
	$listarray['imgurl']=explode('../',$list['imgurl']);
	$list['imgurl']=$listarray['imgurl'][1];
	$list['updatetime']=date('Y-m-d',strtotime($list['updatetime']));
	if($list['new_ok']==1){
		$img_list_new[]=$list;
	}	
	if($list['com_ok']==1){
		$img_list_com[]=$list;
	}
	$img_list[]=$list;
}


$query='select * from '.$web_img.' order by hits desc';	//获取首页图片信息，按照点击量大小排序
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	$filename=$class1_list[$list['class1']]['foldername'];
	$url1_c=$filename.'/showimg.php?id='.$list['id'];
	$url2_c=$filename.'/showimg'.$list['id'].'.html';	
	$url1_e=$filename.'/showimg.php?en=en&id='.$list['id'];
	$url2_e=$filename.'/showimg'.$list['id'].'_en.html';
	$list['c_url']=$webhtml?$url2_c:$url1_c;
	$list['e_url']=$webhtml?$url2_e:$url1_e;
	$listarray['imgurls']=explode('../',$list['imgurls']);
	$list['imgurls']=$listarray['imgurls'][1];	
	$listarray['imgurl']=explode('../',$list['imgurl']);
	$list['imgurl']=$listarray['imgurl'][1];
	$list['updatetime']=date('Y-m-d',strtotime($list['updatetime']));
	if($list['new_ok']==1){
		$img_listhits_new[]=$list;
	}	
	if($list['com_ok']==1){
		$img_listhits_com[]=$list;
	}
	$img_listhits[]=$list;
}

$index=$db->get_one('select * from '.$web_index.' order by id desc');	//获取首页配置信息
if($index['online_type']==1 and $online_type==0){
	$online_type=2;
}
if($index['online_type']=='0'){
	$online_type=3;
}
if($index_type){
	$en='en';
}
if($ch=='ch'){
	$en='';
}

//获取首页友情链接信息
if($en=='en'){
	$query='select * from '.$web_link.' where link_lang!=ch and show_ok=1 order by orderno desc';
}else{
	$query='select * from '.$web_link.' where link_lang!=\'en\' and show_ok=1 order by orderno desc';
}
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	if($list['link_type']==0){
		if($list['com_ok']==1){
			$link_text_com[]=$list;
		}
	}
	if($list['link_type']==1){
		if($list['com_ok']==1){
			$link_img_com[]=$list;
		}
	}
	if($list['com_ok']==1){
		$link_com[]=$list;
	}
	$link[]=$list;
}

//引入模板，输出内容
if($en=='en'){
	include template('e_index');
}else{
	include template('index');
}

footer();
?>