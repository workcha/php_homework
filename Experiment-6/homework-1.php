<?php  
	function find_even($num)
	{
		for ($i=1; $i <= $num; $i++) { 
			if (!($i%2 == 0)) {
				continue;
			}
			echo $i . "<br>";
		}
	}
	find_even(10);
?>