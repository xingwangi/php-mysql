<?php
/*
function hd(){
	$a = 100;
}
echo $a;
*/


/*
$a = 100;
//{}内部和外部一点儿关系都没有
function hd(){
	$a = 2;
	echo $a . '<br/>';
}
hd();
echo $a;
*/




/*
$a = 100;
//通过global可以让{}里面改变外部的变量（不推荐，作为了解）
function hd(){
	global $a;
	$a = 2;
}
hd();
echo $a;
*/

/*
//调用全局变量（不推荐，作为了解）
$a = 200;
function hd(){
	$GLOBALS['a'] = 2;
}
hd();
echo $a;
*/


/*
$a = 2;
function hd($a){
	$a = 100;
}
hd($a);
echo $a;
*/



/*
//按址传参，
//相当于$a和$b共用一块地址，
//改变$b的时候，$a也会改变
$a = 2;
function hd(&$b){
	$b = 100;
}
hd($a);
echo $a;
*/











