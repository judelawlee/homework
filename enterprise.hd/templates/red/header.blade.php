<div class="header">
	<div class="topArea wrap clearfix">
		<div class="logo fl">
			<a href="<?php echo $weburl; ?>"><img src="<?php echo $logo; ?>" alt="" /></a>
		</div>
		<div class="sets fr">
			<div class="set1">
				今天是
				<script type="text/javascript">
					var today=new Date();
					function initArray(){
						this.length=initArray.arguments.length;
						for(var i=0;i<this.length;i++){
							this[i+1]=initArray.arguments[i];
						}
					}
					var d=new initArray(
						' 星期日',
						' 星期一',
						' 星期二',
						' 星期三',
						' 星期四',
						' 星期五',
						' 星期六');
					document.write(today.getFullYear()+"年"+(today.getMonth()+1)+"月"+today.getDate()+"日"+d[today.getDay()+1]);
				</script>
				<span><a href="#" title="设为首页">设为首页</a> | <a href="#" title="加入收藏">加入收藏</a></a>
			</div>
			<form class="search" method="post" name="search" action="<?php echo $weburl; ?>search/search.php">
				<input type="text" name="c_title" size="20" />
				<select name="class1">
					<?php
						foreach($nav_search as $key=>$val){
					?>
					<option value="<?php echo $val['id']; ?>"><?php echo $val['c_name']; ?></option>
					<?php
						}
					?>
				</select>
				<input type="submit" name="sub" value="搜索" class="searchgo" />
			</form>
		</div>
	</div>
	<div class="nav">
		<ul class="wrap">
			<li><a href="<?php echo $navurl; ?>">首页</a>|</li>
			<?php
				foreach($nav_list as $key=>$val){
			?>
			<li><?php echo $val['new_windows']; ?> <a title="<?php echo $val['c_name']; ?>" href="<?php echo $val['c_url']; ?>"><?php echo $val['c_name']; ?></a>|</li>
			<?php
				}
			?>
		</ul>
	</div>
	<div class="banner">
		<div class="hd">
			<ul></ul>
		</div>
		<div class="bd">
			<ul>
				<?php
					$banner_arr=explode('|',$banner_img);
					$banner_url=explode('|',$banner_url);
					$i=1;
					foreach($banner_arr as $key=>$val){
				?>
				<li class="<?php if($i!=1) echo 'hide'; ?>"><a href="<?php echo $banner_url[$key]; ?>"><img src="<?php echo $val; ?>" /></a></li>
				<?php
					$i++;
					}
				?>
			</ul>
		</div>
	</div>
	<script type="text/javascript">
		var i=0;
		function switch_banner(){
			var num=$(".banner .bd ul li").length;
			$(".banner .bd ul li").addClass('hide');
			$(".banner .bd ul li:eq("+i+")").removeClass('hide');	
			i++;
			if(i>num-1){
				i=0;
			}	
		}
		setInterval(switch_banner,3000);
	</script>
</div>