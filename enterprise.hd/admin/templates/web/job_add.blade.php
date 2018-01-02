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
				<div class="index_set main">
					<div class="hd"><b>添加招聘信息</b></div>
					<form class="bd" method="post" action="" name="index_set">
						<input type="hidden" name="action" value="modify" />
						<table>
							<tr>
								<td><b><font color="#f00">*</font>招聘职位：</b></td>
								<td><input size="40" type="text" name="web_online_type" value="" /></td>
							</tr>
							<tr>
								<td><b>招聘人数：</b></td>
								<td>
									<input size="5" type="text" name="web_online_type" value="" />
									人(留空为不限)
								</td>
							</tr>		
							<tr>
								<td><b>工作地点：</b></td>
								<td>
									<input size="40" type="text" name="web_online_type" value="" />
								</td>
							</tr>		
							<tr>
								<td><b>工资待遇：</b></td>
								<td>
									<input size="40" type="text" name="web_online_type" value="" />
								</td>
							</tr>
							<tr>
								<td><b>发布时间：</b></td>
								<td>
									<input size="40" type="text" name="web_online_type" value="" />
									当前时间为：2017-11-12 19:48:39 注意不要改变格式。
								</td>
							</tr>	
							<tr>
								<td><b>有效期限：</b></td>
								<td>
									<input size="5" type="text" name="web_online_type" value="" />
									天(留空为不限)
								</td>
							</tr>					
							<tr>
								<td><b>职位描述：</b></td>
								<td>
								<?php
								$oFCKeditor = new FCKeditor('c_content'); 
								$oFCKeditor->BasePath = '../../fckeditor/';
								$oFCKeditor->Value = $about['c_content'];
								$oFCKeditor->Width = '100%';   
								$oFCKeditor->Height = '300';
								$oFCKeditor->Create();
								?>
								</td>
							</tr>						
							<tr bgcolor="#999999"> <td style="padding-left:6px;" colspan="2" height="25"><b>英文内容</b></td></tr>
							<tr>
								<td><b><font color="#f00">*</font>招聘职位：</b></td>
								<td><input size="40" type="text" name="web_online_type" value="" /></td>
							</tr>
							<tr>
								<td><b>工作地点：</b></td>
								<td>
									<input size="40" type="text" name="web_online_type" value="" />
								</td>
							</tr>							
								<tr>
								<td><b>工资待遇：</b></td>
								<td>
									<input size="40" type="text" name="web_online_type" value="" />
								</td>
							</tr>								
							<tr>
								<td><b>职位描述：</b></td>
								<td>
								<?php
								$oFCKeditor = new FCKeditor('e_content'); 
								$oFCKeditor->BasePath = '../../fckeditor/';
								$oFCKeditor->Value = $index['e_content'];
								$oFCKeditor->Width = '100%';   
								$oFCKeditor->Height = '300';
								$oFCKeditor->Create();
								?>
								</td>
							</tr>
							<tr>
								<td width="180"></td>
								<td style="text-align:center;">
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