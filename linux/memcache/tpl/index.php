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
		<th>ID</th>
		<th>名称</th>
		<th>操作</th>
	</tr>
	<?php foreach($cateData as $cat): ?>
	<tr>
		<td><?php echo $cat['cid'] ?></td>
		<td><?php echo $cat['catname'] ?></td>
		<td>
			<a href="del.php?cid=<?php echo $cat['cid'] ?>">删除</a>
		</td>
	</tr>
	<?php endforeach ?>
</table>
</body>
</html>