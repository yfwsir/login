<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        [type="submit"]{
            cursor:pointer;
        }
    </style>
</head>
<body>
    <?php
        header('Content-Type:text/html;charset=UTF-8');
        $id=isset($_GET['id'])?$_GET['id']:null;
        $username=null;
        $password=null;
        $score=null;
        $url='insert.php';
        if ($id) {
            $url='update.php';
            $connect=new mysqli('localhost','root','','db_student','3306');
            $connect->query("SET CHARACTER SET 'utf8");
            $connect->query("SET NAMES 'utf8'");
            $sql="SELECT * FROM user_info WHERE id=".$id;
            // var_dump($sql);
            $result=$connect->query($sql);
            $row=$result->fetch_assoc();
            // var_dump($row);
            $username=$row["username"];
            $password=$row['password'];
            $score=$row['score'];
        }
        // var_dump($url);
        echo "<form action='$url' method='POST'>
        <p><input type='hidden' name='id' value='$id'></p>
        <p>账号:<input type='text' name='username' value='$username'></p>
        <p>密码:<input type='password' name='password' value='$password'></p>
        <p>分数:<input type='text' name='score' value='$score'></p>
        <input type='submit' value='点击确认'>
        </form>";
    ?>
    
</body>
</html>