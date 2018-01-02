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
				<div class="banner_set main">
					<div class="hd"><b>banner设置</b></div>
					<form class="bd" method="post" action="" name="banner_set">
						<input type="hidden" name="action" value="modify" />
						<table>
							<tr>
								<td width="150">是否开启banner动画：</td>
								<td>
									<input size="50" type="checkbox" name="e_footright" value="<?php echo $e_footright; ?>" /> 开启
								</td>
							</tr>							
							<tr>
								<td width="150">banner模式：</td>
								<td>
									<input size="50" type="radio" name="e_footright" value="<?php echo $e_footright; ?>" /> 图片轮播
									<input size="50" type="radio" name="e_footright" value="<?php echo $e_footright; ?>" /> 其他
								</td>
							</tr>	
							<tr>
								<td>banner尺寸：</td>
								<td>
									宽度：<input size="3" type="text" name="banner_x" value="<?php echo $banner_x; ?>" /> 像素&nbsp;
									高度：<input size="3" type="text" name="banner_y" value="<?php echo $banner_y; ?>" /> 像素
								</td>
							</tr>			
							<tr>
								<td><b>图片1：</b></td>
								<td>
									图片地址：<input size="50" type="text" name="e_foottel" value="<?php echo $b; ?>" /><input type="file" name="e_foottel" value="<?php echo $b; ?>" /><input class="tj" type="button" value="上传" /><br/>
									英文图片：<input size="50" type="text" name="e_foottel" value="<?php echo $b; ?>" /><input type="file" name="e_foottel" value="<?php echo $b; ?>" /><input class="tj" type="button" value="上传" /><br/>
									链接地址：<input size="50" type="text" name="e_foottel" value="<?php echo $b; ?>" />
								</td>
							</tr>					
							<tr>
								<td><b>图片2：</b></td>
								<td>
									图片地址：<input size="50" type="text" name="e_foottel" value="<?php echo $b; ?>" /><input type="file" name="e_foottel" value="<?php echo $b; ?>" /><input class="tj" type="button" value="上传" /><br/>
									英文图片：<input size="50" type="text" name="e_foottel" value="<?php echo $b; ?>" /><input type="file" name="e_foottel" value="<?php echo $b; ?>" /><input class="tj" type="button" value="上传" /><br/>
									链接地址：<input size="50" type="text" name="e_foottel" value="<?php echo $b; ?>" />
								</td>
							</tr>					
							<tr>
								<td><b>图片3：</b></td>
								<td>
									图片地址：<input size="50" type="text" name="e_foottel" value="<?php echo $b; ?>" /><input type="file" name="e_foottel" value="<?php echo $b; ?>" /><input class="tj" type="button" value="上传" /><br/>
									英文图片：<input size="50" type="text" name="e_foottel" value="<?php echo $b; ?>" /><input type="file" name="e_foottel" value="<?php echo $b; ?>" /><input class="tj" type="button" value="上传" /><br/>
									链接地址：<input size="50" type="text" name="e_foottel" value="<?php echo $b; ?>" />
								</td>
							</tr>					
							<tr>
								<td><b>图片4：</b></td>
								<td>
									图片地址：<input size="50" type="text" name="e_foottel" value="<?php echo $b; ?>" /><input type="file" name="e_foottel" value="<?php echo $b; ?>" /><input class="tj" type="button" value="上传" /><br/>
									英文图片：<input size="50" type="text" name="e_foottel" value="<?php echo $b; ?>" /><input type="file" name="e_foottel" value="<?php echo $b; ?>" /><input class="tj" type="button" value="上传" /><br/>
									链接地址：<input size="50" type="text" name="e_foottel" value="<?php echo $b; ?>" />
								</td>
							</tr>					
							<tr>
								<td><b>图片5：</b></td>
								<td>
									图片地址：<input size="50" type="text" name="e_foottel" value="<?php echo $b; ?>" /><input type="file" name="e_foottel" value="<?php echo $b; ?>" /><input class="tj" type="button" value="上传" /><br/>
									英文图片：<input size="50" type="text" name="e_foottel" value="<?php echo $b; ?>" /><input type="file" name="e_foottel" value="<?php echo $b; ?>" /><input class="tj" type="button" value="上传" /><br/>
									链接地址：<input size="50" type="text" name="e_foottel" value="<?php echo $b; ?>" />
								</td>
							</tr>
							<tr>
								<td width="150"></td>
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