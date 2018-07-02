<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="add.php">添加新成员</a>
    <table border="1" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Score</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php
                header('Content-Type:text/html;charset=UTF-8');
                $connect=new mysqli('localhost','root','','db_student','3306');
                $connect->query("SET CHARACTER SET 'utf8'");
                $connect->query("SET NAMES 'utf8'");
                $sql="SELECT * from user_info";
                $result=$connect->query($sql);
                $row=$result->fetch_all();
                // var_dump($row);
                foreach ($row as $key => $value) {
                    // var_dump($value['0']);
                    $arr=array("<tr>");
                    foreach ($value as $key2 => $item) {
                        // var_dump($item);
                        array_push($arr,"<td>$item</td>");
                    }
                    array_push($arr,"<td><a href='delete.php?id=$value[0]'>删除</a><a href='add.php?id=$value[0]'>修改</a></td>");
                    array_push($arr,"</tr>");
                    echo join($arr);
                }
                //关联数组，有key和有value，key不为0。索引数组，索引为0123这些。
            ?>
        </tbody>
    </table>
</body>
</html>