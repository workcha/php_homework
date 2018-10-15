<?php
	#分割之后，前面的就是原来数组的，后面的是结果数组的  
	$a = array(4,2,5,8,3,45,1,45,35,78);
	$arr = array_splice($a, 1);
	print_r($arr);
	echo "<br>";
	print_r($a);
	$arr2 = array_splice($arr,1,2);
	echo "<br>";
	echo "<br>";
	print_r($arr2);
?>