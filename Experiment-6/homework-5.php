<?php  
	function f2($x)
	{
		$s = 0;
		for ($i=1; $i <= $x ; $i++) { 
			$s += $i;
		}
		return $s;
	}
	echo f2(200);
?>