<?php 
	define('PI',3.1415926);
	$c_area = PI*10*10;
	$t_area = (10+20)*10/2;
	if($c_area>50&&$t_area>50)
	{
		echo"圆的面积为：$c_area<br>";
		echo"梯形的面积为：$t_area<br>";
	}
 ?>