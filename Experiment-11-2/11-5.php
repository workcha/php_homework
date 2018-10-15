<table border="1" align="center">
<?php  
	$conn = @mysql_connect('localhost','root','root') or die('连接失败'.mysql_error());
	mysql_select_db('product',$conn);
	$sql = 'select 1,2,3';
	$sql = 'select * from pros';
	$result = @mysql_query($sql);
	while ($a = @mysql_fetch_assoc($result)) {
?>
	<tr>
		<td><?php echo $a['id']; ?></td>
		<td><?php echo $a['name']; ?></td>
		<td><?php echo $a['price']; ?></td>
		<td><?php echo $a['stock']; ?></td>
	</tr>
	<?php } ?>
</table>