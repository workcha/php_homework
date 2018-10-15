<?php  
	$r = 1;
	$PI = 3.14;
	while ( $r <= 10) {
		$area = $PI * $r * $r;
		if ($area > 200) {
			break;
		}
		echo "\$r is $r, \$area is $area<br>";
		$r ++;
	}
?>