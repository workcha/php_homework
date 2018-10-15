<?php  
	$a = array(1,2,3,4,5);
	echo count($a)."<br>";
	array_push($a,6);
	array_push($a,7);
	echo count($a)."<br>";
	for ($i=0; $i < 61; $i++) { 
		$a[$i] = $i;
	}
	print_r($a);
?>