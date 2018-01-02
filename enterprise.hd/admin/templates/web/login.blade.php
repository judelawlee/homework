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
<script type="text/javascript">
function check_login(){
	if(login_form.login_name.value.length==''){
		alert("请输入账号");
		login_form.login_name.focus();
		return false;
	}	
	if(login_form.login_pass.value.length==''){
		alert("请输入密码");
		login_form.login_pass.focus();
		return false;
	}
	return true;
}
</script>
</head>
<body>
<div class="container">
	<div class="wrap clearfix">
		<div class="login">
			<div class="hd"> 网站后台管理系统</div>
			<div class="bd">
				<div class="tit">管理员登录</div>
				<form method="post" name="login_form" onsubmit="return check_login();" action="login_check.php">
					<table>
						<tr>
							<td>管理员账号：</td>
							<td><input type="text" name="login_name" value="xxx" size='20' /></td>
						</tr>						
						<tr>
							<td>管理员密码：</td>
							<td><input type="password" name="login_pass" value="" size='20' /></td>
						</tr>						
						<tr>
							<td>输入验证码：</td>
							<td>
								<input type="text" name="code" value="" size='6' />
								<img onclick="this.src='../include/ajax.php?action=code&'+Math.random()" src="../include/ajax.php?action=code" title="看不清？点击更换验证码。" />
							</td>
						</tr>
						<tr>
							<td><input type="hidden" name="action" value="login" /></td>
							<td class="sub">
								<a href="">忘记密码？</a>
								<input type="submit" name="sub" value="确 认" />
								<input type="reset" name="res" value="清 除" />
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>