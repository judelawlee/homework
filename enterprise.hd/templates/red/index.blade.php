<!doctype html>
<html>
<head>
<meta http-equiv='content-type' content='text/html;charset=utf-8' />
<meta name='description' content=''>
<meta name='keywords' content=''>
<link rel='stylesheet' type='text/css' href='<?php echo $css_url; ?>base.css' />
<link rel='stylesheet' type='text/css' href='<?php echo $css_url; ?>home.css' />
<script type="text/javascript" src="<?php echo $js_url; ?>jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo $js_url; ?>base.js"></script>
<title><?php echo $c_title_keywords.'--'.$c_webname; ?></title>
</head>
<body>
<?php
	require_once template('header');
?>
<div class="container">
	<div class="aArea wrap clearfix">
		<div class="about">
			<div class="hd">公司简介</div>
			<div class="bd"><?php echo $index['c_content']; ?></div>
		</div>
		<div class="news">
			<div class="hd">最新动态</div>
			<div class="bd">
				<ul>
					<?php 
					$i=0;
					foreach($news_list as $key=>$val){
						$val['c_title']=utf8substr($val['c_title'],0,19);
						$i++;
					?>
					<li>
						<img src="<?php echo $img_url?>list.gif" />
						<a href="<?php echo $val['c_url']; ?>" target="_blank">
							<?php echo $val['c_title']; ?>
						</a>
						[<?php echo $val['updatetime']; ?>]
					</li>
					<?php
						if($i>=$index['news_no']){
							break;
						}
					}
					?>
				</ul>
			</div>
		</div>
	</div>
	<div class="bArea wrap">
		<div class="hd">推荐产品</div>
		<div class="bd">
			<ul class="clearfix">
				<?php 
				$i=0;
				foreach($product_listhits_com as $key=>$val){
					//$val['c_title']=$val['c_title'];
					$i++;
				?>
				<li>
					<a href="<?php echo $val['c_url']; ?>" target="_blank">
						<img src="<?php echo $val['imgurls']?>" /><br/>
						<?php echo $val['c_title']; ?>
					</a>
				</li>
				<?php
					if($i>=$index['product_no']){
						break;
					}
				}
				?>			
			</ul>
		</div>
	</div>
	<div class="cArea wrap">
		<div class="hd">友情链接</div>
		<div class="bd">
			<ul class="clearfix">
				<?php 
				$i=0;
				foreach($link_img_com as $key=>$val){
					//$val['c_title']=$val['c_title'];
					$i++;
				?>
				<li>
					<a href="<?php echo $val['weburl']; ?>" target="_blank">
						<img src="<?php echo $val['weblogo']?>" alt="<?php echo $val['c_webname']?>" /><br/>
						<?php echo $val['c_title']; ?>
					</a>
				</li>
				<?php
					if($i>=$index['link_img']){
						break;
					}
				}
				?>			
			</ul>
		</div>
	</div>
</div>

<?php
	require_once template('footer');
?>

</body>
</html>










