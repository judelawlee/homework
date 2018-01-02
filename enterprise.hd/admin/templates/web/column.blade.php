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
				<div class="column_manage main">
					<div class="hd"><b>栏目管理</b></div>
					<div class="bd">
						<div class="add clearfix"><a href="add.php">添加一级栏目</a></div>
						<table>
							<tr class="th">
								<td>栏目名称[排序]</td>
								<td>ID</td>
								<td>导航栏显示</td>
								<td>栏目属性</td>
								<td>栏目模型</td>
								<td>栏目文件夹</td>
								<td>中文链接地址</td>
								<td>选中</td>
								<td>操作</td>
							</tr>
							<?php
							foreach($column_big as $key=>$val){
								$val['nav']=navdisplay($val['nav']);
								$val['if_in']=if_in($val['if_in']);
								$val['module1']=$val['module'];
								$val['module']=module($val['module']);
							?>
							<tr style="background:#dcdcdc; border-bottom:1px solid #036;">
								<td class="class1">
									<?php echo $val['c_name']; ?>
									[<font color="#f60"><?php echo $val['no_order']; ?></font>]
								</td>
								<td><?php echo $val['id']; ?></td>
								<td><?php echo $val['nav']; ?></td>
								<td><?php echo $val['if_in']; ?></td>
								<td><?php echo $val['module']; ?></td>
								<td><?php echo $val['foldername']; ?></td>
								<td><?php echo $val['c_out_url']; ?></td>
								<td><input type="checkbox" name="" /></td>
								<td>
									<a href="">添加二级栏目 |</a>
									<a href="">编辑 |</a>
									<a onclick="return ConfirmDel();" href="delete.php?id=<?php echo $val['id']; ?>">删除 </a>
								</td>
							</tr>
								<?php
								foreach($column_small as $key=>$val2){
									if($val2['bigclass']==$val['id']){
										$val2['nav']=navdisplay($val2['nav']);
										$val2['if_in']=if_in($val2['if_in']);
										$val2['module1']=$val2['module'];
										$val2['module']=module($val2['module']);
								?>
								<tr style="background:#fcc; border-bottom:1px solid #036;">
									<td class="class2">&nbsp;&nbsp;
										<?php echo $val2['c_name']; ?>
										[<font color="#f60"><?php echo $val2['no_order']; ?></font>]
									</td>
									<td><?php echo $val2['id']; ?></td>
									<td><?php echo $val2['nav']; ?></td>
									<td><?php echo $val2['if_in']; ?></td>
									<td><?php echo $val2['module']; ?></td>
									<td><?php echo $val2['foldername']; ?></td>
									<td><?php echo $val2['c_out_url']; ?></td>
									<td><input type="checkbox" name="" /></td>
									<td>
										<a href=""><font color="#f60">添加三级栏目</font> |</a>
										<a href="">编辑 |</a>
										<a onclick="return ConfirmDel();" href="delete.php?id=<?php echo $val['id']; ?>">删除 </a>
									</td>
								</tr>
								<?php
								foreach($column_small as $key=>$val3){
									if($val3['bigclass']==$val2['id']){
										$val3['nav']=navdisplay($val3['nav']);
										$val3['if_in']=if_in($val3['if_in']);
										$val3['module1']=$val3['module'];
										$val3['module']=module($val3['module']);
								?>
								
								<tr style="background:#fff; border-bottom:1px solid #036;">
									<td class="class3">&nbsp;&nbsp;
										<?php echo $val3['c_name']; ?>
										[<font color="#f60"><?php echo $val3['no_order']; ?></font>]
									</td>
									<td><?php echo $val3['id']; ?></td>
									<td><?php echo $val3['nav']; ?></td>
									<td><?php echo $val3['if_in']; ?></td>
									<td><?php echo $val3['module']; ?></td>
									<td><?php echo $val3['foldername']; ?></td>
									<td><?php echo $val3['c_out_url']; ?></td>
									<td><input type="checkbox" name="" /></td>
									<td>
										<a href="">编辑 |</a>
										<a onclick="return ConfirmDel();" href="delete.php?id=<?php echo $val['id']; ?>">删除 </a>
									</td>
								</tr>
							<?php	}}
									}
								}
							}
							?>
						</table>
						<div class="del">
							<input type="checkbox" value="" /> 选中本页显示的所有栏目
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