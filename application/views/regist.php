<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="<?php echo site_url()?>">
    <title>注册</title>
</head>
<body>
<form action="welcome/save" method="post">
    <p>用户名：<input type="text" name="username"></p>
    <p>密码：<input type="password" name="pwd"></p>
    <p>确认密码：<input type="password" name="repwd"></p>
    <p><input type="submit" value="注册"></p>
</form>
</body>
</html>
