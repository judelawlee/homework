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
				<div class="product_list">
					<ul>
						<?php
						foreach($product_list as $key=>$val){
						?>
						<li class="clearfix">
							<div class="pic fl">
								<a href="<?php echo $val['c_url']; ?>" target="_blank"><img src="<?php echo $val['imgurls']; ?>" /></a>
							</div>
							<div class="info fr">
								<div class="tit">
									<a href="<?php echo $val['c_url']; ?>" target="_blank"><?php echo $val['c_title']; ?></a>
								</div>
								<div class="para">
									<?php
									foreach($product_para100 as $key=>$val1){
										$para_no='c_'.$val1['name'];
										echo $val1['c_mark'].':'.$val[$para_no].'<br/>';
									}
									?>
								</div>
								<div class="more">
									<a href="<?php echo $val['c_url']; ?>" target="_blank">查看详细>></a>
								</div>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="pages"><?php echo $c_page_list; ?></div>
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