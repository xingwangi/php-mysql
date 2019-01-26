<?php
//不要在老师的代码基础上面写，全部重新打！！！

include '../functions.php';
//写一个类，既可以单文件上传，又可以多文件上传
class Upload{
	public function up(){
//		p($_FILES);
	}
}
if(IS_POST){
	$upload = new Upload();
	$upload->up();
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
<!--<form action="" method="post" enctype="multipart/form-data">-->
<!--	文件1：<input type="file" name="up[]" id="">-->
<!--	<br>-->
<!--	文件2：<input type="file" name="up[]" id="">-->
<!--	<br>-->
<!--	<input type="submit" value="上传">-->
<!--</form>-->
<hr>
<form action="" method="post" enctype="multipart/form-data">
	文件：<input type="file" name="upload" id="">
	<br>
	<input type="submit" value="上传">
</form>
</body>
</html>
