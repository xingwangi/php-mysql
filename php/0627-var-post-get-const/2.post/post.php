<?php
//print_r($_POST);
//echo '<hr/>';
//print_r($_POST['intro']);
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


<table border="1" class="">
	<tr>
		<td>姓名：</td>
		<td><?php echo $_POST['username'] ?></td>
	</tr>
	<tr>
		<td>自我介绍</td>
		<td><?php echo $_POST['intro'] ?></td>
	</tr>
</table>
</body>
</html>
