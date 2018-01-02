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
				<div class="admin_add main">
					<div class="hd"><b>添加员管理</b></div>
					<form name="admin_add" action="save.php" method="post" class="bd">
						<table>
							<tr>
								<td width="120"><font color="#f00">*</font>用户名：</td>
								<td>
									<input type="text" name="useid" />
									<input type="button" class="tj" name="" value="ID重名检测" />
								</td>
							</tr>
							<tr>
								<td><font color="#f00">*</font>登录密码：</td>
								<td><input type="password" name="pass1" /></td>
							</tr>
							<tr>
								<td><font color="#f00">*</font>确认密码：</td>
								<td><input type="password" name="pass2" /></td>
							</tr>
							<tr>
								<td>姓名：</td>
								<td>
									<input type="text" name="name" value="" />
								</td>
							</tr>	
							<tr>
								<td>性别：</td>
								<td>
									<input type="radio" name="sex" value="0" checked />男 
									<input type="radio" name="sex" value="0" />女 
								</td>
							</tr>							
							<tr>
								<td>联系电话：</td>
								<td>
									<input type="text" name="tel" value="" />
								</td>
							</tr>							
							<tr>
								<td>手机：</td>
								<td>
									<input type="text" name="mobile" value="" />
								</td>
							</tr>							
							<tr>
								<td><font color="#f00">*</font>email：</td>
								<td>
									<input type="text" name="email" value="" />用于取回账号密码
								</td>
							</tr>
							<tr>
								<td>QQ：</td>
								<td>
									<input type="text" name="" value="qq" />
								</td>
							</tr>	
							<tr>
								<td>MSN：</td>
								<td>
									<input type="text" name="msn" value="" />
								</td>
							</tr>	
							<tr>
								<td>淘宝：</td>
								<td>
									<input type="text" name="taobao" value="" />
								</td>
							</tr>
							<tr>
								<td>管理员简介：</td>
								<td>
									<textarea name="admin_introduction" cols="60" rows="5"></textarea>
								</td>
							</tr>	
							<tr>
								<td><font color="#f00">*</font>管理员权限：</td>
								<td>
									<input type="checkbox" name="" /><font color="#f00">选择全部</font><br/>
									<input type="checkbox" />管理员管理&nbsp;&nbsp;
									<input type="checkbox" />基本信息&nbsp;&nbsp;
									<input type="checkbox" />界面风格&nbsp;&nbsp;
									<input type="checkbox" />图片配置&nbsp;&nbsp;
									<input type="checkbox" />栏目配置&nbsp;&nbsp;
									<input type="checkbox" />首页配置&nbsp;&nbsp;
									<input type="checkbox" />优化推广&nbsp;&nbsp;
									<input type="checkbox" />底部信息&nbsp;&nbsp;
									<input type="checkbox" />banner管理&nbsp;&nbsp;
									<input type="checkbox" />热门标签&nbsp;&nbsp;
									<input type="checkbox" />在线交流&nbsp;&nbsp;
									<input type="checkbox" />静态页面生成&nbsp;&nbsp;
									<input type="checkbox" />产品模块参数&nbsp;&nbsp;
									<input type="checkbox" />下载模块参数&nbsp;&nbsp;
									<input type="checkbox" />图片模块参数&nbsp;&nbsp;
									<input type="checkbox" />数据库备份&nbsp;&nbsp;
									<input type="checkbox" />反馈系统&nbsp;&nbsp;
									<input type="checkbox" />友情链接&nbsp;&nbsp;
									<?php
									foreach($column_list as $key=>$val){
									?>
									<input type="checkbox" /><?php echo $val['c_name']; ?>管理&nbsp;&nbsp;
									<?php
									}
									?>
								</td>
							</tr>	
							<tr>
								<td><input type="hidden" name="action" value="add" /></td>
								<td class="sub">
									<input class="tj" type="submit" name="" value="提交" />
									<input class="tj" type="reset" name="" value="重置" />
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