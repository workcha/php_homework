<?php  
	include 'conn.php';
	$PAGE_SIZE = 5;//每页显示5条信息
	$base_sql = 'select * from pros';
	$count = mysql_num_rows(mysql_query($base_sql));
	if ($count == 0) {
		echo "无产品信息";
	}else{
		$pageCount = intval($count/$PAGE_SIZE) + 1;
		if (@!$_GET['page']) {
			$page = 1;
		}else{
			$page = $_GET['page'];
		}
		$last = $page - 1;
		$next = $page + 1;
		$a = ($page-1) * $PAGE_SIZE;
		if ($page == $pageCount) {
			$ps = $count - ($page-1) * $PAGE_SIZE;
			$r = mysql_query($base_sql . " limit $a, $ps");
		}else
			$r = mysql_query($base_sql . " limit $a, $PAGE_SIZE");
		echo "<table border='1'><tr><td>产品编号</td><td>产品名称</td><td>产品价格</td><td>产品库存</td></tr>";
		while ($row = @mysql_fetch_row($r)) {
			echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
		}
		echo "</table>";
		echo "第".$page."页/共".$pageCount."页&nbsp;&nbsp;";
		if ($pageCount >= 2 && $page != 1 && $page != $pageCount) {
			echo "<a href='11-9.php'>首页</a>&nbsp;";
			echo "<a href='11-9.php?page=$last'>上一页</a>&nbsp;";
			echo "<a href='11-9.php?page=$next'>下一页</a>&nbsp;";
			echo "<a href='11-9.php?page=$pageCount'>尾页</a>";
		}elseif($pageCount >= 2 && $page == $pageCount){
			echo "<a href='11-9.php'>首页</a>&nbsp;";
			echo "<a href='11-9.php?page=$last'>上一页</a>";
		}elseif($pageCount >= 2 && $page == '1'){
			echo "<a href='11-9.php?page=$next'>下一页</a>&nbsp;";
			echo "<a href='11-9.php?page=$pageCount'>尾页</a>";
		}
	}

?>