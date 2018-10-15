<?php 
	$weigth = 100;
	$w = $weigth / 10;
	if ($w > 200) {
		echo "Can't action";
	}
	else{
		echo "fees is:";
		if ($w < 2) {
			echo "￥7";
		}
		elseif ($w < 10) {
			echo "￥17";
		}
		elseif ($w < 25) {
			echo "￥ 32";
		}
		elseif ($w < 50) {
			echo "￥62";
		}
		elseif ($w < 100) {
			echo "￥108";
		}
		elseif ($w < 200) {
			echo "￥176";
		}
	}

 ?>