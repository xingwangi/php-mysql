<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
</head>
<body>
<a href="?a=store">去添加页面</a>
<hr>
<table border="1">
    <tr>
        <td>ID</td>
        <td>标题</td>
        <td>操作</td>
    </tr>
    <?php foreach($this->data as $k => $v): ?>
        <tr>
            <td><?php echo $k; ?></td>
            <td><?php echo $v['content'] ?></td>
            <td>
                <a href="?a=update&id=<?php echo $k; ?>">编辑</a>
                <a href="?a=remove&id=<?php echo $k; ?>">删除</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>













</body>
</html>