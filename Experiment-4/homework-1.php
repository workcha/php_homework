<?php 
	$a = array(
		array('学号','姓名','性别'),
		array('081101','王林','男'),
		array('081102','程明','男'),
	);
 ?>
 <table border="1">
	<?php 
		for ($i=0; $i < count($a); $i++) { 
			echo "<tr>";
			for ($j=0; $j < count($a[$i]); $j++) { 
				echo "<td>".$a[$i][$j]."</td>";
			}
			echo "</tr>";
		}
	 ?>
</table>