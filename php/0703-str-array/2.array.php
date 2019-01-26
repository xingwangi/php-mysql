<?php
include '../functions.php';
/*
//数组写法1：php旧版本的写法
$type = array('jpg','png','gif');
p($type);
//数组写法2：php较新版本的写法（推荐使用）
$type = ['jpg','png','gif'];
p($type);
*/


//索引数组（下标是数字）
//$arr = ['a','b','c'];
//$arr = [0=>'a',1=>'b',3=>'c'];
//$arr = ['a','b',3=>'c'];
//echo $arr[3];
//p($arr);


//关联数组（下标是字符串）
//$arr = ['a'=>'后盾','b'=>'php'];
//echo $arr['b'];
//$_POST和$_GET和$_REQUEST都是关联数组


/*
//多维数组（很重要）
$arr = [
	'a',
	'b',
	'c',
	['d'],
	['e'],
	['f'=>['F']]
];
//p($arr);
//获取最里层的值的时候，数组中有几个索引值就被称为几维数组
echo $arr[5]['f'][0];
*/

/*
//直接赋值
$var = ['a','b'];
p($var);
//通过下标赋值
$var[0] = 'a';
$var[1] = 'b';
p($var);
*/

/*
//ccc的下标是7
$d=["aaa",6=>"bbb","ccc"];
p($d);
*/


//[
//	'键名'=>'键值'
//]


//把数组的键名转为大写或者小写(只能转一层)
$arr = [
	'a'=>'A',
	'b'=>['c'=>'C']
];
$newArr = array_change_key_case($arr,CASE_UPPER);
$newArr['B'] = array_change_key_case($newArr['B'],CASE_UPPER);
p($newArr);














