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
				<div class="newslist">
					<ul>
						<?php
						foreach($news_list as $key=>$val){
						?>
						<li>
							<span class="pic"><img src="<?php echo $img_url; ?>/list.gif" /></span>
							<a href="<?php echo $val['c_url']; ?>" target="_blank"><?php echo $val['c_title']; ?></a>
							(<?php echo $val['updatetime']; ?>)
							<阅读<font><?php echo $val['hits']; ?></font>次>
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