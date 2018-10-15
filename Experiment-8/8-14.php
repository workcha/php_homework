<?php  
	$a = array('c' => 'red',1 => 2 , 4);
	$b = array(1=>'a', 'c'=>'blue', 4);
	$r = array_merge($a, $b);
	print_r($r);
?>