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
				<div class="database main">
					<p class="insert"><a href=""><b>数据库导入</b></a></p>
					<div class="hd"><b>数据备份</b></div>
					<form class="bd" method="post" action="" name="basic_set">
						<input type="hidden" name="action" value="modify" />
						<table>
							<tr>
								<td><input type="checkbox" checked />全选/反选</td>
								<td>数据库表</td>
								<td>记录条数</td>
								<td>大小[共 <?php echo $totalsize; ?>  M]</td>
							</tr>
							<?php
							foreach($tables as $key=>$val){
							?>
							<tr>
								<td><input type="checkbox" name="tables" checked value="<?php echo $val['no_order']; ?>"</td>
								<td><?php echo $val; ?></td>
								<td><?php echo $bkresults[$key]; ?></td>
								<td><?php echo $size[$key]; ?></td>
							</tr>		
							<?php
							}
							?>	
							<tr>
								<td colspan="6" style="text-align:center;">
									<input class="tj" type="submit" value="开始备份数据" />
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