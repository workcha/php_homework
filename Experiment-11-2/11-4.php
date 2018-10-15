<?php  
	$conn = @mysql_connect('localhost','root','root') or die('连接失败'.mysql_error());
	mysql_select_db('product',$conn);
	$sql = 'select 1,2,3';
	$sql = 'select * from pros';
	$result = mysql_query($sql);
	while ($a = @mysql_fetch_row($result)) {
		print_r($a);
		echo "<br>";
	}
?>