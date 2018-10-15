<?php 
	$score = 90;
	echo "你的分数是$score,属于：";
	if ($score < 60) {
		echo "不及格";
	}elseif ($score < 80 ) {
		echo "良好";
	}elseif ($score >= 80) {
		echo "优秀";
	}
 ?>