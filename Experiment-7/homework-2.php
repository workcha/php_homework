<?php  
	if (!isset($_POST['submit'])) {
?>
	<form action="" method="post">
		您的姓名：<input type="text" name="user"><br>
		您的性别：
			<input type="radio" name="sex" value="男">男
			<input type="radio" name="sex" value="女">女
			<br>
		您的职业：
			<select name="zy" id="">
				<option value="学生">学生</option>
				<option value="白领">白领</option>
				<option value="工人">工人</option>
				<option value="农民">农民</option>
			</select>
			<br>
		您的最高学历:
			<select name="xl" id="">
				<option value="初中">初中</option>
				<option value="高中">高中</option>
				<option value="本科">本科</option>
				<option value="研究生">研究生</option>
			</select>
			<br>
		您对本站的意见：
		<br>
		<textarea name="view" id="" cols="30" rows="10"></textarea>
		<br>
		<input type="submit" name="submit" value="提交">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" value="重置">
	</form>
<?php 
	}else{
		echo "十分感谢用户" . $_POST['user'] . "意见<br>";
		echo "请确认下列信息:<br>";
		echo "您的性别：" . $_POST['sex'] . "<br>";
		echo "您的学历: " . $_POST['xl'] . "<br>";
		echo "您的职业：" . $_POST['zy'] . "<br>";
		echo "您的意见：" . $_POST['view'];

	}
	
 ?>