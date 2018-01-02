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
				<div class="skin_set main">
					<div class="hd"><b>网站界面风格设置</b></div>
					<form class="bd" method="post" action="" name="skin_set">
						<input type="hidden" name="action" value="modify" />
						<table>
							<tr>
								<td><font color="#f00">*</font>网站模板：</td>
								<td>
									<select name="web_skin_user">
									<?php
									foreach($skin_list as $key=>$val){
									?>
									<option value="<?php echo $val['skin_file']; ?>"><?php echo $val['skin_name']; ?></option>
									<?php
									}
									?>
									</select><a class="mbgl" href="">管理模板</a>
								</td>
							</tr>
							<tr>
								<td>在线交流样式：</td>
								<td>
									<input type="radio" name="web_online_type" value="" />固定于页面中
									<input type="radio" name="web_online_type" value="" />居左随屏幕滚动
									<input type="radio" name="web_online_type" value="" />关闭
								</td>
							</tr>
							<tr>
								<td><font color="#f00">*</font>产品列表页面：</td>
								<td>每页显示<input size="3" type="text" name="web_product_list" value="<?php echo $web_product_list; ?>" />条</td>
							</tr>
							<tr>
								<td><font color="#f00">*</font>新闻列表页面：</td>
								<td>每页显示<input size="3" type="text" name="web_news_list" value="<?php echo $web_news_list; ?>" />条</td>
							</tr>
							<tr>
								<td><font color="#f00">*</font>下载列表页面：</td>
								<td>每页显示<input size="3" type="text" name="web_download_list" value="<?php echo $web_download_list; ?>" />条</td>
							</tr>
							<tr>
								<td><font color="#f00">*</font>图片列表页面：</td>
								<td>每页显示<input size="3" type="text" name="web_img_list" value="<?php echo $web_img_list; ?>" />条</td>
							</tr>
							<tr>
								<td><font color="#f00">*</font>招聘列表页面：</td>
								<td>每页显示<input size="3" type="text" name="web_job_list" value="<?php echo $web_job_list; ?>" />条</td>
							</tr>
							<tr>
								<td><font color="#f00">*</font>搜索列表页面：</td>
								<td>每页显示<input size="3" type="text" name="web_search_list" value="<?php echo $web_search_list; ?>" />条</td>
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