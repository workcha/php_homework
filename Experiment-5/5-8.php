<?php  
	$total = 0;
	for ($i=1,$j=1; $i < 10; $i++,$j*=2) { 
		$total += $j;
	}
	echo "$total";
?>