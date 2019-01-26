<?php
namespace A;
function var_dump($var){
	echo $var;
}
//函数调用，如果当前空间没有此函数，会自动去全局空间寻找
var_dump(333);
//\ 调用全局空间的函数
\var_dump(333);