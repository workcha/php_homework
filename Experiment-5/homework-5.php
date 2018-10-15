<?php  
	function sq($num)
	{
		return $num * $num;
	}
	$i = 1;
	while ($i <= 100) {
		echo "$i sq =" . sq($i) . "<br>";
		$i ++;
	}
?>