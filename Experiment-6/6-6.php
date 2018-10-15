<?php  
	function update()
	{
		global $count;
		$count++;
	}
	$count = 10;
	update();
	echo $count;
?>