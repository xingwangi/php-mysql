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
<form action="" method="get">
    搜搜：<input type="hidden" name="a" value="search">
    <input type="text" name="wd" id="">
    <input type="submit" value="🔍">
</form>

<table border="1">
    <tr>
        <td>编号</td>
        <td>标题</td>
        <td>操作</td>
    </tr>
	<?php $i = 0 ?>
	<?php foreach ( $data['arc'] as $a ): ?>
		<?php $i ++ ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $a['title'] ?></td>
            <td>
                <a href="?a=update&aid=<?php echo $a['aid'] ?>">编辑</a>
                <a href="?a=removeArc&aid=<?php echo $a['aid'] ?>">删除</a>
            </td>
        </tr>
	<?php endforeach ?>
</table>
<form action="" method="post">
    标题：<input type="text" name="title" id="">
    <br>
    <input type="submit" value="添加">
</form>
<hr>
<table border="1">
    <tr>
        <td>编号</td>
        <td>标签</td>
    </tr>
	<?php foreach ( $data['tag'] as $t ): ?>
        <tr>
            <td><?php echo $t['tid'] ?></td>
            <td><?php echo $t['tname'] ?></td>
        </tr>
	<?php endforeach ?>
</table>
</body>
</html>