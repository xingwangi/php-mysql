<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>




<!--	当method不填写的时候，默认是get请求-->
<!--	action不填写的时候，默认是提交到当前文件-->
	<form action="./post.php" method="post">
		姓名：<input type="text" name="username" id="">
		<br>
		自我介绍：<textarea name="intro" id="" cols="30" rows="10"></textarea>
		<br>
		<input type="submit" value="提交">
	</form>
</body>
</html>