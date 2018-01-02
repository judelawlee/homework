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
				<div class="img_set main">
					<div class="hd"><b>网站图片设置</b></div>
					<form class="bd" method="post" action="" name="basic_set">
						<input type="hidden" name="action" value="modify" />
						<table>
							<tr>
								<td><font color="#f00">*</font><b>允许上传的图片格式：</b></td>
								<td><input type="text" value="<?php echo $web_img_type; ?>" name="web_img_type" />多种图片请用","隔开</td>
							</tr>							
							<tr>
								<td><font color="#f00">*</font><b>允许上传的最大尺寸：</b></td>
								<td><input type="text" value="<?php echo $web_img_maxsize; ?>" name="web_img_maxsize" />字节</td>
							</tr>							
							<tr>
								<td><font color="#f00">*</font><b>缩略图大小：</b></td>
								<td>
									宽:<input size="5" type="text" value="<?php echo $web_img_x; ?>" name="web_img_x" />像素 
									高:<input size="5" type="text" value="<?php echo $web_img_y; ?>" name="web_img_y" />像素
								</td>
							</tr>				
							<tr>
								<td><b>图片添加水印：</b></td>
								<td>
									<input type="checkbox" value="<?php echo $b; ?>" name="weburl" />详细大图添加
									<input type="checkbox" value="<?php echo $a; ?>" name="weburl" />缩略图添加
								</td>
							</tr>
							<tr>
								<td><b>水印类型：</b></td>
								<td>
									<input type="radio" value="<?php echo $b; ?>" name="weburl" />文 字水印
									<input type="radio" value="<?php echo $a; ?>" name="weburl" />图片水印
								</td>
							</tr>
							<tr>
								<td><b>水印图片：</b></td>
								<td>
									<input type="file" value="" name="" />
									<input class="tj" type="button" value="上传" name="btn" />
									<a href="" target="_blank" title="浏览图片"><img src="<?php echo $img_url; ?>/picflag.gif" border="0" /></a>
									上传.gif .png 如不改变请不要上传
								</td>
							</tr>
							<tr>
								<td><b>水印文字：</b></td>
								<td>
									<textarea name="name" rows="2" cols="30" name=""></textarea>
									支持带有"\n"的跨行文字，不支持同事含有中英文
								</td>
							</tr>
							<tr>
								<td><b>水印文字大小：</b></td>
								<td>
									<input type="text" value="<?php echo $web_text_size; ?>" name="web_text_size" />
								</td>
							</tr>
							<tr>
								<td><b>水印文字字体：</b></td>
								<td>
									<input size="30" type="text" value="<?php echo $web_text_fonts; ?>" name="web_text_fonts" />
									请将字体文件放到后台管理目录include/fonts/下
								</td>
							</tr>
							<tr>
								<td><b>水印文字角度：</b></td>
								<td><input size="3" type="text" value="<?php echo $web_text_angle; ?>" name="web_text_angle" />水平为0</td>
							</tr>								
							<tr>
								<td><b>水印文字颜色：</b></td>
								<td>
									<input type="text" value="<?php echo $web_text_color; ?>" name="web_text_color" />
									<select name="select_color">
										<option>选择颜色</select>
									</select>
								</td>
							</tr>
							<tr>
								<td><b>水印文字位置：</b></td>
								<td>
									<input type="radio" value="0" name="web_watermark" />中部
									<input type="radio" value="1" name="web_watermark" />左上部
									<input type="radio" value="2" name="web_watermark" />右上部
									<input type="radio" value="3" name="web_watermark" />右下部
									<input type="radio" value="4" name="web_watermark" />左下部
									<input type="radio" value="5" name="web_watermark" />顶中部
									<input type="radio" value="6" name="web_watermark" />右中部
									<input type="radio" value="7" name="web_watermark" />底中部
									<input type="radio" value="8" name="web_watermark" />左中部
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