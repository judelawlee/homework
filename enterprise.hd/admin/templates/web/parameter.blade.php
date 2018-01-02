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
				<div class="product_parameter_set main">
					<div class="hd"><b>产品参数设置</b></div>
					<form class="bd" method="post" action="" name="basic_set">
						<input type="hidden" name="action" value="modify" />
						<table>
							<tr>
								<td>字段排序</td>
								<td>调用代码</td>
								<td>字段名称</td>
								<td>英文名称</td>
								<td>最大字符数</td>
								<td>是否启用</td>
							</tr>
							<?php
							foreach($list as $key=>$val){
							?>
							<tr>
								<td><input type="text" name="no_order" size="3" value="<?php echo $val['no_order']; ?>"</td>
								<td><?php echo $val['name']; ?></td>
								<td><input type="text" name="c_mark" size="25" value="<?php echo $val['c_mark']; ?>" /></td>
								<td><input type="text" name="e_mark" size="25" value="<?php echo $val['e_mark']; ?>" /></td>
								<td>
								<?php 
									if($val['maxsize']==0){
										echo '不限';
									}else{
										echo $val['maxsize'];
									}
								?>
								</td>
								<td><input type="checkbox" name="use_ok" value="1" <?php echo $val['use_ok']; ?> /></td>
							</tr>		
							<?php
							}
							?>	
							<tr>
								<td colspan="6" style="text-align:center;">
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