<?php  
	$course = array('语文','数学', '英语');
?>
<?php if (!isset($_GET['submit'])) {
?>
	<form action="" method="get" align="center">
		<table border="1" align="center">
			<tr>
				<td></td>
				<?php foreach ($course as $k) {
				?>
				<td><?php echo $k; }?></td>
			</tr>
			<?php
				for ($i=1 ; $i <= 5; $i++) { 
			?>
			<tr>
				<td><?php echo "学生$i";?></td>
				<?php 
					for ($j=1; $j <= 3; $j++) { 
				 ?>
				<td><input type="text" size="5px" name="s<?php echo $i . $j?>"></td>
				<?php } ?>
			</tr>
			<?php }?>
		</table>
		<input type="submit" name="submit" value="计算">&nbsp;&nbsp;
		<input type="reset" value="重置">
	</form>
<?php 
	}else{
		for ($i=1; $i <=5 ; $i++) { 
			$s = 0;
			for ($j=1; $j <=3 ; $j++) { 
				$s += @$_GET["s" . $i . $j];
			}
			echo "学生" . $i . "的总成绩为: " . $s . "<br>";
		}
	}
?>
