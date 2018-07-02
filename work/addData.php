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
    <form action="insert.php" method="POST">
        <p>账号:<input type="text" name="username" id=""></p>
        <p>密码:<input type="password" name="password" id=""></p>
        <p>分数:<input type="text" name="score" id=""></p>
        <input type="submit" value="点击添加">
    </form>
</body>
</html>