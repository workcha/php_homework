<?php
/**
 * Created by PhpStorm.
 * User: chaohui
 * Date: 2018/10/9
 * Time: 15:35
 */

/**
 * sql语句

        use mydatabase;
        create table person(
            name varchar(32) not null,
            sex varchar(5) not null,
            fun varchar(100) not null,
            address varchar(100) not null,
            remarks varchar(200) not null
        )charset='utf8';
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <form action="homework-3_b.php" method="get" name="form1">
            <tr bgcolor="#a9a9a9">
                <td colspan="2"><h2 align="center">添加个人资料</h2></td>
            </tr>
            <tr>
                <td width="20%">真实姓名:</td>
                <td width="80%"><input type="text" name="name" id="name" width="100%" size="40px"></td>
            </tr>
            <tr>
                <td width="20%">性别：</td>
                <td width="80%">
                    <input type="radio" name="sex" value="男"> 男
                    <input type="radio" name="sex" value="女"> 女

                </td>
            </tr>
            <tr>
                <td width="20%">兴趣爱好:</td>
                <td width="80%"><input type="text" name="fun" width="100%" size="40px"></td>
            </tr>
            <tr>
                <td width="20%">家庭住址：</td>
                <td width="80%">
                    <select name="address">
                        <option value="广东">广东</option>
                        <option value="广西">广西</option>
                        <option value="北京">北京</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="20%">备注</td>
                <td width="80%">
                    <textarea name="remarks" id="remarks" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="提交">&nbsp;
                    <input type="reset" name="reset" value="重置">
                </td>
            </tr>
        </form>
    </table>
</body>
</html>
