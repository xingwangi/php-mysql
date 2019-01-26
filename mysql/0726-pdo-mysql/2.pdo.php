<?php
include '../functions.php';
$dsn  = 'mysql:host=127.0.0.1;dbname=c83';
$user = 'root';
$pass = 'root';
try {
	//使用PDO连接数据库，如果有异常错误，就会被catch捕捉到
	$pdo = new PDO( $dsn, $user, $pass );
	//设置错误属性，要设置成异常错误，因为需要被catch捕获
	$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	//exec执行没有结果集的操作,update,delete,insert..
	$pdo->exec("SET NAMES UTF8");
	$pdo->exec("INSERT INTO arc (title) VALUES ('明天抽考苏启海')");



} catch ( PDOException $e ) {
	//输出异常错误
	echo "<span style='color: red'>" . $e->getMessage() . "</span>";
	//输出错误代码
	echo "<span style='color: green'>" . $pdo->errorCode() . "</span>";
	exit;
}

