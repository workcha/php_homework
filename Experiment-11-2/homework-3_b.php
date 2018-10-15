<?php
/**
 * Created by PhpStorm.
 * User: chaohui
 * Date: 2018/10/9
 * Time: 16:11
 */
if (!isset($_GET['type'])) {
    ?>
    <table>
        <tr bgcolor="#a9a9a9">
            <td colspan="6"><h2 align="center">学生个人信息表</h2></td>
        </tr>
        <tr>
            <?php
                $ths = array('姓名','性别','爱好','家庭住址','备注',' ');
                foreach ($th as $ths){
            ?>
            <td align="center"><b><?php echo $th;?></b></td>
        <?php }?>
        </tr>
        <tr>
            <?php
                $conn = mysql_connect('localhost','root','root');
                mysql_select_db('person',$conn);
                $sql = "select * from person";
                $r = mysql_query($sql);
                while ($row = mysqli_fetch_row($r)) {
                    for ($i=0 ;$i<5; $i++){
                    ?>
                    <td align="center"><?php echo $row[$i];?></td>
                    <?php
                    }
                    echo "<td>";
                    echo "&nbsp;<a href='homework-3_b.php?type=change&name=$row[0]'>修改</a>";
                    echo "&nbsp;<a href='homework-3_b.php?type=del&name=$row[0]'>删除</a>";


                }
                    ?>
        </tr>
    </table>
    <?php
}
?>