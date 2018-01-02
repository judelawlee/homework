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
				<div class="admin_manage main">
					<div class="hd"><b>管理员管理</b></div>
					<div class="bd">
						<div class="set_search clearfix">
							<a href="add.php" class="add">添加管理员</a>
							<form name="search" action="index.php?search=detail_search" method="">
								用户名：<input type="text" name="user_id" value="" size="16" />
								管理员姓名：<input type="text" name="user_name" value="" size="16" />
								<input class="tj" type="submit" name="sub" value="查 询" />
							</form>
						</div>
						<table>
							<tr class="th">
								<td>选中</td>
								<td>用户名</td>
								<td>姓名</td>
								<td>电话</td>
								<td>手机</td>
								<td>登录次数</td>
								<td>最后登录时间</td>
								<td>最后登录ip</td>
								<td>操作</td>
							</tr>
							<?php
							foreach($admin_list as $key=>$val){
							?>
							<tr style="border-bottom:1px solid #036;">
								<td class="th"><input type="checkbox" /></td>
								<td><a href="" title="查看详细"><?php echo $val['admin_id']; ?></a></td>
								<td><?php echo $val['admin_name']; ?></td>
								<td><?php echo $val['admin_tel']; ?></td>
								<td><?php echo $val['admin_mobile']; ?></td>
								<td><?php echo $val['admin_login']; ?></td>
								<td><?php echo date("Y-m-d H:i:s",$val['admin_modify_date']); ?></td>
								<td><?php echo long2ip($val['admin_modify_ip']); ?></td>
								<td>
									<a href="">详细 |</a>
									<a href="">编辑 |</a>
									<a onclick="return ConfirmDel();" href="delete.php?id=<?php echo $val['id']; ?>">删除 </a>
								</td>
							</tr>
							<?php
							}
							?>
						</table>
						<div class="del">
							<input type="checkbox" value="" /> 选中本页显示的所有管理员
							<input class="tj" type="submit" value="删除选定的条目" name="delsub" />
						</div>
						<div class="page"><?php echo $page_list; ?></div>
					</div>
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