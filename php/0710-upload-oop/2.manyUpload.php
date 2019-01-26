<?php
include '../functions.php';
if(IS_POST){
	//p($_FILES);
	foreach ( $_FILES['up']['tmp_name'] as $k => $v ) {
	    //获得类型
	    $type = strrchr($_FILES['up']['name'][$k],'.');
	    $typeArr = ['.jpg','.png'];
	    if(!in_array($type,$typeArr)){
            echo '文件类型不允许';exit;
        }

	}

	//p($_FILES);
	foreach ( $_FILES['up']['tmp_name'] as $k => $v ) {
		//获得类型
		$type = strrchr($_FILES['up']['name'][$k],'.');
        //组合文件名
        $filename = time() . mt_rand(0,99999) . $type;
        //组合上传目录
        $dir = './upload/' . date('ymd');
        is_dir($dir) || mkdir($dir,0777,true);
        //组合完整目录
        $path = $dir . '/' . $filename;
        //移动上传
        move_uploaded_file($v,$path);


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
    <script src="./jquery.min.js"></script>

    <script>
		$(function () {
		    //增加一项
            $('.add').click(function () {
                if($('.box').length >= 5){
                    alert('最多5个');
                }else{
                    var obj = '<div class="box">文件：<input type="file" name="up[]"> <a href="#" class="remove">删除一项</a></div>'
                    $('.container').append(obj);
                }


            })

            //删除一项
            $('.container').delegate('.remove', 'click', function () {
                $(this).parent('.box').remove();
            });

        })
	</script>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
	<div class="container">
		<div class="box">
			文件：<input type="file" name="up[]"> <a href="#" class="add">增加一项</a>
		</div>
	</div>

	<input type="submit" value="上传">
</form>
</body>
</html>