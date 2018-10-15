<?php  
	$conn = @mysql_connect('localhost','root','root') or die('连接失败'.mysql_error());
	$sql = mysql_select_db('test',$conn);
	if ($sql) {
		echo "连接test数据库成功";
	}else{
		echo "连接数据库失败";
	}

?>