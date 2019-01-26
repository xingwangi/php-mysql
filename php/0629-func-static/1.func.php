<?php
/*
//打印的P函数，为了以后方便打印
function p($var){
	echo '<pre>';
	print_r($var);
	echo '</pre>';
}
$data = ['a','b','c'];
p($data);
*/

function p($var){
	echo '<pre style="padding: 10px;background: #cccccc;">';
	print_r($var);
	echo '</pre>';
}

/*
function g(){
	//函数可以有返回值
	return 'jpg';
}
$type = g();
//echo $type;
//p($type);
*/


/*
//传递多个参数
function hd($num1,$num2){
	return $num1 + $num2;
}

echo hd(100,200);
*/


/*
//函数名定义：是以字母或者下划线开头
//调用的时候，函数名是不区分大小写的
function hdw(){
	echo 'hdw';
}
HDW();
hdw();
*/


/*
//函数不能重复定义(如果上面已经有了一个P函数，那么以下代码是错误的)
function p(){
	echo 'yes';
}
p();
*/

/*
//参数可以有默认值
function hd($num1=1,$num2=10){
	return $num1 + $num2;
}
//echo hd();
//echo hd(2);
//echo hd(100,100);
*/

/*
//第一个参数必须传递，因为它没有默认值
function hd($num1,$num2=10){
	return $num1 + $num2;
}
echo hd(10);
echo hd(10,100);
*/


/*
//有默认值的参数需要放在没有默认值参数的后面
//以下$num1的默认值是毫无意义的，因为两个参数必须都得传递
function hd($num1=10,$num2){
	return $num1 + $num2;
}
echo hd(100,200);
*/


/*
function hd(){
	//返回值可以是一个表达式
	return 3>2;
}
var_dump(hd());
*/

/*
//如果函数中没有使用return返回值时则函数返回值为null
function hd(){
	$re = 100 + 200;
}
var_dump(hd());
*/



/*
function a1(){
	return 100;
}
function hdsum(){
	//也可以返回一个函数
	return a1();
}
echo hdsum();
*/


/*
//判断函数是否存在，如果存在返回true
$bool = function_exists('p');
var_dump($bool);
p(1);
*/



/*
//如果p函数不存在的时候(可以解决函数名冲突的问题)
if(!function_exists('p')){
	function p($var){
		echo $var;
	}
}
p(123);
*/

































