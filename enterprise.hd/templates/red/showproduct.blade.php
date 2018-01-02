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
				<div class="product_detail">
					<p class="tit"><?php echo $product['c_title']; ?></p>
					<div class="info clearfix">
						<div class="pic fl"><img src="<?php echo $product['imgurls']; ?>" /></div>
						<div class="para fl">
							<?php
							foreach($product_para100 as $key=>$val){
								$para_no='c_'.$val['name'];
								echo $val['c_mark'].':'.$product[$para_no].'<br/>';
							}
							?>
							<a class="fr" href="<?php echo $weburl; ?>feedback/index.php?title=<?php echo $product['c_title']; ?>" target="_blank">购买反馈>></a>
						</div>
					</div>
					<div class="hits">
					点击数：
					更新时间：<?php echo $product['updatetime']; ?>&nbsp;
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