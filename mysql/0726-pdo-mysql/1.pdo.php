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
	//执行sql操作
    //query 执行 有结果集的操作 select,show,...
	$result = $pdo->query( "SELECT * FROM arc" );
	//获得数据，而且是关联数组
	$data = $result->fetchAll( PDO::FETCH_ASSOC );
	p( $data );

} catch ( PDOException $e ) {
	//输出异常错误
	echo "<span style='color: red'>" . $e->getMessage() . "</span>";
	exit;
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
</head>
<body>
<table border="1">
    <tr>
        <td>ID</td>
        <td>标题</td>
    </tr>
	<?php foreach ( $data as $v ): ?>
        <tr>
            <td><?php echo $v['aid'] ?></td>
            <td><?php echo $v['title'] ?></td>
        </tr>
	<?php endforeach ?>
</table>
</body>
</html>
