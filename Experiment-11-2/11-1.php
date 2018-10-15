<?php  
	$conn = @mysql_connect('localhost','root','root');
	echo "连接服务器";
	if ($conn) {
		echo "成功";
	}
	else{
		echo "失败";
	}
?>