<!doctype html>
<html>
<head>
<meta http-equiv='content-type' content='text/html;charset=utf-8' />
<meta name='description' content=''>
<meta name='keywords' content=''>
<link rel='stylesheet' type='text/css' href='<?php echo $css_url; ?>base.css' />
<link rel='stylesheet' type='text/css' href='<?php echo $css_url; ?>inside.css' />
<script type="text/javascript" src="<?php echo $js_url; ?>jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo $js_url; ?>base.js"></script>
<title><?php echo $c_title_keywords.'--'.$c_webname; ?></title>
</head>
<body>

<?php
	require_once template('header');
?>

<div class="container">
	<div class="wrap clearfix">
		<div class="main">
			<div class="hd"> <a href="<?php echo $index_c_url; ?>"> 首页</a> > <?php echo $navtitle; ?></div>
			<div class="bd">
				<form name="feedback" onsubmit="return checkfeedback();" action="index.php?action=add" class="feedback">
					<table>
						<tr>
							<td class="t" width="20%"><span>姓名</span></td>
							<td width="70%"><input type="name" type="text" /></td>
							<td class="must">*</td>
						</tr>
						<tr>
							<td class="t" width="20%"><span>电话</span></td>
							<td width="70%"><input type="name" type="text" /></td>
							<td class="must"></td>
						</tr>
						<tr>
							<td class="t" width="20%"><span>email</span></td>
							<td width="70%"><input type="name" type="text" /></td>
							<td class="must"></td>
						</tr>
							<tr>
							<td class="t" width="20%"><span>其他联系方式</span></td>
							<td width="70%"><input type="name" type="text" />（如QQ、MSN等）</td>
							<td class="must"></td>
						</tr>
						<tr>
							<td class="t" width="20%"><span>留言内容</span></td>
							<td width="70%"><textarea name="" cols="50" rows="5"></textarea></td>
							<td class="must">*</td>
						</tr>
						<tr>
							<td></td>
							<td class='tj'>
								<input type="submit" value="提交信息" />
								<input type="reset" value="重新填写" />
							</td>
							<td></td>
						</tr>
					</table>
				</form>
				<div class="pages"><?php echo $c_page_list; ?></div>
			</div>
		</div>
		<div class="rnav">
			<?php require_once template('online'); ?>
		</div>
	</div>
</div>

<?php
	require_once template('footer');
?>

</body>
</html>