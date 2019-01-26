<?php
//预准备
include '../../functions.php';
//链接数据库
$dsn = "mysql:host=127.0.0.1;dbname=c83";
$pdo = new PDO($dsn,'root','root');
//设置字符集
$pdo->exec("SET NAMES UTF8");
//使用预准备查询数据
//返回预准备对象
$sth = $pdo->prepare("SELECT * FROM user WHERE uid=?");
$uid = isset($_GET['uid']) ? $_GET['uid'] : 1;
//绑定参数
$sth->bindParam(1,$uid,PDO::PARAM_INT);
//在解析sql和绑定参数之后，最后一步就是执行，可以避免sql注入的问题
$sth->execute();
//获得数据
$data = $sth->fetchAll(PDO::FETCH_ASSOC);
p($data);

