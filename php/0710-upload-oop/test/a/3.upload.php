<?php
include '../functions.php';
if(IS_POST){
	//打印上传文件的信息数组（超级全局数组）
	p($_FILES);
	//文件名
	//echo $_FILES['up']['name'];
	//程序睡眠3秒
	//sleep(3);
	//判断是否是通过http post 合法上传的文件
	if(is_uploaded_file($_FILES['up']['tmp_name'])){
		//上传(其实就是把马上要消失的临时文件保存到上传目录)
		move_uploaded_file($_FILES['up']['tmp_name'],'./1.jpg');
	}

}


?>
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
	<!--如果要上传文件，form表单必须设置：enctype="multipart/form-data"-->
	<form action="" method="post" enctype="multipart/form-data">
<!--		<input type="hidden" name="MAX_FILE_SIZE" value="30000">-->

		文件： <input type="file" name="up" id="">
		<br>
		<input type="submit" value="上传">
	</form>
</body>
</html>

