<?php
    header('Content-type:text/html;charset=UTF-8');
    $username=$_POST["username"];
    $score=$_POST["score"];
    $mark=$_POST["mark"];
    $connect=new mysqli('localhost','root','','db_student','3306');
    $connect->query("SET CHARACTER SET 'utf8");
    $connect->query("SET NAMES 'utf8'");
    $sql="INSERT into user_score (username,score,mark) VALUES('$username','$score','$mark')";
    $connect->query($sql);
    $sql1="SELECT * FROM user_score";
    $result=$connect->query($sql1);
    $arr=array();
    while ($row=$result->fetch_assoc()) {
        array_push($arr,$row);
    }
    if($arr){
        $array = array("code"=>"0", "msg"=> "", "data"=>$arr);
        
      } else {
        $array = array("code"=>"100", "msg"=> "开了个小差，出现了未知错误");
      }
      echo json_encode($array);
    $connect->close();
?>