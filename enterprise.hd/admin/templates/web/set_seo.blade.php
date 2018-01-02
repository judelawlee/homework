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
				<div class="seo_set main">
					<div class="hd"><b>网站优化推广设置</b></div>
					<form class="bd" method="post" action="" name="seo_set">
						<input type="hidden" name="action" value="modify" />
						<table>
							<tr>
								<td>网站标题关键词：</td>
								<td>
									<input type="text" name="c_title_keywords" value="<?php echo $c_title_keywords; ?>" />
									多个关键词请用"|"或","隔开。
								</td>
							</tr>
							<tr>
								<td>网站关键词：</td>
								<td>
									<input type="text" name="web_c_keywords" value="<?php echo $web_c_keywords; ?>" />
									多个关键词请用","隔开。
								</td>
							</tr>
							<tr>
								<td>网站描述：</td>
								<td>
									<textarea name="web_c_description" cols="45" rows="5"><?php echo $web_c_description; ?></textarea>
									将出现在搜索引擎收录首页描述中
								</td>
							</tr>	
							<tr>
								<td>头部优化文字(时间下方显示)：</td>
								<td>
									<input type="text" name="" value="" />
									支持HTML语言，不能包换双引号
								</td>
							</tr>	
							<tr>
								<td>图片默认ALT：</td>
								<td>
									<input type="text" name="" value="" />
									鼠标移至图片显示的文字
								</td>
							</tr>				
							<tr>
								<td>超链接默认title：</td>
								<td>
									<input type="text" name="" value="" />
									鼠标移至超链接显示的文字
								</td>
							</tr>	
							<tr>
								<td>友情链接本站名称：</td>
								<td>
									<input type="text" name="" value="" />
								</td>
							</tr>
							<tr>
								<td>网站底部优化字：</td>
								<td>
									<textarea name="web_c_foottext" cols="45" rows="5"></textarea>
									支持HTML语言，不能包换双引号
								</td>
							</tr>		
						</table>
						<div class="en"><b>英文内容</b></div>
						<table>
							<tr>
								<td>英文标题关键词：</td>
								<td>
									<input type="text" name="e_title_keywords" value="<?php echo $e_title_keywords; ?>" />
									多个关键词请用"|"或","隔开。
								</td>
							</tr>
							<tr>
								<td>英文关键词：</td>
								<td>
									<input type="text" name="web_e_keywords" value="<?php echo $web_e_keywords; ?>" />
									多个关键词请用","隔开。
								</td>
							</tr>
							<tr>
								<td>网站英文描述：</td>
								<td>
									<textarea name="web_e_description" cols="45" rows="5"><?php echo $web_e_description; ?></textarea>
									将出现在搜索引擎收录首页描述中
								</td>
							</tr>	
							<tr>
								<td>头部优化文字(时间下方显示)：</td>
								<td>
									<input type="text" name="" value="" />
									支持HTML语言，不能包换双引号
								</td>
							</tr>	
							<tr>
								<td>图片默认ALT：</td>
								<td>
									<input type="text" name="" value="" />
									鼠标移至图片显示的文字
								</td>
							</tr>				
							<tr>
								<td>超链接默认title：</td>
								<td>
									<input type="text" name="" value="" />
									鼠标移至超链接显示的文字
								</td>
							</tr>	
							<tr>
								<td>友情链接本站名称：</td>
								<td>
									<input type="text" name="web_c_linkname" value="" />
								</td>
							</tr>
							<tr>
								<td>网站底部优化字：</td>
								<td>
									<textarea name="web_c_foottext" cols="45" rows="5"></textarea>
									支持HTML语言，不能包换双引号
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