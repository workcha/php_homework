<h2>计算累加和</h2>
<br>
<form action="" method="get">
	1+2+...+<input type="text" size="4px" name="num">
	<input type="submit" name="submit" value="计算">
</form>
<?php if (isset($_GET['submit'])) {
	$res = 0;
	for ($i=1; $i <= $_GET['num']; $i++) { 
		$res += $i;
	}
	echo "<script>alert('$res')</script>";
} ?>