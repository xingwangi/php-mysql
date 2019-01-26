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
            //异步添加
            $('#form').submit(function (e) {
                //阻止默认行为（阻止form表单提交，因为一提交就算刷新，异步是不刷新的）
                e.preventDefault();
                //抓取form表单中所有的值
                var formData = $('form').serialize();
                $.ajax({
                    url: '?a=store',
                    type: 'post',
                    //序列化的数据不用使用json格式传输
                    data: formData,
                    //服务器返回的数据类型
                    dataType:'html',
                    success:function(phpData){
                        $('table').append(phpData);
                    }
                })

                //清除表单内容
                document.getElementById('form').reset();

            })

            //异步删除(delegate给未来元素绑定事件)
            $('table').delegate('.remove', 'click', function () {
                //删除哪条的下标
                var key = $(this).attr('key');
                //将来要删除的tr
                var tr = $(this).parents('tr');
                //发送异步
                $.ajax({
                    url : '?a=remove&id=' + key,
                    success:function(){
                        tr.remove();
                    }
                })
            });


            //==============下方高能，选择性观看============


            //异步编辑(delegate给未来元素绑定事件)
            $('table').delegate('.edit', 'click', function () {
                //编辑哪条的下标
                var key = $(this).attr('key');
                var tr = $(this).parents('tr');
                tr.addClass('flag' + key);
                //获得当前点击的昵称和内容
                var nickname = tr.find('.nickname').html();
                var content = tr.find('.content').html();
                //昵称和留言放入到编辑的表单中
                var editForm = $('#editForm');
                editForm.show(500);
                editForm.find('[name=nickname]').val(nickname);
                editForm.find('[name=content]').val(content);
                //把编辑那一条的id放入到隐藏域
                editForm.find('[name=id]').val(key);


            });

            $('#editForm').submit(function(){
                var formData = $(this).serialize();
                $.ajax({
                    url : '?a=edit',
                    type:'post',
                    data:formData,
                    dataType:'json',
                    success:function (phpData) {
                        $('.flag' + phpData.id).find('.nickname').html(phpData.nickname);
                        $('.flag' + phpData.id).find('.content').html(phpData.content);
                    }
                })
                return false;
            })

        })
    </script>
</head>
<body>
<table border="1">
    <tr bgcolor="#dcdcdc">
        <td>留言</td>
        <td>留言时间</td>
        <td>昵称</td>
        <td>操作</td>
    </tr>
    <?php foreach($data['d'] as $k => $d): ?>
    <tr>
        <td class="content"><?php echo $d['content'] ?></td>
        <td><?php echo $d['time'] ?></td>
        <td class="nickname"><?php echo $d['nickname'] ?></td>
        <td>
            <a href="javascript:;" class="edit" key="<?php echo $k; ?>">编辑</a>
            <a href="javascript:;" class="remove" key="<?php echo $k; ?>">删除</a>
        </td>

    </tr>
    <?php endforeach ?>

</table>
<hr>
<form id="editForm" style="display: none">
    昵称：<input type="text" name="nickname" id="">
    <br>
    留言：<textarea name="content" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="hidden" name="id" >
    <br>
    <input type="submit" value="修改留言">
</form>
<hr>
<form id="form">
    昵称：<input type="text" name="nickname" id="">
    <br>
    留言：<textarea name="content" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="发布留言">
</form>


</body>
</html>