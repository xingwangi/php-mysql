<?php
include "../functions.php";
//创建递归函数完成多维数组key的大小写转换
$arr = [
	'a' => 'A',
	'b' => 'B',
	'c' => [
		'd' => 'D'
	]
];

/*
$arr = [
	'A' => 'A',
	'B' => 'B',
	'C' => [
		'D' => 'D'
	]
];
*/

function changeCase( $a, $case = CASE_UPPER ) {
	$a = array_change_key_case( $a, $case );
	foreach ( $a as $k => $v ) {
		if ( is_array( $v ) ) {
			//需要递归了,处理完毕之后要覆盖原来的值
			$a[$k] = changeCase( $v, $case );
		}
	}

	return $a;
}

//把$arr通过递归把所有的键名都转为大写
$newArr = changeCase( $arr );
p( $newArr );