<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php">返回首页</a>
<form action="" method="post">
	用户名：<input type="text" name="username" required  oninvalid="setCustomValidity('用户名不能为空')" oninput="setCustomValidity('')">
	<br>
	密码：<input type="password" name="password" required>
	<br>
    验证码：<input type="text" name="captcha" required>
    <br>
    <img src="?c=member&a=captcha&=<?php echo microtime(true) ?>" onclick="this.src=this.src+'&='+ Math.random()">
    <br>
	<input type="submit" value="注册">
	<a href="?c=member&a=login">有账号，去登陆</a>
</form>
</body>
</html>