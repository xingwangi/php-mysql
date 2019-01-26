<?php
include "../functions.php";

//$arr = ['a'=>'A','b'=>'B'];
//获得当前指针对应的键名
//echo key($arr);
//获得当前指针对应的键值
//echo current($arr);

//把指针移动到下一位置
//next($arr);

//获得当前指针对应的键名
//echo key($arr);
//echo current($arr);


/*
$arr = ['a'=>'A','b'=>'B','c'=>'C'];
//while () next() current() key(); 写成下面的效果
//a=>A
//b=>B
//c=>C
while (key($arr) != NULL){
	echo key($arr) . '=>' . current($arr) . '<br/>';
	next($arr);
}
*/


/*
$arr = ['a','b',['c','d']];
//获取数组的单元个数
echo count($arr);
*/

/*
$type = 'zip';
$arr = ['png','jpg','gif'];
//判断一个单元是否存在于数组中，如果存在返回true,反之false
var_dump(in_array($type,$arr));
*/

/*
$arr = ['a','b'];
//搜索某个键名是否存在于数组之中，如果存在返回true
$bool = array_key_exists(1,$arr);
var_dump($bool);
*/

/*
//作为了解
$arr = ['KTV','游戏厅','冰毒','海洛因'];
//过滤数组
$newArr = array_filter($arr,'f');
p($newArr);
function f($v){
	$words = ['冰毒','海洛因'];
	if(in_array($v,$words)){
		return false;
	}else{
		return true;
	}
}
*/


/*
//会自动过滤为假的单元
$arr = ['KTV','游戏厅','',0,NULL,false];
$newArr = array_filter($arr);
p($newArr);
*/

/*
//把数组中每一个单元都强制转整
$arr = ['1',2,'1abc','abc123'];
$newArr = array_map('func',$arr);
p($newArr);
function func($v){
	return intval($v);
}
*/




















