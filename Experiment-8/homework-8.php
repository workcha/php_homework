<?php  
	$arr2 = array(
		array(11,12,13),
		array(21,22,23),
		array(31,32,33)
	);
	for ($i=0; $i < count($arr2); $i++) { 
		for ($k=0; $k < count($arr2[$i]); $k++) { 
			echo " \$arr[$i] [$k]=" . $arr2[$i][$k];
		}
		echo "<br>";
	}
?>