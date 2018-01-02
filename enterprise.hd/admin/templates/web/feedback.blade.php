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
				<div class="news_manage main">
					<div class="hd"><b>反馈信息管理</b></div>
					<div class="bd">
						<div class="set_search clearfix">
							反馈信息分类：
							<a href="">所有信息&nbsp;&nbsp;|&nbsp;</a>
						 	<a href="">未回复信息&nbsp;&nbsp;|&nbsp;</a>
						 	<a href="">已回复信息&nbsp;&nbsp;|&nbsp;</a>
						</div>
						<table>
							<tr class="th">
								<td>选中</td>
								<td>ID</td>
								<td>反馈信息标题</td>
								<td>阅读</td>
								<td>来源ip</td>
								<td>提交时间</td>
								<td>操作</td>
							</tr>
							<?php
							foreach($feedback_list as $key=>$val){
							?>
							<tr style="border-bottom:1px solid #036;">
								<td class="th"><input type="checkbox" /></td>
								<td><a href="" title="查看详细"><?php echo $val['id']; ?></a></td>
								<td><?php echo $val['fdtitle']; ?></td>
								<td><?php echo $val['readok']; ?></td>
								<td><?php echo $val['ip']; ?></td>
								<td><?php echo $val['addtime']; ?></td>
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
							<input type="checkbox" value="" /> 选中本页显示的所有反馈信息
							<input class="tj" type="submit" value="删除选定的条目" name="delsub" />
						</div>
						<form name="search" class="search_form">
							<b>反馈信息查找：</b>
							<input name="" size="30" type="text" />
							<input class="tj" type="submit" value="查询" name="searchsub" />
							请输入反馈信息关键字。如果为空，则查找所有留言信息。
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