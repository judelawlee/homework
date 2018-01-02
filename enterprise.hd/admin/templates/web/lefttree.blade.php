<div class="lefttree">
	<div class="hd">
		<a href="<?php echo $weburl; ?>" target="_blank">前台首页</a>&nbsp;|
		<a href="<?php echo $weburl; ?>admin">后台首页</a>&nbsp;|
		<a href="login/logout.php">退出</a>&nbsp;
	</div>
	<div class="bd">
		<ul>
			<li>
				<div class="first">基本配置</div>
				<dl class="sub hide" <?php if($_GET['action']=='jbpz') echo 'style="display:block"'; ?>>
					<dt><a href="<?php echo $weburl; ?>admin/admin/index.php?action=jbpz">管理员管理</a></dt>
					<dt><a href="<?php echo $weburl; ?>admin/set/basic.php?action=jbpz">基本信息</a></dt>
					<dt><a href="<?php echo $weburl; ?>admin/set/skin.php?action=jbpz">界面风格</a></dt>
					<dt><a href="<?php echo $weburl; ?>admin/set/img.php?action=jbpz">图片配置</a></dt>
					<dt><a href="<?php echo $weburl; ?>admin/column/index.php?action=jbpz">栏目配置</a></dt>
					<dt><a href="<?php echo $weburl; ?>admin/set/index_set.php?action=jbpz">首页配置</a></dt>
					<dt><a href="<?php echo $weburl; ?>admin/set/seo.php?action=jbpz">优化推广</a></dt>
					<dt><a href="<?php echo $weburl; ?>admin/set/footer.php?action=jbpz">底部信息</a></dt>
					<dt><a href="<?php echo $weburl; ?>admin/set/banner.php?action=jbpz">banner管理</a></dt>
					<dt><a href="<?php echo $weburl; ?>admin/set/strcontent.php?action=jbpz">热门标签</a></dt>
					<dt><a href="<?php echo $weburl; ?>admin/online/index.php?action=jbpz">在线交流</a></dt>
					<dt><a href="<?php echo $weburl; ?>admin/set/html.php?action=jbpz">静态页面生成</a></dt>
					<dt><a href="<?php echo $weburl; ?>admin/parameter/parameter.php?type=3&action=jbpz">产品模块参数</a></dt>
					<dt><a href="<?php echo $weburl; ?>admin/parameter/parameter.php?type=4&action=jbpz">下载模块参数</a></dt>
					<dt><a href="<?php echo $weburl; ?>admin/parameter/parameter.php?type=5&action=jbpz">图片模块参数</a></dt>				
					<dt><a href="<?php echo $weburl; ?>admin/set/database.php?action=jbpz">数据库备份</a></dt>
					<dt><a href="">技术支持</a></dt>
				</dl>
			</li>
			<li>
				<?php
					foreach($list1 as $key=>$val){
				?>
				<div class="first"><?php echo $val['c_name']; ?></div>
				<dl class="sub hide" <?php if($_GET['action']=='gywm') echo 'style="display:block"'; ?>>
					<dt><a href="<?php echo $weburl; ?>admin/about/about.php?id=<?php echo $val['id']; ?>&action=gywm"><?php echo $val['c_name']; ?></a></dt>
					<?php
						foreach($list11 as $key=>$val1){
							if($val1['bigclass']==$val['id']){ 
					?>		
					<dt><a href="<?php echo $weburl; ?>admin/about/about.php?id=<?php echo $val1['id']; ?>&action=gywm"><?php echo $val1['c_name']; ?></a></dt>
					<?php
							}
						}
					?>							
				</dl>
				<?php
					}
				?>
			</li>			
			<?php
				//新闻中心
				foreach($list2 as $key=>$val){
			?>
			<li>
				<div class="first"><?php echo $val['c_name']; ?></div>
				<dl class="sub hide" <?php if($_GET['action']=='xwzx' and $val['id']==$_GET['class1']) echo 'style="display:block"'; ?>>
					<dt><a href="<?php echo $weburl; ?>admin/article/add.php?class1=<?php echo $val['id']; ?>&action=xwzx">添加<?php echo $val['c_name']; ?></a></dt>	
					<dt><a href="<?php echo $weburl; ?>admin/article/index.php?class1=<?php echo $val['id']; ?>&action=xwzx">管理<?php echo $val['c_name']; ?></a></dt>						
				</dl>
			</li>
			<?php
				}
			?>
			<li>
				<?php
					//产品中心
					foreach($list3 as $key=>$val){
				?>
				<div class="first"><?php echo $val['c_name']; ?></div>
				<dl class="sub hide" <?php if($_GET['action']=='cpzx' and $val['id']==$_GET['class1']) echo 'style="display:block"'; ?>>
					<dt><a href="<?php echo $weburl; ?>admin/product/add.php?class1=<?php echo $val['id']; ?>&action=cpzx">添加<?php echo $val['c_name']; ?></a></dt>	
					<dt><a href="<?php echo $weburl; ?>admin/product/index.php?class1=<?php echo $val['id']; ?>&action=cpzx">管理<?php echo $val['c_name']; ?></a></dt>						
				</dl>
				<?php
					}
				?>
			</li>
			<li>
				<?php
					//下载中心
					foreach($list4 as $key=>$val){
				?>
				<div class="first"><?php echo $val['c_name']; ?></div>
				<dl class="sub hide" <?php if($_GET['action']=='xzzx' and $val['id']==$_GET['class1']) echo 'style="display:block"'; ?>>
					<dt><a href="<?php echo $weburl; ?>admin/download/add.php?class1=<?php echo $val['id']; ?>&action=xzzx">添加<?php echo $val['c_name']; ?></a></dt>	
					<dt><a href="<?php echo $weburl; ?>admin/download/index.php?class1=<?php echo $val['id']; ?>&action=xzzx">管理<?php echo $val['c_name']; ?></a></dt>						
				</dl>
				<?php
					}
				?>
			</li>
			<li>
				<?php
					//图片中心
					foreach($list5 as $key=>$val){
				?>
				<div class="first"><?php echo $val['c_name']; ?></div>
				<dl class="sub hide" <?php if($_GET['action']=='tpzx' and $val['id']==$_GET['class1']) echo 'style="display:block"'; ?>>
					<dt><a href="<?php echo $weburl; ?>admin/img/add.php?class1=<?php echo $val['id']; ?>&action=tpzx">添加<?php echo $val['c_name']; ?></a></dt>	
					<dt><a href="<?php echo $weburl; ?>admin/img/index.php?class1=<?php echo $val['id']; ?>&action=tpzx">管理<?php echo $val['c_name']; ?></a></dt>						
				</dl>
				<?php
					}
				?>
			</li>
			<li>
				<?php
					foreach($list6 as $key=>$val){
					//招聘中心
				?>
				<div class="first"><?php echo $val['c_name']; ?></div>
				<dl class="sub hide" <?php if($_GET['action']=='zpzx' and $val['id']==$_GET['class1']) echo 'style="display:block"'; ?>>
					<dt><a href="<?php echo $weburl; ?>admin/job/add.php?class1=<?php echo $val['id']; ?>&action=zpzx">添加<?php echo $val['c_name']; ?></a></dt>	
					<dt><a href="<?php echo $weburl; ?>admin/job/index.php?class1=<?php echo $val['id']; ?>&action=zpzx">管理招聘中心</a></dt>						
				</dl>
				<?php
					}
				?>
			</li>			
			<li>
				<?php
					foreach($list7 as $key=>$val){
					//在线留言
				?>
				<div class="first"><?php echo $val['c_name']; ?></div>
				<dl class="sub hide" <?php if($_GET['action']=='zxly' and $val['id']==$_GET['class1']) echo 'style="display:block"'; ?>>
					<dt><a href="<?php echo $weburl; ?>admin/message/inc.php?class1=<?php echo $val['id']; ?>&action=zxly">配置<?php echo $val['c_name']; ?></a></dt>	
					<dt><a href="<?php echo $weburl; ?>admin/message/index.php?class1=<?php echo $val['id']; ?>&action=zxly">留言信息管理</a></dt>						
				</dl>
				<?php
					}
				?>
			</li>
			<li>
				<div class="first">系统反馈</div>
				<dl class="sub hide" <?php if($_GET['action']=='fkxt') echo 'style="display:block"'; ?>>
					<dt><a href="<?php echo $weburl; ?>admin/feedback/inc.php?action=fkxt">反馈系统设置</a></dt>	
					<dt><a href="<?php echo $weburl; ?>admin/feedback/parameter.php?action=fkxt">反馈列表字段设置</a></dt>		
					<dt><a href="<?php echo $weburl; ?>admin/feedback/index.php?action=fkxt">反馈信息管理</a></dt>						
				</dl>			
			</li>			
			<li>
				<div class="first">友情链接</div>
				<dl class="sub hide" <?php if($_GET['action']=='yqlj') echo 'style="display:block"'; ?>>
					<dt><a href="<?php echo $weburl; ?>admin/link/index.php?action=yqlj">友情链接管理</a></dt>	
					<dt><a href="<?php echo $weburl; ?>admin/link/add.php?action=yqlj">添加友情链接</a></dt>							
				</dl>			
			</li>
		</ul>
	</div>
	<div class="lcontact">
		<b>版权所有：</b><a href="">企业网站</a>
	</div>
</div>