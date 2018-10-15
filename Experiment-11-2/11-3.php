<?php  
	$conn = @mysql_connect('localhost','root','root') or die('连接失败'.mysql_error());
	mysql_select_db('test',$conn);
	$sql = 'select 1,2,3';
	if (mysql_query($sql)) {
		echo "查询成功";
	}else{
		echo "查询失败";
	}
?>