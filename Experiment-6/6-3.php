<?php  
	function big($a, $b)
	{
		if ($a>$b) {
			return $a;
		}else{
			return $b;
		}
	}
	echo big(1,5);
?>