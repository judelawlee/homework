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
					<div class="hd"><b>添加产品</b></div>
					<form class="bd" method="post" action="" name="index_set">
						<input type="hidden" name="action" value="modify" />
						<table>
							<tr>
								<td><b><font color="#f00">*</font>产品标题：</b></td>
								<td><input size="40" type="text" name="web_online_type" value="" /></td>
							</tr>
							<tr>
								<td><b><font color="#f00">*</font>所属栏目：</b></td>
								<td>
									<select name="class2">
										<option value="" selected="selected">二级栏目</option>
										<?php
											foreach($column_list2 as $key=>$val2){
												?>
										<option value="<?php echo $val2['id']; ?>"><?php echo $val2['c_name']; ?></option>	
												<?php
											}
										?>
									</select>						
									<select name="class3">
										<option value="" selected="selected">三级栏目</option>
									</select>
								</td>
							</tr>
							<?php
							foreach($list_p as $key=>$val){
								?>
							<tr>
								<td><b><?php echo $val['c_mark']; ?>：</b></td>
								<td>
									<input size="40" type="text" name="web_online_type" value="" />
								</td>
							</tr>			
								<?php
							}
							?>							
							<tr>
								<td><b>内容关键词：</b></td>
								<td>
									<input size="40" type="text" name="web_online_type" value="" />
									用于搜索引擎优化，多个关键词请用","隔开
								</td>
							</tr>
							<tr>
								<td><b>内容简短描述：</b><br/>用于搜索引擎优化</td>
								<td>
									<textarea cols="60" rows="5"></textarea>
								</td>
							</tr>						
							<tr>
								<td><b>详细内容：</b></td>
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
							<tr>
								<td><b>图片地址：</b>自动生成缩略图</td>
								<td>
									<input size="40" type="file" name="web_online_type" value="" />
									<input size="40" class="tj" type="submit" name="web_online_type" value="上传" />
								</td>
							</tr>						
							<tr>
								<td><b>缩略图：</b></td>
								<td>
									<input size="40" type="file" name="web_online_type" value="" />
									<input size="40" class="tj" type="submit" name="web_online_type" value="上传" />
								</td>
							</tr>			
							<tr>
								<td><b>新品展示：</b></td>
								<td>
									<input size="40" type="checkbox" name="web_online_type" value="" />
									选择将在推荐文章中显示（需要网站模板支持）
								</td>
							</tr>				
							<tr>
								<td><b>推荐产品：</b></td>
								<td>
									<input size="40" type="checkbox" name="web_online_type" value="" />
									选择将在推荐文章中显示（需要网站模板支持）
								</td>
							</tr>				
							<tr>
								<td><b>点击次数：</b></td>
								<td>
									<input size="40" type="checkbox" name="web_online_type" value="0" />
									（点击次数越多，热门信息中排名越靠前）
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
								<td><b>更新时间：</b></td>
								<td>
									<input size="40" type="text" name="web_online_type" value="" />
									当前时间为：2017-11-12 19:48:39 注意不要改变格式。
								</td>
							</tr>							
							<tr>
								<td><b>产品排序：</b></td>
								<td>一般按更新时间的先后顺序排序，热门文章按点击次数排序，因此可以修改“发布时间”或“点击次数”来达到排序的目的。</td>
							</tr>							
							<tr bgcolor="#999999"> <td style="padding-left:6px;" colspan="2" height="25"><b>英文内容</b></td></tr>
							<tr>
								<td><b><font color="#f00">*</font>英文标题：</b></td>
								<td><input size="40" type="text" name="web_online_type" value="" /></td>
							</tr>
							<?php
							foreach($list_p as $key=>$val){
								?>
							<tr>
								<td><b><?php echo $val['e_mark']; ?>：</b></td>
								<td>
									<input size="40" type="text" name="web_online_type" value="" />
								</td>
							</tr>			
								<?php
							}
							?>	
							<tr>
								<td><b>英文关键词：</b></td>
								<td>
									<input size="40" type="text" name="web_online_type" value="" />
									用于搜索引擎优化，多个关键词请用","隔开
								</td>
							</tr>							
							<tr>
								<td><b>英文简短描述：</b><br/>用于搜索引擎优化</td>
								<td>
									<textarea cols="60" rows="5"></textarea>
								</td>
							</tr>							
							<tr>
								<td><b>英文内容：</b></td>
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