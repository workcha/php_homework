<?php  
	$a = array('time1', 'time2', 'test3');
	while (list($k, $v)=each($a)) {
		echo "$k:$v<br>";
	}
?>