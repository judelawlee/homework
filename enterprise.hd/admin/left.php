<?php
$query='select * from '.$column.' where if_in=0 order by no_order';
$result=$db->query($query);
while($list=$db->fetch_array($result)){
	if($list['bigclass']==0){
		switch($list['module']){
			case 1:
				$list1[]=$list;
			break;			
			case 2:
				$list2[]=$list;
			break;			
			case 3:
				$list3[]=$list;
			break;			
			case 4:
				$list4[]=$list;
			break;			
			case 5:
				$list5[]=$list;
			break;			
			case 6:
				$list6[]=$list;
			break;			
			case 7:
				$list7[]=$list;
			break;
		}
	}else{
		switch($list['module']){
			case 1:
				$list11[]=$list;
				$list12[]=$list;
			break;			
			case 2:
				$list22[]=$list;
			break;			
			case 3:
				$list33[]=$list;
			break;			
			case 4:
				$list44[]=$list;
			break;			
			case 5:
				$list55[]=$list;
			break;			
			case 6:
				$list66[]=$list;
			break;
			case 7:
				$list77[]=$list;
			break;
		}		
	}
}
?>