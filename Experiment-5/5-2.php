<?php 
	$user = true;
	$name = '二狗子';
	if ($user) {
?>
<table border="1">
	<tr>
		<td>欢迎你:</td>
		<td><?=$name?></td>
<?
	}else{
		echo "二狗子";
	}
 ?>
 </tr>
 </table>