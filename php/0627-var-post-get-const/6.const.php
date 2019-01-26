<?php 
/*
function p(){
	//$a是局部变量，只在{}之内有效
	$a = 100;
}
p();
echo $a;
*/


/*
//定义常量，常量规范是大写
// define('A',300);
// echo A;
function p(){
	//常量可以在任何地方定义和使用，不用理会变量范围
	define('A',100);
}
p();
echo A;
*/

/*
//常量不能被重复定义，以下代码是错误的
define('A',100);
define('A',200);
echo A;
*/

/*
define('HDPHP','www.hdphp.com');
define('VER',1);
define('S',1.1);
define('BUS',false);
//不能定义为数组，还有对象
define('ARR',[1,2]);
var_dump(ARR);
*/


//php版本必须切换到5.6以上，不要切7.0
// echo PHP_VERSION;
// echo PHP_OS;
// var_dump(TRUE);
























 ?>