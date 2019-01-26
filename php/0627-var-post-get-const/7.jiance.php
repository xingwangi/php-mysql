<?php 
header('Content-type:text/html;charset=utf-8');
/*
//判断$a变量是否存在
if(isset($a)){
	echo $a;
}else{
	echo '$a不存在';
}
*/

/*
$a = 1;
$bool = isset($a);
var_dump($bool);
*/


/*
$a = 1;
//删除变量a
unset($a);
//会报错，因为删掉了
echo $a;
*/


/*
define('A','后盾网');
//检测常量A是否存在？
$bool = defined('A');
var_dump($bool);
*/



//常量和变量的区别
//1.变量可以重复定义和取消定义，常量都不可以！
//2.常量可以不用理会变量范围，在任何地方定义和使用，但是变量会有局部变量这样的限制
//3.变量用isset检测，常量defined检测
//4.变量的写法$a,常量的写法A，没有$符号
//5.变量定义$a = 1,常量定义define('A',1)
//6.变量可以赋值很多类型，常量只能是标量（整数，浮点数，字符串，布尔值）


















 ?>