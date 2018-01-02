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
					<div class="hd"><b>网站基本信息设置</b></div>
					<form class="bd" method="post" action="" name="basic_set">
						<input type="hidden" name="action" value="modify" />
						<table>
							<tr>
								<td><font color="#f00">*</font>网站中文名称：</td>
								<td><input type="text" value="<?php echo $c_webname; ?>" name="c_webname" /></td>
							</tr>							
							<tr>
								<td><font color="#f00">*</font>网站英文名称：</td>
								<td><input type="text" value="<?php echo $e_webname; ?>" name="e_webname" /></td>
							</tr>							
							<tr>
								<td><font color="#f00">*</font>网站网址：</td>
								<td>
									<input size="40" type="text" value="<?php echo $weburl; ?>" name="weburl" />
									系统检测到的网址：<font color="#f00"><?php echo $localurl; ?></font>
								</td>
							</tr>
							<tr>
								<td>网站logo：</td>
								<td>
									<input size="30" type="text" value="<?php echo $logo; ?>" name="logo" />
									<input type="file" value="" name="" />
									<input class="tj" type="button" value="上传" name="btn" />
								</td>
							</tr>
							<tr>
								<td>开启英文版本：</td>
								<td>
									<input type="checkbox" value="" name="" />
									选择后可以在后台添加英文内容，需要前台模板支持
								</td>
							</tr>
							<tr>
								<td>默认首页：</td>
								<td>
									<input type="radio" value="" name="" checked />中文
									<input type="radio" value="" name="" />英文
								</td>
							</tr>
							<tr>
								<td>生成静态页面：</td>
								<td>
									<input type="checkbox" value="" name="" />
									首页、内容页面静态化，<font color="#f00">*</font>首次开启请点击静态页面生成全部页面</font>
								</td>
							</tr>
							<tr>
								<td><font color="#f00">*</font>下载文件上传最大值：</td>
								<td><input type="text" value="" name="" />MB</td>
							</tr>								<tr>
								<td><font color="#f00">*</font>允许上传的文件格式：</td>
								<td><input type="text" value="" name="" />多种格式请用"|"隔开</td>
							</tr>
							<tr>
								<td><b>系统邮箱配置</b></td>
								<td>(用于系统自动发送邮件，如反馈信息发送和回复、用户密码找回等)</td>
							</tr>	
							<tr>
								<td>发件人姓名：</td>
								<td><input type="text" value="" name="" />所显示的发件人姓名</td>
							</tr>								
							<tr>
								<td>邮件SMTP服务器：</td>
								<td><input type="text" value="" name="" />如163邮箱为stmp.163.com</td>
							</tr>								
							<tr>
								<td>邮箱账号：</td>
								<td><input type="text" value="" name="" />用于发送邮件的邮箱账号</td>
							</tr>
							<tr>
								<td>邮箱密码：</td>
								<td><input type="password" value="" name="" />用于发送邮件的邮箱密码</td>
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