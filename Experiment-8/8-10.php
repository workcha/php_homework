<?php  
	function lookup($arr, $key)
	{
		$i = 0;
		foreach ($arr as $k => $v) {
			if ($v == $key) {
				return $i;
			}
			$i ++;
		}
		if ($i == count($arr)) {
			return "no found";
		}
	}
	$a = array('a', 'b','c');
	$r = lookup($a, 'd');
	echo "$r";
?>