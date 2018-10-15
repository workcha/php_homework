<?php if (!isset($_GET['submit'])) {
 ?>
	<form action="" method="get">
		<p>姓名：<input type="text" name="name"></p>
		<p><input type="submit" value="提交" name="submit"></p>
	</form>
<?php }else{
	if ($_GET['name'] == '') {
		echo "<script>alert('名字不能为空')</script>";
	}else{
		header("location:http://www.baidu.com");
	}
} ?>