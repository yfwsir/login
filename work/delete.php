<?php
    header('Content-type:text/html;charset=UTF-8');
    $id=$_GET["id"];
    // var_dump($id);
    $connect=new mysqli('localhost','root','','db_student','3306');
    $connect->query("SET CHARACTER SET 'utf8");
    $connect->query("SET NAMES 'utf8'");
    $sql="DELETE FROM user_info WHERE id=".$id;
    $connect->query($sql);
    echo "<script>
            window.location.href='mannage.php';
        </script>";
?>