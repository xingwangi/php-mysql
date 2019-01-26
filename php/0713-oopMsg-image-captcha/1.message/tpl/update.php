<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加</title>
</head>
<body>
<a href="index.php">返回首页</a>
<hr>
<form action="" method="post">
	标题：<input type="text" name="content" value="<?php echo $this->data[$_GET['id']]['content'] ?>">
	<br>
	<input type="submit" value="修改">
</form>
</body>
</html>