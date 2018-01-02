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
					<div class="hd"><b>友情链接管理</b></div>
					<div class="bd">
						<p style="color:#900; line-height:30px; text-align:left;">前台调用方法：可在栏目配置中添加，访问地址为<?php echo $weburl; ?></p>
						<div class="set_search clearfix">
							链接类型：
							<a href="">未审核链接&nbsp;&nbsp;|&nbsp;</a>
						 	<a href="">推荐链接&nbsp;&nbsp;|&nbsp;</a>
						 	<a href="">全部链接&nbsp;&nbsp;|&nbsp;</a>
						 	<a href="">文字链接&nbsp;&nbsp;|&nbsp;</a>
						 	<a href="">logo链接&nbsp;&nbsp;|&nbsp;</a>
						 	<a href="">仅在中文版显示链接&nbsp;&nbsp;|&nbsp;</a>
						 	<a href="">仅在英文版显示链接&nbsp;&nbsp;|&nbsp;</a>
						</div>
						<table>
							<tr class="th">
								<td>选中</td>
								<td>ID</td>
								<td>链接类型</td>
								<td>网站标题</td>
								<td>网站关键字</td>
								<td>排序</td>
								<td>审核</td>
								<td>推荐</td>
								<td>操作</td>
							</tr>
							<?php
							foreach($link_list as $key=>$val){
							?>
							<tr style="border-bottom:1px solid #036;">
								<td class="th"><input type="checkbox" /></td>
								<td><a href="" title="查看详细"><?php echo $val['id']; ?></a></td>
								<td><?php echo $val['link_type']; ?></td>
								<td><?php echo $val['c_webname']; ?></td>
								<td><?php echo $val['order_no']; ?></td>
								<td><?php echo $val['show_ok']; ?></td>
								<td><?php echo $val['com_ok']; ?></td>
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
							<input type="checkbox" value="" /> 选中本页显示的所有链接
							<input class="tj" type="submit" value="删除选定的条目" name="delsub" />
						</div>
						<form name="search" class="search_form">
							<b>友情链接查找：</b>
							<input name="" size="30" type="text" />
							<input class="tj" type="submit" value="查询" name="searchsub" />
							请输入网站标题关键字。如果为空，则查找所有链接。
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