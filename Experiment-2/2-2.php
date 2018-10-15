<?php  
	$a = @$_GET['a'];
	$b = @$_GET['b'];
	if ($a == $b) {
		echo "\$a=\$b";
	}
	else
		echo "\$a!=\$b";
?>