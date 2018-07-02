<?php
    header('Content-Type:text/html;charset=UTF-8');
    $username=$_POST['username'];
    $password=$_POST['password'];
    // $mark = isset($_POST["mark"])?$_POST["mark"] : "";
    $connect=new mysqli('localhost','root','','db_student','3306');
    $sql="SELECT * from user_info WHERE username = '$username' and password = '$password'";
    // $sql1="SELECT * from user_info";
    $connect->query("SET CHARACTER SET 'utf8'");
    $connect->query("SET NAMES 'utf8'");
    $result=$connect->query($sql);
    // $sql_insert="INSERT INTO user_info (username, password) VALUES ('$username', '$password')";
    // $row=$result->fetch_object();
    $row=$result->fetch_assoc();
    // var_dump($row);
    if($row) {
        $arr = array("id" => $row["id"], "username"=> $row["username"]);
        // 返回用户基本信息
        $array = array("code"=>"0", "msg"=> "", "data"=>  $arr);
        
      } else {
        $array = array("code"=>"100", "msg"=> "账号或者用户名错误！！");
      }
      echo json_encode($array);
    $connect->close();
?>

