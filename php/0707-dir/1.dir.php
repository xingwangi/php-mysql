<?php
include '../functions.php';
//获取分区总大小
//$total = disk_total_space('f:');
//echo $total / pow(1024,3);

//获得分区的剩余空间
//返回值是B（字节）的级别
//$free = disk_free_space('.');
////转换G的级别
//$size = $free / pow(1024,3);
//echo round($size,2) . 'G';


/*
//$size = disk_free_space( '.' );
$size = filesize('../functions.php');
switch ( true ) {
	case $size > pow( 1024, 3 ):
		$unit = [ 3, 'G' ];
		break;
	case $size > pow( 1024, 2 ):
		$unit = [ 2, 'M' ];
		break;
	case $size > pow( 1024, 1 ):
		$unit = [ 1, 'K' ];
		break;
	default:
		$unit = [ 0, 'B' ];
}

echo round($size / pow(1024,$unit[0]),2) . $unit[1];
*/


/*
$path = './www/0706/test.php';
$path = './www/0706';
//获得路径的最后一部分有可能是文件名，有可能是目录名
echo basename($path);
*/


/*
//获取除了最后一部分的路径
$path = './www/776/t.php';
$path = './www/776';
$path = './www';
echo dirname($path);
*/

/*
//判断文件是否存在？
$bool = file_exists('../functions.php');
var_dump($bool);
*/

/*
//是否是一个目录
$bool = is_dir('../0707-dir');
var_dump($bool);
*/


/*
// 左 || 右   左边不成立的时候，执行右边的代码
$dir = './a/b/c';
//mkdir('目录','权限：0777是最高权限','递归创建')
is_dir($dir) || mkdir($dir,0777,true);
*/

//删除目录，目录必须为空
//rmdir('./a');

//创建文件
//file_put_contents('./test.php','');

//改名
//rename('./a','./b');
//文件改名
//rename('./test.php','./t.php');

//移动文件
//rename('./t.php','./b/t.php');
//移动目录
//rename('./b','./test/b');

//复制文件
//copy('./test/b/t.php','./test.php');


/*
//获取目录中 所有 文件或者目录 的信息
$info = glob('./*');
//$info = glob('./*.php');
//$info = glob('./*.*p');
//$info = glob('./test.php');
p($info);
*/

/*
//mkdir_d( 'a/b' );  相当于 mkdir('a/b',0777,true);
mkdir_d( 'a/b' );
function mkdir_d( $path ) {
	$info = explode( '/', $path );
	$tmp  = '';
	foreach ( $info as $a ) {
		$tmp = $tmp . $a . '/';
		is_dir( $tmp ) || mkdir( $tmp );
	}
}
*/


//删除文件
//if(is_file('./1.asp')){
//	unlink('./1.asp');
//}

// 左 && 右  如果左边成立执行右边
//is_file('./1.asp') && unlink('./1.asp');


//function del($dirName) {
//	//如果不是一个目录return false
//	if (!is_dir($dirName)){
//		return false;
//	}
//	//扫描传入目录下的所有信息
//	foreach (glob($dirName . "/*") as $v) {
//		//如果是目录则递归，否则就是文件则删除
//		is_dir($v) ? del($v) : unlink($v);
//	}
//	//然后再把目录一层一层的删掉
//	return rmdir($dirName);
//}
//del('./test');



























