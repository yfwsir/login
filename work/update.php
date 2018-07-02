<?php
    header('Content-Type:text/html;charset=UTF-8');
    $id=$_POST['id'];
    // var_dump($id);
    $username=$_POST['username'];
    $password=$_POST['password'];
    $score=$_POST['score'];
    $sql="UPDATE user_info SET username='$username',password='$password',score=$score WHERE id=$id";
    // var_dump($sql);
    $connect=new mysqli('localhost','root','','db_student','3306');
    $connect->query("SET CHARACTER SET 'utf8");
    $connect->query("SET NAMES 'utf8'");
    $connect->query($sql);
    // var_dump($result);
    echo "<script>
            window.location.href='mannage.php';
        </script>";
?>