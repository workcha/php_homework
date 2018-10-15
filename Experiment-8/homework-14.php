<?php  
	$a = array(
		array('张三','李四','王五','赵六'),
		array(86,90,82,85)
	);
	foreach ($a as $k) {
		foreach ($k as $key) {
			echo $key."\t";
		}
		echo "<br>";
	}
?>