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
					<div class="hd"><b>添加友情 链接</b></div>
					<form class="bd" method="post" action="" name="index_set">
						<input type="hidden" name="action" value="modify" />
						<table>
							<tr>
								<td><b><font color="#f00">*</font>链接类型：</b></td>
								<td>
									<input type="radio" name="web_online_type" value="" />文字链接
									<input type="radio" name="web_online_type" value="" />图片链接
								</td>
							</tr>
							<tr>
								<td><b><font color="#f00">*</font>网站标题：</b></td>
								<td><input size="40" type="text" name="web_online_type" value="" /></td>
							</tr>
							<tr>
								<td><b><font color="#f00">*</font>图片地址：</b>
								<td>
									<input type="text" name="web_online_type" value="" />
								</td>
							</tr>				
							<tr>
								<td><b>内容关键词：</b></td>
								<td>
									<input size="40" type="text" name="web_online_type" value="" />
								</td>
							</tr>
							<tr>
								<td><b>联系方式：</b></td>
								<td>
									<textarea cols="60" rows="5"></textarea>
								</td>
							</tr>	
								<tr>
								<td><b>显示排序：</b></td>
								<td>数字越大排序越靠前</td>
							</tr>	
							<tr>
								<td><b>审核通过：</b></td>
								<td>
									<input type="checkbox" name="web_online_type" value="" />是
								</td>
							</tr>				
							<tr>
								<td><b>推荐站点：</b></td>
								<td>
									<input type="checkbox" name="web_online_type" value="" />是
								</td>
							</tr>				
							<tr bgcolor="#999999"> <td style="padding-left:6px;" colspan="2" height="25"><b>英文内容</b></td></tr>
							<tr>
								<td><b><font color="#f00">*</font>链接显示：</b></td>
								<td>
									<input type="radio" name="web_online_type" value="" />仅在中文版显示
									<input type="radio" name="web_online_type" value="" />仅在英文版显示
									<input type="radio" name="web_online_type" value="" />中英文版都显示
								</td>
							</tr>
							<tr>
								<td><b><font color="#f00">*</font>英文标题：</b></td>
								<td><input size="40" type="text" name="web_online_type" value="" /></td>
							</tr>
							<tr>
								<td><b>英文关键词：</b></td>
								<td>
									<input size="40" type="text" name="web_online_type" value="" />
									用于搜索引擎优化，多个关键词请用","隔开
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