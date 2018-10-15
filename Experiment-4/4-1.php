<?php 
	$s = "haha,dagou!";
	echo "\$s=$s"."<br>";
	if (is_string($s)) {
		echo "\$s is string"."<br>";
	}
	$i = 123;
	echo "\$i=$i"."<br>";
	if (is_int($i)) {
		echo "$i is int"."<br>";
	}
	$a =array(1,2,3);
	foreach ($a as $b) {
		echo "$b<br>";
	}
	if (is_array($a)) {
		print_r($a);
		echo "is array";
	}
 ?>