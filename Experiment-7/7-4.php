<?php 
	function cac($a,$b,$cac)
	{
		if ($cac == "*") {
			return $a * $b;
		}elseif ($cac == "+") {
			return $a + $b;
		}elseif ($cac == "-") {
			return $a - $b;
		}elseif ($cac == "/") {
			return $a / $b;
		}else{
			return "error";
		}
	}

	if (!isset($_GET['submit'])) {
 ?>
	<form action="" method="get">
		<input type="text" name="num1">
		<select name="caculate" id="">
			<option>+</option>
		    <option>-</option>
		    <option>*</option>
		    <option>/</option>
		</select>
		<input type="text" name="num2">
		<input type="submit" name="submit" value="计算">
	</form>
<?php 
	}else{
		$result = cac($_GET['num1'], $_GET['num2'], $_GET['caculate']);
		echo "<script>alert('". $_GET['num1'] . $_GET['caculate'] . $_GET['num2'] ."=". $result."')</script>"	;
	}

 ?>