<?php  
	function f1($num)
	{
		$s = 1;
		for ($i=1; $i <= $num ; $i++) { 
			$s *= $i;
		}
		return $s;
	}
	echo f1(10);
?>