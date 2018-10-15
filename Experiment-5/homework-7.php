<?php  
	$i = 0;
	while ($i < 9) {
		$j = 0;
		while ($j < $i) {
			$j++;
			echo "*";
		}
		$i++;
		echo "<br>";
	}
?>