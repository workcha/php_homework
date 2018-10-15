<?php 
	$day = 1;
	if ($day == 1) {
		echo "周一，新的一周开始啦！";
	}elseif ($day == 5) {
		echo "周五，周末到了，好好休息！";
	}elseif ($day == 7) {
		echo "周日，明天又要开始上课了！";
	}
	switch ($day) {
		case 1:
			echo "周一，新的一周开始啦！";
			break;
		case 5:
			echo "周五，周末到了，好好休息！";
			break;
		case 7:
			echo "周日，明天又要开始上课了！";
			break;
		default:
			# code...
			break;
	}
 ?>