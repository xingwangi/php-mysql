<?php
/*
$str = ' abc ';
//默认去除左右空格
$str = trim($str);
var_dump($str);
*/

/*
$str = '***abc******';
//去除左右两侧的*
$str = trim($str,'*');
var_dump($str);
*/


/*
$str = '***abc******';
//去除左侧*
//echo ltrim($str,'*');
//去除右侧*
echo rtrim($str,'*');
*/

/*
//$str = ' abc';
$str = 'abc汉字';
//获取字符串长度，一个汉字在utf-8占3个字节
echo strlen($str);
*/


/*
//扩展函数（本来没有，后来装上的）
$str = 'abc汉字';
//mb_strlen的用法和 strlen类似，只不过它有第二个可选参数用于指定字符编码，可获取中文字符长度。
echo mb_strlen($str,'utf-8');
*/

//将字符串转为小写
//echo strtolower('ABC');
//将字符串转为大写
//echo strtoupper('abc');

/*
$word = 'i am a good boy';
//将字符串的首字母转为大写
echo ucfirst($word);
*/

/*
$word = 'i am a good boy';
//将字符串中每个单词的首字母转为大写
echo ucwords($word);
*/

//MD5加密
$md5 = md5('admin');
echo $md5;
//获得加密之后的字符串的长度，是32位
//echo strlen($md5);


//------------------------------
//用户名       |       密码（一定要加密）
//admin       |        21232f297a57a5a743894a0e4a801fc3
//guest       |        21232f297a57a5a743894a0e4a801fc3
//-----------------------------


















