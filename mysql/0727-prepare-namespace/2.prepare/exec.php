<?php
//预准备
include '../../functions.php';
//链接数据库
$dsn = "mysql:host=127.0.0.1;dbname=c83";
$pdo = new PDO($dsn,'root','root');
//设置字符集
$pdo->exec("SET NAMES UTF8");

//返回预准备对象
$sth = $pdo->prepare("INSERT INTO arc (title,click) VALUES (?,?)");
//绑定参数

$data = [
	['title'=>'文章1','click'=>100],
	['title'=>'文章2','click'=>200],
	['title'=>'文章3','click'=>300],
];
foreach ( $data as $v ) {
	$sth->bindParam(1,$v['title'],PDO::PARAM_STR);
	$sth->bindParam(2,$v['click'],PDO::PARAM_INT);
	//执行
	$sth->execute();
}







