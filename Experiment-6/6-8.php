<?php  
	function greet($name)
	{
		echo "my name is :$name<br>";
	}
	greet('chacha');
	if (@$name == null) {
		echo "\$name is no exit";
	}
?>