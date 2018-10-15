<?php  
	$a = array('a' => 5, 'b' => 1, 'c' => 4);
	$b = array(2 => 'c', 1 => 'b', 4 => 'a');
	if (sort($a)) {
		print_r($a);
	}else{
		echo "\$a排序失败";
	}
	echo "<br>";
	if (sort($b)) {
		print_r($b);
	}else{
		echo "\$b排序失败";
	}
?>