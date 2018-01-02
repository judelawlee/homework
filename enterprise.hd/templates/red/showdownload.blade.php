<!doctype html>
<html>
<head>
<meta http-equiv='content-type' content='text/html;charset=utf-8' />
<meta name='description' content=''>
<meta name='keywords' content=''>
<link rel='stylesheet' type='text/css' href='<?php echo $css_url; ?>base.css' />
<link rel='stylesheet' type='text/css' href='<?php echo $css_url; ?>inside.css' />
<script type="text/javascript" src="<?php echo $js_url; ?>jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo $js_url; ?>base.js"></script>
<title><?php echo $c_title_keywords.'--'.$c_webname; ?></title>
</head>
<body>

<?php
	require_once template('header');
?>

<div class="container">
	<div class="wrap clearfix">
		<div class="main">
			<div class="hd"> <a href="<?php echo $index_c_url; ?>"> 首页</a> > <?php echo $nav_x['c_name']; ?></div>
			<div class="bd">
				<div class="download_detail">
					<p class="tit"><?php echo $download['c_title']; ?></p>
					<div class="info clearfix">
						<div class="para fl">
							<b>文件大小:</b><?php echo $download['filesize']; ?><br/>
							<?php
							foreach($download_para100 as $key=>$val){
								$para_no='c_'.$val['name'];
								echo '<b>'.$val['c_mark'].':</b>'.$download[$para_no].'<br/>';
							}
							?>
						</div>
						<a class="fr" href="<?php echo $weburl; ?>feedback/index.php?title=<?php echo $download['c_title']; ?>" target="_blank">点击下载</a>
					</div>
					<div class="content"><?php echo $download['c_content']; ?></div>
						<div class="hits">
						点击数：
						更新时间：<?php echo $download['updatetime']; ?>&nbsp;
						<a href="">[打印此页]</a>
						<a href="">[关闭]</a>
				</div>
				</div>
			</div>
		</div>
		<div class="rnav">
			<div class="hd"> >><?php echo $class1_info['c_name']; ?></div>
			<div class="bd">
				<ul>
					<?php echo $nav_c_list; ?>
				</ul>
			</div>
			<?php require_once template('online'); ?>
		</div>
	</div>
</div>

<?php
	require_once template('footer');
?>

</body>
</html>