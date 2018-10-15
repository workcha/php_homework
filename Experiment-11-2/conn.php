<?php  
	$conn = @mysql_connect('localhost','root','root') or die('连接失败'.mysql_error());
	@mysql_select_db('product',$conn);
?>