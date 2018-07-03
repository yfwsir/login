<?php
    header('Content-type:text/html;charset=UTF-8');
    $id=$_POST["id"];
    // var_dump($id);
    $connect=new mysqli('localhost','root','','db_student','3306');
    $connect->query("SET CHARACTER SET 'utf8");
    $connect->query("SET NAMES 'utf8'");
    $sql="DELETE FROM user_score WHERE id=".$id;
    $result=$connect->query($sql);
    if($result){
        $array = array("code"=>"0", "msg"=> "", "data"=>$result);
        
      } else {
        $array = array("code"=>"100", "msg"=> "删除失败，出现了未知错误","data"=>$result);
      }
      echo json_encode($array);
?>