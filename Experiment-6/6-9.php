<?php  
	function swap($a,$b)
	{
		$t = $a;
		$a = $b;
		$b = $t;
		echo "\$a is $a<br>";
		echo "\$b is $b<br>";
	}
	swap(1,5);
?>