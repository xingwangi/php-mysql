<?php
include './functions.php';
/*
$str = 'admin.entry.index';
//可以把字符串按照分隔符转为数组
$arr = explode('.',$str);
p($arr);
echo $arr[1];
*/


/*
$arr = ['admin','home','index'];
//把数组按照分隔符连接成一个字符串
echo implode('-',$arr);
*/


/*
$str = 'abcdef';
//echo substr($str,0,3);//abc
//echo substr($str,2);//cdef
//echo substr($str,-2);//ef
//echo substr($str,1,-1);//bcde
*/

/*
$str = 'abc汉字';
//截取带有汉字的字符串
echo mb_substr($str,0,4,'utf-8');
*/

/*
$str = 'upload/1207/1.1.jpeg';
//从字符串右边开始寻找.返回.到最后的字符串
echo strrchr($str,'.');
//从字符串左边开始寻找.返回.到最后的字符串
//echo strchr($str,'.');
*/



