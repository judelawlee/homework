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
				<div class="online_manage main">
					<div class="hd"><b>在线交流管理</b></div>
					<div class="bd">
						<div class="set_search clearfix">
							<a href="add.php" class="add">添加新客服</a>
						</div>
						<table>
							<tr class="th">
								<td width="5%">选中</td>
								<td width="5%">排序</td>
								<td>客服名称</td>
								<td>QQ</td>
								<td>MSN</td>
								<td>淘宝旺旺</td>
								<td>阿里旺旺</td>
								<td>SKYPE</td>
								<td>操作</td>
							</tr>
							<?php
							foreach($online_list as $key=>$val){
							?>
							<tr style="border-bottom:1px solid #036;">
								<td class="th"><input type="checkbox" /></td>
								<td><a href="" title="查看详细"><?php echo $val['no_order']; ?></a></td>
								<td><?php echo $val['c_name']; ?></td>
								<td><?php echo $val['']; ?></td>
								<td><?php echo $val['']; ?></td>
								<td><?php echo $val['']; ?></td>
								<td><?php ?></td>
								<td><?php ?></td>
								<td>
									<a href="">编辑 |</a>
									<a onclick="return ConfirmDel();" href="delete.php?id=<?php echo $val['id']; ?>">删除 </a>
								</td>
							</tr>
							<?php
							}
							?>
						</table>
						<div class="del">
							<input type="checkbox" value="" /> 选中本页显示的所有客服
							<input class="tj" type="submit" value="删除选定的条目" name="delsub" />
						</div>
						<form name="search" action="index.php?search=detail_search" method="">
							<b>按客服名称查找:</b>
							<input type="text" name="user_name" value="" size="16" />
							<input class="tj" type="submit" name="sub" value="查 询" />
							请输入客服名称关键字。如果为空，则查找所有信息。
						</form>
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