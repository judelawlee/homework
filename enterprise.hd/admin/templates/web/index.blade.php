<!doctype html>
<html>
<head>
<meta http-equiv='content-type' content='text/html;charset=utf-8' />
<meta name='description' content='网站管理系统'>
<meta name='keywords' content='网站管理系统'>
<link rel='stylesheet' type='text/css' href='<?php echo $css_url; ?>base.css' />
<link rel='stylesheet' type='text/css' href='<?php echo $css_url; ?>admin.css' />
<script type="text/javascript" src="<?php echo $js_url; ?>jquery-3.2.1.min.js"></script>
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
				<div class="sysinfo">
					<div class="hd"><b>系统信息</b></div>
					<table class="bd">
						<tr>
							<td height="30"><b>未读信息：</b></td>
							<td class="detail">
								反馈信息：<span class="t6"><?php echo $feedback; ?></span>条  &nbsp; &nbsp;
								在线留言：<span class="t6"><?php echo $message; ?></span>条  &nbsp; &nbsp;
								友情链接：<span class="t6"><?php echo $link; ?></span>条 &nbsp; &nbsp;
							</td>
						</tr>
						<tr>
							<td height="30"><b>用户信息：</b></td>
							<td class="detail">
								用户名：<span class="t4"><?php echo $_SESSION['webinfo_admin_name']; ?> </span>
								IP：<span class="t4"><?php echo $m_user_ip; ?> </span>
								登录次数：<span class="t4"> </span> 
								登录时间：<span class="t4"> </span>
							</td>
						</tr>			
						<tr>
							<td height="30"><b>系统信息：</b></td>
							<td class="detail">
								mysql版本：<span class="t4"><?php echo $mysql; ?></span>
								jmail组件支持：<span class="t4"></span>
								服务器 ：<span class="t4"></span>
							</td>
						</tr>
						<tr>
							<td><b>使用说明：</b></td>
							<td class="detail">
								第一步、在基本配置中进行设置基本信息、界面风格、图片配置等；<br/>
								第二步、在基本配置中添加栏目；<br/>
								第三步、在基本配置中进行优化推广、底部信息、热门标签、在线交流等设置；<br/>
								第四步、在基本配置中设置产品、下载及图片参数；<br/>
								第五步、添加简介、新闻、产品、下载等信息；
							</td>
						</tr>
					</table>
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