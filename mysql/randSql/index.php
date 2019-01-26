<?php
$data     = include "./data.php";
$jsonData = json_encode( $data );
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.min.css"/>
    <script src="jquery-1.8.2.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="animate.css"/>
    <style type="text/css">
        .box_top {
            text-align: center;
            margin-bottom: -10px;
        }

        .box_top p {
            margin-top: 20px;
            margin-bottom: -20px;
        }

        .box_bottom {
            text-align: center;
        }

        .box_bottom p {
            font-size: 70px;
            color: #337ab7;
        }

        .box_write textarea {
            padding: 25px;
            font-size: 20px;
        }
    </style>
    <script type="text/javascript">
        $(function () {
            //随机mysql问题系统
            var randSql = function () {
                //randSql的this对象赋值给This
                var This = this;
                //开始按钮
                This.button = $('.rand_a');
                //获得php数据库数据
                This.data = <?php echo $jsonData ?>;
                //显示问题区域
                This.questionBox = $('.question');
                //书写sql区域
                This.sqlBox = $('textarea');
                //音频元素
                This.audio = $('audio');
                //倒计时显示元素
                This.timeBox = $('.time');
                //所有的radio
                This.radio = $('input[name=runtime]');
                //选时间的radio元素
                This.checkedRadio = $('input[name=runtime]:checked');


                //运行
                This.run = function () {
                    This.init();
                    This.button.click(function () {
                        //禁止状态，关闭click事件
                        $(this).attr('disabled', true).off('click');
                        //禁用radio，开始之后就不能选择时间了
                        $('[type=radio]').attr('disabled',true);
                        //随机问题开始
                        This.randQuestion();
                    })
                    This.radio.change(function () {
                        var num = $(this).val();
                        This.timeBox.attr('num',num);
                        This.timeBox.html(num);
                    })
                }

                //初始化
                This.init = function () {
                    var num = This.checkedRadio.val();
                    This.timeBox.attr('num',num);

                    This.timeBox.html(num);
                }

                /**
                 * [randQuestion 随机问题]
                 * @return {[type]} [description]
                 */
                This.randQuestion = function () {

                    //如果数据库为空
                    if (This.data.length <= 0) {
                        This.questionBox.html('没问题了');
                        return;
                    }
                    //点击“开始”之后随机显示问题
                    var qTimer = setInterval(function () {
                        //随机下标
                        var n = parseInt(Math.random() * This.data.length);
                        document.title = n;
                        //随机插入内容,并且把随机下标n压入到key属性中
                        This.questionBox.html(This.data[n]).attr('key', n);
                    }, 50);
                    setTimeout(function () {
                        //清除掉随机显示问题
                        clearInterval(qTimer);
                        //开始倒计时
                        This.timeBack();
                        //获得现在随机到哪个问题
                        var key = This.questionBox.attr('key');
                        //调取异步删除函数，删除已经显示的问题
                        This.ajaxDel(key);
                        //让textarea不是禁用状态，并且内容初始化为空
                        This.sqlBox.attr('disabled', false).val('');
                    }, 1000);
                }
                //异步删除
                This.ajaxDel = function (id) {
                    if (id <= -1) return;
                    $.ajax({
                        type: "post",
                        url: "./del.php",
                        data: {id: id}
                    });
                }
                //倒计时
                This.timeBack = function () {
                    var timeObj = This.timeBox;
                    var timer = setInterval(function () {
                        //获得num属性，里面只为保存数字，为了便于减减操作
                        var t = timeObj.attr('num');
                        t--;
                        timeObj.attr('num', t);
                        switch (true) {
                            //120以上，显示正常蓝色
                            case t >= 120:
                                timeObj.html(t);
                                break;
                            //60以上显示
                            case t >= 60:
                                timeObj.html('<span style="color:#EC971F">' + t + '</span>');
                                break;
                            //小于60大等于0
                            case t >= 0:
                                timeObj.html('<span style="color:red" class="animated fadeIn">' + t + '</span>');
                                break;
                            //为0的时候
                            case t <= 0:
                                //清除倒计时定时器
                                clearInterval(timer);
                                //音乐开始播放
                                This.audio.attr('autoplay', true);
                                //不能让用户输入代码，锁定textarea
                                This.sqlBox.attr('disabled', true);
                                break;

                        }
                    }, 1000);
                }
            }

            //开始运行
            var obj = new randSql();
            obj.run();

        })
    </script>
</head>

<body>
<audio src="1.mp3"></audio>
<div class="jumbotron box_top">
    <h1 class="question">挑战玩法？你敢试吗？</h1>
    <p>
        <a class="btn btn-danger btn-lg rand_a" href="#" role="button">点我开始挑战吧！</a>
    </p>
</div>
<div id="" class="box_bottom">
    <p class="time" num=0>0</p>
    <div style="margin-bottom: 10px;">
        <label class="radio-inline">
            <input type="radio" name="runtime" id="inlineRadio1" value="30" checked=""> 30
        </label>
        <label class="radio-inline">
            <input type="radio" name="runtime" id="inlineRadio2" value="60"> 60
        </label>
        <label class="radio-inline">
            <input type="radio" name="runtime" id="inlineRadio3" value="90"> 90
        </label>
        <label class="radio-inline">
            <input type="radio" name="runtime" id="inlineRadio3" value="120"> 120
        </label>
    </div>
</div>
<div id="" class="box_write">
    <textarea class="form-control" rows="10"></textarea>
</div>
</body>

</html>