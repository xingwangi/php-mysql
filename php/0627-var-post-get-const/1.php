<?php
/*
//弱类型语言，变量可以不用声明类型直接赋值
$a = 1;
$a = 'abcd';
//var_dump可以查看变量的类型
var_dump($a);
*/

/*
//定义变量，必须以字母或者下划线开头，
$a = 1;
$abc = 1;
$a123 = 1;
$a_123 = 1;
$_123 = 1;
//以下定义变量是错误的
$123 = 2;
*/


//echo 1,2,3;
//打印类型
//var_dump('abc');


/*
//变量赋值
//(1)传值赋值
//$a = 1;
//$b = $a;
//$b = 2;
//echo $a;

//(2)传址赋值
$a = 1;
//把$a的地址传给$b(相当于给$a创建了一个快捷方式$b)
$b = &$a;
$b = 2;
echo $a;
*/


/*
//可变变量
$a = 'hello';
//$hello = 'world';
$$a = 'world';
//以下三个的值都是world
//echo $$a;
//echo $hello;
echo ${$a};
*/





















