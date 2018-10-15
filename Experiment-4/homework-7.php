<?php 
	# 简单的&&
	echo (32<50)&&(999<1000);
	echo "<br>";
	# ||
	echo (12<4)||(13>5);
	echo "<br>";
	# !
	echo !("abc"=="ABC");
	echo "<br>";
	# 严格比较
	echo 123 === "123";
	echo "<br>";
	# 运算顺序问题
	echo 12.3*10%5;
	echo "<br>";
	echo (int)(true+true);
	echo $a=5>7?"对":"不对";
	echo "<br>".$a."<br>";
 ?>