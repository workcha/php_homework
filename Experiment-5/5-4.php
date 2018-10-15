<?php 
	$score = 88;
	$s = (int)($score/10);
	switch ($s) {
		case 9:
		case 8:
			echo "优秀";
			break;
		case 7:
		case 6:
			echo "及格";
			break;
		default:
			echo "不及格";
			break;
	}
 ?>