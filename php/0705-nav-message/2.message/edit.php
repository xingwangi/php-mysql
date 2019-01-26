<?php
//处理编辑功能
include "../../functions.php";

/*
$a = ['a','b','c'];
$a[1] = 'test';
p($a);
*/

//一、载入数据库
$data = include './data.php';
//获得要修改哪一条的下标（键名）
$id = $_GET['i'];

if ( IS_POST ) {
	//二、修改

	//三、保存到数据库文件中


	$str = <<<str
<script>
alert('修改成功');
location.href='./index.php';
</script>
str;
	echo $str;

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
    <link rel="stylesheet" href="./bt/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="width: 600px">

    <form action="" method="post" class="form-horizontal" role="form">
        <div class="form-group">
            昵称：
            <input type="text" name="nickname" class="form-control" value="<?php echo $data[$id]['nickname'] ?>">
        </div>
        <div class="form-group">
            内容：
            <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">修改留言</button>
        </div>
    </form>
</div>
</body>
</html>
