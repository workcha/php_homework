<?php if (!isset($_POST['submit'])) { ?>
	<form action="" method="post">
		<p>兴趣爱好：
			<select name="xq">
		        <option>打篮球</option>
		        <option>看书</option>
		        <option>看电影</option>
		        <option>上网</option>
	    	</select>
		</p>
		<p><input type="submit" name="submit" value="提交"></p>
	</form>
<?php  
	}else{
		switch ($_POST['xq']) {
			case '打篮球':
				echo "小白打篮球";
				break;
			case '看书':
				echo "小包看书";
				break;
			case '看电影':
				echo "黑客看电影";
				break;
			case '上网':
				echo "哈桑上网";;
				break;
			default:
				echo "浩南出错了";
				break;
		}
	}
?>