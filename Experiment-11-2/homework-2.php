<?php
/**
 * Created by PhpStorm.
 * User: chaohui
 * Date: 2018/10/9
 * Time: 14:57
 */

/**
 * sql代码：
        CREATE DATABASE mydatabase;
        use mydatabase;
        create table mytable(
            user_id int(4) primary key,
            user_name varchar(50) not null,
            user_password varchar(32) not null
        )charset='utf8';
 */

$conn = @mysql_connect('localhost','root','root');
@mysql_select_db('mydatabase',$conn);
$select = "select * from mytable";
for ($i=0;$i<10;$i++) {
    $insert = "insert into mytable VALUES(25". $i .",'擦汗','123456')";
    mysql_query($insert, $conn);
}
echo "<br>";
$update = "update mytable set user_name='哈哈' where user_id=251";
mysql_query($update);

$del = "delete from mytable where user_id=252";
mysql_query($del);
?>
<table border="1">
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>PASSWORD</td>
    </tr>
<?php
$r = @mysql_query($select);
while($row = @mysql_fetch_row($r)) {
    echo "<tr>";
    echo "<td>$row[0]</td>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "</tr>";
}
?>
</table>
