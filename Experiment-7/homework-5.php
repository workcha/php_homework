<?php if (!isset($_POST['submit'])){?>
	

<h2>&nbsp;&nbsp;&nbsp;&nbsp;用户注册</h2>
<form action="" method="post" float='right'>
	用 户 名：<input type="text" name="user"><br>
	密&nbsp;&nbsp;码：<input type="password" name="pass"><br>
	确认密码：<input type="password" name="repass"><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="提交">&nbsp;&nbsp;
	<input type="reset" value="重置">
</form>
<?php 
	}else{
		if ($_POST['user'] == '') {
			echo "<script>alert('用户名不能为空')</script>";
			exit();
		}
		if ($_POST['pass'] != $_POST['repass']) {
			echo "<script>alert('两次密码不一致')</script>";
			exit();
		}
		echo "<script>alert('its ok!')</script>";
	}
 ?>