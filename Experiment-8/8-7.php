<?php 
	$a = array(
		'1' => array('a','b','c'),
		'2'	=> array(11,1,2,3)
	);
	foreach ($a as $k => $v) {
		echo "$k\t";
		foreach ($v as $key => $value) {
			echo "$value\t";
		}
		echo "<br>";
	}
 ?>