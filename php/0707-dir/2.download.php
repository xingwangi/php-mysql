<?php
if(isset($_GET['path'])){

	//二进制文件
	header("Content-type:application/octet-stream");
	//获得文件名
	$fileName = basename($file);
	//下载窗口中显示的文件名
	header("Content-Disposition:attachment;filename={$fileName}");
	//文件尺寸单位
	header("Accept-ranges:bytes");
	//文件大小
	header("Accept-length:".filesize($file));
	//读出文件内容
	readfile($file);
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
	<table border="1">
		<tr>
			<td>mulu.zip</td>
			<td>
				<a href="">下载</a>
			</td>

		</tr>
		<tr>
			<td>hdw.jpg</td>
			<td>
				<a href="">下载</a>
			</td>
		</tr>
	</table>
</body>
</html>
