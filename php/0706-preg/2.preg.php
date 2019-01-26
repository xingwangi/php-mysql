<?php
include '../functions.php';
/*
//选择修饰符
$str = "http://www.baidu.com与新浪网http://www.sina.com";
$preg = '/\.(baidu|sina)\./';
echo preg_replace($preg,'.houdunwang.' , $str);
*/



//$str = 'abc';
////数字重复0次或者更多次（有数字或者没有数字）
//$preg = '/\d*/';
//var_dump(preg_match($preg,$str));


/*
//至少有一次数字
$preg = '/\d+/';
$str = 'abc';
var_dump(preg_match($preg,$str));
*/


/*
//最多只能有一次，或者没有
//(http://) 最多只能有一个，或者干脆没有
$url = 'http://www.baidu.com';
$url = 'www.baidu.com';
$preg = '/(http:\/\/)?/';
var_dump(preg_match($preg,$url));
*/

/*
$str = 'abc1ab231222';
//重复2这个数字3次
$preg = '/2{3}/';
var_dump(preg_match($preg,$str));
*/

/*
$str = 'abc1ab23';
//重复数字3次
$preg = '/\d{3}/';
var_dump(preg_match($preg,$str));
*/



//$str = 'abc1ab2333';
////至少重复数字3次
//$preg = '/\d{3,}/';
//var_dump(preg_match($preg,$str));


/*
$str = '1234';
//必须以数字开始，重复3次，重复3次之后必须以数字结尾
$preg = '/^\d{3}$/';
var_dump(preg_match($preg,$str));
*/


/*
$str = '123456';
//必须以数字开始，重复3-5次，重复3-5次之后必须以数字结尾
$preg = '/^\d{3,5}$/';
var_dump(preg_match($preg,$str));
*/


/*
//禁止贪婪模式，在重复符号的后面加上?就可以禁止贪婪
$str = <<<str
<span>图片</span><div>后盾网</div><div>百度</div><div>新浪</div>
str;
$preg = '/<div>(.+?)<\/div>/';
//var_dump(preg_match($preg,$str));
//匹配的结果数组会自动放入$arr
preg_match_all($preg,$str,$arr);
//查看结果，要查看源码
p($arr);
foreach ( $arr[1] as $v ) {
	echo $v . '<hr/>';
}
*/



/*
$str = <<<str
<span>图片</span><div>后盾网</div><DIV>百度</DIV><div>
新浪</div>
str;
//i 不区分大小写
//s 将多行视为一行
$preg = '/<div>(.+?)<\/div>/is';
//var_dump(preg_match($preg,$str));
//匹配的结果数组会自动放入$arr
preg_match_all($preg,$str,$arr);
p($arr);
*/


/*
//通过回调函数进行字符串替换
$info = 'admin:admin888';
$info = 'user:admin888';
$info = 'guest:admin123';
$preg = '/^([a-z]{3,6}):(\w{6,16})$/i';
//var_dump(preg_match($preg,$info));
echo preg_replace_callback($preg,'func',$info);
function func($v){
	p($v);
	return $v[1] . ':' . md5($v[2]);
}
*/














