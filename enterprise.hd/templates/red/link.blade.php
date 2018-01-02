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
			<div class="hd"> <a href="<?php echo $index_c_url; ?>"> 首页</a> > <?php echo $navtitle; ?></div>
			<div class="bd">
				<div class="link_apply">
					<a href="">申请友情链接>></a>
				</div>
				<div class="link_img">
					<h4>图片链接：</h4>
					<ul>
						<?php
						foreach($link_img as $key=>$value){
							?>
						<li><a href="<?php echo $value['weburl']; ?>"><img src="<?php echo $value['weblogo']; ?>" /></a></li>	
							<?php
						}
						?>
					</ul>
				</div>
				<div class="link_text">
					<h4>文字链接：</h4>
					<ul>
						<?php
						foreach($link_text as $key=>$value){
							?>
						<li><a href=""><?php echo $value['c_webname']; ?></a></li>	
							<?php
						}
						?>
					</ul>
				</div>
			</div>
		</div>
		<div class="rnav">
			<?php require_once template('online'); ?>
		</div>
	</div>
</div>

<?php
	require_once template('footer');
?>

</body>
</html>