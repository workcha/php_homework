<?php  
	function update()
	{
		
		$GLOBALS['count']++;
	}
	$count = 10;
	update();
	echo $count;
?>