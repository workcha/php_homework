<?php  
	$a = array('one', 'two', 'three');
	function lookup($arr, $key)
	{
		$count = count($arr);
		$find = false;
		for ($i=0; $i < $count; $i++) { 
			if ($arr[$i] == $key) {
				$find = true;
				break;
			}
		}
		if ($find) {
			return $i;
		}
		else{
			return -1;
		}
	}
	$result = lookup($a, 'three');
	echo $result;
?>