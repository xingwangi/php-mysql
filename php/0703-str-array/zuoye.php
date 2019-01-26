<?php
include "../functions.php";
/*
$arr = ['a'=>'A','b'=>'B','c'=>'C'];
foreach ($arr as $k => $v){
//	p($k);
//	p($v);
}
*/









//创建递归函数完成多维数组key的大小写转换
$arr = [
	'a'=>'A',
	'b'=>'B',
	'c'=>[
		'd'=>[
			'e'=>'E'
		]
	]
];

function changeCase($a){
	foreach ( $a as $k => $v ) {
		if(is_array($v)){
			//需要递归了

		}
	}
}
//把$arr通过递归把所有的键名都转为大写
$newArr = changeCase($arr);
//p($newArr);
