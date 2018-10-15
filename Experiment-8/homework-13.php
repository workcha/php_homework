<?php  
	$a = array(1,1.2,-2.3,90.25);
	print_r($a);
	echo "<br>";
	echo array_sum($a);
	echo "<br>";
	sort($a);
	print_r($a);
	echo "<br>";
	rsort($a);
	print_r($a);
?>