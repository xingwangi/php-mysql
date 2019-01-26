<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="./resource/js/jquery-1.11.3.min.js"></script>
    <script>
        $(function () {
            $('#page a').click(function () {
                //获得当前页面的p属性也就是得知道点击了第几页
                var p = $(this).attr('p');
                //异步
                $.ajax({
                    url : '?a=getArc',
                    data:{'page' : p},
                    type:'get',
                    //服务器返回的数据类型，如果服务器要返回json，那么此处必须设置为json
                    dataType:'json',
                    success:function (phpData) {
                        //console.log(typeof phpData);
//                        console.log(phpData);
                        var str = '';
                        //服务器返回的数据进行组合html
                        $.each(phpData,function (k,v) {
                            str += '<li>' + v.title + '</li>';
                        })
                        //插入到文章容器中
                        $('#article').html(str);
                    }
                })
            })
        })
    </script>
    <style>
        ul a{
            display: inline-block;
            padding: 5px;
        }
    </style>
</head>
<body>
<h2>异步分页</h2>
<hr>
<ul id="article">
    <?php foreach($data['arc'] as $v): ?>
        <li><?php echo $v['title'] ?></li>
    <?php endforeach ?>
</ul>
<hr>
<ul>
    <li id="page">
        <?php for($i = 1; $i < 5; $i++ ): ?>
            <a href="javascript:;" p="<?php echo $i; ?>">第<?php echo $i; ?>页</a>
        <?php endfor ?>
    </li>
</ul>
</body>
</html>