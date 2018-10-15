<?php  
	$a = array('a1', 'b2', 'c3', 'd4');
	$result = array_search('b2', $a);
	if (is_numeric($result)) {
		echo $result;
	}else{
		echo "在数组中没发现b2";
	}
?>