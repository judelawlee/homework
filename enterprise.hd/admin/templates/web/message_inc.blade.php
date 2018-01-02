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
				<div class="basic_set main">
					<div class="hd"><b>在线留言设置</b></div>
					<form class="bd" method="post" action="" name="basic_set">
						<input type="hidden" name="action" value="modify" />
						<table>						
							<tr>
								<td>防刷新时间：</td>
								<td><input size="3" type="text" value="" name="e_webname" />秒，同一IP2次提交的最小间接时间</td>
							</tr>							
							<tr>
								<td>敏感字符过滤：</td>
								<td>
									<textarea cols="50" rows="3"></textarea>
									多个字符请用"|"隔开
								</td>
							</tr>
							<tr>
								<td>显示方式：</td>
								<td>
									<input size="30" type="checkbox" value="" name="logo" />
									客户留言后需要在后台回复审核才显示
								</td>
							</tr>
							<tr>
								<td>每页显示留言条数：</td>
								<td>
									<input size="3" type="checkbox" value="" name="" />条
								</td>
							</tr>
							<tr>
								<td>是否发送邮件：</td>
								<td>
									<input type="checkbox" value="" name="" checked />
									是否将客户留言自动发生到指定邮箱
								</td>
							</tr>
							<tr>
								<td>反馈邮件接收邮箱：</td>
								<td>
									<input type="checkbox" value="" name="" />多个邮箱请用"|"隔开
								</td>
							</tr>
							<tr>
								<td>自动回复：</td>
								<td><input type="checkbox" value="" name="" />自动回复邮件的标题</td>
							</tr>								
							<tr>
								<td>回复邮件标题：</td>
								<td><input type="text" value="" name="" />多种格式请用"|"隔开</td>
							</tr>
							<tr>
								<td>回复邮件内容：</td>
								<td><textarea cols="50" rows="3"></textarea>支持HTML语言</td>
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