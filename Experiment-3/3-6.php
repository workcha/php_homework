<?php 
	$a = 1.25;
	if (is_int($a)) {
		echo "$a is int";
	}
	if (is_float($a)) {
		echo "$a is float";
	}
	if (is_string($a)) {
		echo "$a is string";
	}
	if (is_bool($a)) {
		echo "$a is bool";
	}
	if (is_array($a)) {
		echo "$a is array()";
	}
	if (is_object($a)) {
		echo "$a is object";
	}
	if (is_resource($a)) {
		echo "$a is resource";
	}
	if (is_null($a)) {
		echo "$a is null";
	}
 ?>