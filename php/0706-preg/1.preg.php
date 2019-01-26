<?php
include '../functions.php';
/*
$str = 'abc';
//定义正则
$preg = '/a/';
//正则匹配，返回1或者是0
$int = preg_match($preg,$str);
var_dump($int);
if(preg_match($preg,$str)){
	echo '匹配成功';
}
*/

/*
$str = '1abc';
//原子
//\d 匹配任意的一个数字
$preg = '/\d/';
var_dump(preg_match($preg,$str));
*/



/*
$str = '123';
$str = '123a';
//原子
//\D 除了数字的任意的一个字符
$preg = '/\D/';
var_dump(preg_match($preg,$str));
*/

/*
$str = '+++---';
//匹配任意一个数字、字母、下划线
$preg = '/\w/';
var_dump(preg_match($preg,$str));
*/

/*
//任意空白字符
$preg = '/\s/';
$str = 'ab
c';
var_dump(preg_match($preg,$str));
*/


/*
$str = 'www.houdunwangcom';
// . 有特殊含义的（匹配除了换行符之外的任意字符），如果想把它当做普通字符来匹配，需要转义
$preg = '/\./';
var_dump(preg_match($preg,$str));
*/


//$str = 'www*houdunwangcom';
//// * 有特殊含义的（重复），如果想把它当做普通字符来匹配，需要转义
//$preg = '/\*/';
//var_dump(preg_match($preg,$str));

/*
//[0-9]和\d 是一样的

//原子表的写法，可以指定范围
$preg = '/[4-9]/';
$str = '123abc';
var_dump(preg_match($preg,$str));
*/

/*
$str = '410004417@163.com';
$preg = '/[@+#]/';
var_dump(preg_match($preg,$str));
*/



/*
//通过正则组合为数组
$str ="1.jpg@2.jpg@3.jpg#4.jpg";
$preg="/[@#]/";
$arr = preg_split($preg,$str);
p($arr);
*/


//把字符串中houdunwang中的houdun变成红色
$str = "后盾官网www.houdunwang.com后盾论坛http://bbs.houdunwang.com我在后盾的网名叫houdun";
//原子组
$preg = "/(houdun)wan(g)/";
//var_dump(preg_match($preg,$str));
$newStr = preg_replace($preg,"<span style='color:red'>\\1</span>wan<span style='color: green'>\\2</span>",$str);
echo $newStr;











