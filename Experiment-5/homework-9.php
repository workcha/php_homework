<?php 
	$a = 4096;
	$count = 0;
	while ($a != 1) {
		$count ++;
		$a = $a / 2;
	}
	echo "$count";
 ?>