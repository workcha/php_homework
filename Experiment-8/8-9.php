<?php
	$xh=array("01","02","03");
	$xm=array("张三","李四","王五");
	$cj=array("69","82","45");
	array_multisort($cj,SORT_DESC,$xh,$xm);
	print_r($xh);
	echo"<br>";
	print_r($xm);
	echo"<br>";
	print_r($cj);
?>