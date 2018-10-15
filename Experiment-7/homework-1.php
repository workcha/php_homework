<?php  
	if (!isset($_GET['submit'])) {
?>
	<form action="" method="get">
		<p>姓名：
			<input type="text" name="name">
		</p>
		<p>
			性别：
			<select name="sex" id="">
				<option value="男">男</option>
				<option value="女">女</option>
			</select>
		</p>
		<input type="submit" name="submit" value="提交">
		<input type="reset" value="重置">
	</form>
<?php  
	}else{
		echo $_GET['name'] . "同学，欢迎你访问本页<br>";
		echo "您是一位" . $_GET['sex'] . "生";
	}
?>