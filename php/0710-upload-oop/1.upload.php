<?php
include "../functions.php";
if(IS_POST){
	//判断是否是一个合法的上传文件
	if(is_uploaded_file($_FILES['upload']['tmp_name'])){
		//p($_FILES);exit;
		//获得类型 例如： .jpg
		$type = strrchr($_FILES['upload']['name'],'.');
		//组合文件名，防止重复覆盖
		$filename = time() . mt_rand(0,99999) . $type;
		//组合上传目录
		$dir = './upload/' . date('ymd');
		//创建上传目录
		is_dir($dir) || mkdir($dir,0777,true);
		//完整的上传文件的路径
		$path = $dir . '/' . $filename;
		//把临时文件移动到要上传的目录
		move_uploaded_file($_FILES['upload']['tmp_name'],$path);
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
<form action="" method="post" enctype="multipart/form-data">
	
	文件：<input type="file" name="upload" id="">
	<br>
	<input type="submit" value="上传">
	
	
	
	
	
	
	
	
	
	
	
	
</form>
</body>
</html>
