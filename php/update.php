<?php
    header('Content-Type:text/html;charset=UTF-8');
    $id=$_POST['id'];
    $username=$_POST['username'];
    $score=$_POST['score'];
    $mark=$_POST['mark'];
    $sql="UPDATE user_score SET username='$username',score='$score',mark='$mark' WHERE id=$id";
    // var_dump($sql);
    $connect=new mysqli('localhost','root','','db_student','3306');
    $connect->query("SET CHARACTER SET 'utf8");
    $connect->query("SET NAMES 'utf8'");
    $result=$connect->query($sql);
    if ($result) {
        $array=array("code"=>0,"msg"=>"","data"=>"");
    } else {
        $array=array("code"=>1001,"msg"=>"修改失败，出现了未知错误","data"=>"");
    }
    echo json_encode($array);
    $connect->close();
?>