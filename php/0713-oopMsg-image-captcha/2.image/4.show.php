<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<script src="./jquery.min.js"></script>
	<script>
		$(function () {
		    //获得图片的src地址
		    var src = $('img').attr('src');
			$('#change,img').click(function(){
				$('img').attr('src',src + '?a=' + Math.random());
			})
        })
	</script>
</head>
<body>
<form action="" method="post">
	用户名：<input type="text" name="" id="">
	<br>
	密码：<input type="password" name="" id="">
	<br>
	验证码：<input type="text" name="" id="">
	<br>
	<img src="./3.captcha.php" width="150">
	<a href="javascript:;" id="change">看不清换一张</a>
	<br>
	<input type="submit" value="登陆">
</form>
</body>
</html>