<?php
    header('Content-Type:text/html;charset=UTF-8');
    $connect=new mysqli('localhost','root','','db_student','3306');
    $connect->query("SET CHARACTER SET 'utf8'");
    $connect->query("SET NAMES 'utf8'");
    $sql="SELECT * FROM user_score";
    $result=$connect->query($sql);
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