<?php 
	$a = array(false, 3.25, 3.25e3, 'wellcome');
	echo "整型：<br>";
	foreach ($a as $b) {
		echo (int)$b."<br>";
	}
	echo "浮点型：<br>";
	foreach ($a as $b) {
		echo (float)$b."<br>";
	}
	echo "字符型：<br>";
	foreach ($a as $b) {
		echo (string)$b."<br>";
	}
	echo "布尔型：<br>";
	foreach ($a as $b) {
		echo (bool)$b."<br>";
	}
 ?>