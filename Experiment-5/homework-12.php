<?php  
	for ($i=1; $i <=100 ; $i++) { 
		if ($i % 10 != 0) {
			continue;
		}
		echo "您是第". $i . "位给我留言的朋友<br>";
	}
?>