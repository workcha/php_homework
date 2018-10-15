<?php
/**
 * Created by PhpStorm.
 * User: chaohui
 * Date: 2018/10/9
 * Time: 14:55
 */
	$conn = @mysql_connect('localhost','root','root');
	echo "连接服务器";
	if ($conn) {
        echo "成功";
    }
    else{
        echo "失败";
    }
?>