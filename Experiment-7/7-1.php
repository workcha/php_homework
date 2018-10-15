<?php if (!isset($_GET['submit'])) {
?>
	<form action="" method="get">
		<p>姓名：<input type="text" name="name"></p>
		<p>密码: <input type="password" name="pass"></p>
		<p>性别:
			<input type="radio" name="sex" value="男">男
			<input type="radio" name="sex" value="女">女
		</p>
		<p>专业：
			<select name="zy">
				<option>软件技术</option>
				<option>计算机信息管理</option>
				<option>网络技术</option>
				<option>计算机应用</option>
			</select>
		</p>
		<p>
			备注：<br>
			<textarea name="bz" id="" cols="30" rows="10"></textarea>
		</p>
		<p><input type="submit" name="submit" value="提交"></p>
	</form>
<?php 
	}else{
		echo "姓名：" . $_GET['name'] . "<br>";
		echo "密码：" . $_GET['pass'] . "<br>";
		echo "性别：" . $_GET['sex'] . "<br>";
		echo "专业：" . $_GET['zy'] . "<br>";
		echo "备注：" . $_GET['bz'] . "<br>";
	} 

?>
