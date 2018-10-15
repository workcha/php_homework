<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>产品管理</title>
</head>
<body>
	<h2 align="center">产品信息</h2>
	<br>
	<form action="" method="get" align="center">
		<p>请输入产品号：<input type="text" name="id">&nbsp;<input type="submit" name="submit"></p>
	</form>
	<hr>
	<form action="" method="post">
	<table align="center" border="1">
	<?php  
		include 'conn.php';
		if (isset($_GET['id'])) {
			$sql = "select * from pros where id = '" . $_GET['id'] ."'";
			$result = @mysql_query($sql);
			$row = @mysql_fetch_row($result);
		}
		else{
			for ($i=0; $i < 4; $i++) { 
				$row[$i] = '';
			}
		}
		$a = array('产品编号', '产品名称', '产品价格', '产品库存');
		for ($i=0; $i < count($row); $i++) { 
			echo "<tr><td>" . $a[$i] .":</td><td><input type='text' value='" . $row[$i] . "' name=s$i></td>";
		}
		echo "<tr><td colspan='2'>
			&nbsp;
			<input type='submit' name='add' value='添加'>
			&nbsp;
			<input type='submit' name='change' value='修改'>
			&nbsp;
			<input type='submit' name='delete' value='删除'>
		</td></tr>";
	?>
		</table>
	</form>
	<?php  
		if (isset($_POST['add'])) {
			$no = $_POST['s0'];
			$name = $_POST['s1'];
			$price = $_POST['s2'];
			$stock = $_POST['s3'];
			$r = @mysql_query("select * from pros where id = '" . $no ."'");
			$row = @mysql_fetch_row($r);
			if ($row) {
				echo "<script>alert('该产品号已经存在');window.location='11-6.php';</script>";
			}else{
				if (mysql_query("insert into pros values('$no','$name','$price','$stock')")) {
					echo "<script>alert('增加成功');window.location='11-6.php';</script>";
				}else{
					echo "<script>alert('增加失败');window.location='11-6.php';</script>";
				}
			}	
		}elseif (isset($_POST['change'])) {
			$no = $_POST['s0'];
			$name = $_POST['s1'];
			$price = $_POST['s2'];
			$stock = $_POST['s3'];
			$r = @mysql_query("select * from pros where id = '" . $no ."'");
			$row = @mysql_fetch_row($r);
			if (!$row) {
				echo "<script>alert('该产品号不存在');window.location='11-6.php';</script>";
			}else{
				if (mysql_query("update pros set name='$name',price='$price',stock='$stock'")) {
					echo "<script>alert('修改成功');window.location='11-6.php';</script>";
				}else{
					echo "<script>alert('修改失败');window.location='11-6.php';</script>";
				}
			}	
		}
		elseif (isset($_POST['delete'])) {
			$no = $_POST['s0'];
			$name = $_POST['s1'];
			$price = $_POST['s2'];
			$stock = $_POST['s3'];
			$r = @mysql_query("select * from pros where id = '" . $no ."'");
			$row = @mysql_fetch_row($r);
			if (!$row) {
				echo "<script>alert('该产品号不存在');window.location='11-6.php';</script>";
			}else{
				if (mysql_query("delete from pros where id='$no'")) {
					echo "<script>alert('删除成功');window.location='11-6.php';</script>";
				}else{
					echo "<script>alert('删除失败');window.location='11-6.php';</script>";
				}
			}	
		}
	?>
</body>
</html>