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
            //失去焦点
            $('input[name=user]').blur(function () {
                //获得表单填入的内容
                var user = $(this).val();
                //如果用户名不填，不发异步
                if(user == ''){
                    return;
                }
                //发送异步(jq的写法，必须先载入jq)
                $.ajax({
                    //请求的服务器地址
                    url: '?c=member&a=checkUser',
                    //发送的内容
                    data: {u: user},
                    //请求的方式
                    type: 'post',
                    //phpData就是服务器返回的数据
                    success: function (phpData) {
                        //用户名重复
                        if (phpData == 1) {
                            //给id为msgBox的div里面放入一个span
                            $('#userMsg').html("<span style='color: red'>用户名已经存在</span>");
                            $('input[name=user]').addClass('error');
                        } else {
                            $('#userMsg').html("<span style='color: green'>可以注册</span>");
                            $('input[name=user]').removeClass('error');



                        }
                    }

                })
            })





            $('form').submit(function () {
                if($('.error').length > 0){
                    return false;
                }
            })

        })
    </script>
</head>
<body>
<form action="" method="post"
">
用户名：<input type="text" name="user" required="">
<div style="display: inline-block;" id="userMsg">
</div>
<br>
密码：<input type="password" name="password" required="">
<br>
验证码：<input type="text" name="captcha" required="">
<div style="display: inline-block;" id="captchaMsg">
</div>
<br>
<img src="?c=member&a=captcha" onclick="this.src=this.src + '&=' + Math.random()">
<br>
<input type="submit" value="注册">
</form>
</body>
</html>