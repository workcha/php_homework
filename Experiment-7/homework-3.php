<?php  
	if (!isset($_GET['submit'])) {
?>
	<form action="" method="get">
		<p>	
			姓氏：<input type="text" name="name">
		</p>
		<p>
			<input type="radio" value="男" name="sex">男
			<input type="radio" value="女" name="sex">女
		</p>
		<input type="submit" name="submit" value="提交">
	</form>
<?php 
	}else{
		echo $_GET['name'];
		if ($_GET['sex'] == '男') {
			echo "先生";
		}
		else{
			echo "小姐";
		}
		echo "，欢迎你访问该站点";
	}
 ?>