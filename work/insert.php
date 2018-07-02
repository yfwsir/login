<?php
    header('Content-type:text/html;charset=UTF-8');
    $connect=new mysqli('localhost','root','','db_student','3306');
    $connect->query("SET CHARACTER SET 'utf8");
    $connect->query("SET NAMES 'utf8'");
    $username=$_POST["username"];
    $password=$_POST["password"];
    $score=$_POST["score"];
    $sql="INSERT into user_info (username,password,score) VALUES('$username','$password',$score)";
    var_dump($sql);
    $connect->query($sql);
    echo "<script>
            window.location.href='mannage.php';
        </script>";
?>