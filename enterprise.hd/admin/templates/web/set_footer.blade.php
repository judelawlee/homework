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
				<div class="fooer_set main">
					<div class="hd"><b>网站底部信息设置</b></div>
					<form class="bd" method="post" action="" name="seo_set">
						<input type="hidden" name="action" value="modify" />
						<table>
							<tr>
								<td width="150">版权信息：</td>
								<td>
									<input size="50" type="text" name="c_footright" value="<?php echo $c_footright; ?>" />
									支持HTML语言，不能包换双引号
								</td>
							</tr>	
							<tr>
								<td>地址邮编：</td>
								<td>
									<input size="50" type="text" name="c_footaddress" value="<?php echo $c_footaddress; ?>" />
									支持HTML语言，不能包换双引号
								</td>
							</tr>			
							<tr>
								<td>联系方式：</td>
								<td>
									<input size="50" type="text" name="c_foottel" value="<?php echo $c_foottel; ?>" />
									支持HTML语言，不能包换双引号
								</td>
							</tr>
							<tr>
								<td>底部其他信息：</td>
								<td>
									<textarea name="c_footother" cols="45" rows="5"><?php echo $c_footother; ?></textarea>
									支持HTML语言，不能包换双引号
								</td>
							</tr>		
						</table>
						<div class="en"><b>英文内容</b></div>
						<table>
							<tr>
								<td width="150">版权信息：</td>
								<td>
									<input size="50" type="text" name="e_footright" value="<?php echo $e_footright; ?>" />
									支持HTML语言，不能包换双引号
								</td>
							</tr>	
							<tr>
								<td>地址邮编：</td>
								<td>
									<input size="50" type="text" name="e_footaddress" value="<?php echo $e_footaddress; ?>" />
									支持HTML语言，不能包换双引号
								</td>
							</tr>			
							<tr>
								<td>联系方式：</td>
								<td>
									<input size="50" type="text" name="e_foottel" value="<?php echo $e_foottel; ?>" />
									支持HTML语言，不能包换双引号
								</td>
							</tr>
							<tr>
								<td>底部其他信息：</td>
								<td>
									<textarea name="e_footother" cols="45" rows="5"><?php echo $e_footother; ?></textarea>
									支持HTML语言，不能包换双引号
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