<?php  
	$i = 0;
	while ( $i < 10) {
		$i ++;
		if ($i % 3 == 0) {
			continue;
		}
		echo $i . "<br>";
	}
?>