<div class="footer">
	<div class="fnav wrap">
		<ul class="clearfix">
			<?php 
				foreach($navfoot_list as $key=>$val){
			?>
			<li>|<a href="<?php echo $val['c_url']; ?>" <?php echo $val['new_windows']; ?>><?php echo $val['c_name']; ?></a> </li>
			<?php
				}
			?>
		</ul>
	</div>
	<div class="ftext">
		<?php
			if($c_footright!=''){
				echo $c_footright;
			}
			if($c_footaddress!=''){
				echo '<br/>'.$c_footaddress;
			}
			if($c_foottel!=''){
				echo '<br/>'.$c_foottel;
			}
			if($c_footother!=''){
				echo '<br/>'.$c_footother;
			}
			echo '<br/>版权所有 未经许可 不得转载';
			if($c_foottext!=''){
				echo '<br/>'.$c_foottext;
			}
		?>
	</div>
</div>