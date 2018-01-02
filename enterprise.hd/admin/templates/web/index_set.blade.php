<!doctype html>
<html>
<head>
<meta http-equiv='content-type' content='text/html;charset=utf-8' />
<meta name='description' content='网站管理系统'>
<meta name='keywords' content='网站管理系统'>
<link rel='stylesheet' type='text/css' href='<?php echo $css_url; ?>base.css' />
<link rel='stylesheet' type='text/css' href='<?php echo $css_url; ?>admin.css' />
<script type="text/javascript" src="<?php echo $js_url; ?>jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo $js_url; ?>zh_cn.js"></script>
<script type="text/javascript" src="<?php echo $js_url; ?>function.js"></script>
<script type="text/javascript" src="<?php echo $js_url; ?>base.js"></script>
<title>网站管理系统后台登录</title>
</head>
<body>
<div class="header">
	<div class="hd clearfix">
		<span class="fl wel"><b>管理中心</b> 欢迎您：<?php echo $_SESSION['webinfo_admin_name']; ?></span>
		<b class='tit'>网站管理系统</b>
	</div>
</div>
<div class="container clearfix">
	<table class="maintable">
		<tr>
			<td valign="top" width="182">
				<?php include template('lefttree'); ?>
			</td>
			<td valign="top">
				<div class="index_set main">
					<div class="hd"><b>首页配置</b></div>
					<form class="bd" method="post" action="" name="index_set">
						<input type="hidden" name="action" value="modify" />
						<table>
							<tr>
								<td><b>是否开启在线交流：</b></td>
								<td>
									<input type="radio" name="web_online_type" value="" />开启
									<input type="radio" name="web_online_type" value="" />关闭
								</td>
							</tr>
							<tr>
								<td><b>文章栏目显示数：</b></td>
								<td><input size="3" type="text" name="news_no" value="<?php echo $index['news_no']; ?>" />条</td>
							</tr>
							<tr>
								<td><b>产品栏目显示数：</b></td>
								<td><input size="3" type="text" name="product_no" value="<?php echo $index['product_no']; ?>" />条</td>
							</tr>
							<tr>
								<td><b>图片栏目显示数：</b></td>
								<td><input size="3" type="text" name="img_no" value="<?php echo $index['img_no']; ?>" />条</td>
							</tr>
							<tr>
								<td><b>下载栏目显示数：</b></td>
								<td><input size="3" type="text" name="download_no" value="<?php echo $index['product_no']; ?>" />条</td>
							</tr>
							<tr>
								<td><b>是否开启友情链接：</b></td>
								<td>
									<input type="radio" name="web_online_type" value="" />开启
									<input type="radio" name="web_online_type" value="" />关闭
								</td>
							</tr>
							<tr>
								<td><b>图片链接显示数：</b></td>
								<td><input size="3" type="text" name="link_img" value="<?php echo $index['link_img']; ?>" />条</td>
							</tr>							
							<tr>
								<td><b>文字链接显示数：</b></td>
								<td><input size="3" type="text" name="link_text" value="<?php echo $index['link_text']; ?>" />条</td>
							</tr>							
							<tr>
								<td><b>中文企业简介：</b></td>
								<td>
								<?php
								$oFCKeditor = new FCKeditor('c_content'); 
								$oFCKeditor->BasePath = '../../fckeditor/';
								$oFCKeditor->Value = $index['c_content'];
								$oFCKeditor->Width = '100%';   
								$oFCKeditor->Height = '300';
								$oFCKeditor->Create();
								?>
								</td>
							</tr>							
							<tr>
								<td><b>英文企业简介：</b></td>
								<td>
								<?php
								$oFCKeditor = new FCKeditor('e_content'); 
								$oFCKeditor->BasePath = '../../fckeditor/';
								$oFCKeditor->Value = $index['e_content'];
								$oFCKeditor->Width = '100%';   
								$oFCKeditor->Height = '300';
								$oFCKeditor->Create();
								?>
								</td>
							</tr>
							<tr>
								<td width="180"></td>
								<td style="text-align:center;">
									<input class="tj" type="submit" value="提交" />
									<input class="tj" type="submit" value="重置" />
								</td>
							</tr>				
						</table>
					</form>
				</div>
			</td>
		</tr>
	</table>
</div>
<div class="footer">
	<b>网站管理系统</b>
</div>
</body>
</html>