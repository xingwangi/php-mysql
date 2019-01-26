<?php
header('Content-type:text/html;charset=utf-8');
include './functions.php';
/*
$str = 'a';
$str = 'aaaa';
//获得baidu网站的字符串并且输出，所以你就可以看到百度页面了
echo file_get_contents('http://www.baidu.com');
*/


//单引号(不能解析变量)
//$hd = '后盾网';
//$str = 'houdunwang$hd';
//echo $str;

//双引号(可以解析变量)
//$hd = '后盾网';
//$str = "houdunwang{$hd}";
//$str = "{$hd}houdunwang";

//转义
//$str = "houdun\"wang";
//双引号中包裹单引号不需要转义的
//$str = "houdun'wang";
//$str = "\$arc是一个变量";
//$str = "\\\$arc是一个变量";

//$hd = '后盾网';
////\可以转义{，需要注意
//$str = "\{$hd}是一个培训机构";
//echo $str;



//\r\n是换行
//\t 制表符（按一下键盘的Tab）
//$str = "\thoudun\r\nwang";
//必须使用p函数才能看到效果，因为\r\n是源代码换行，需要原样输出才能看到效果
//p($str);




//定界符(可以解析变量)
//$hd = '后盾网';
//$str = <<<str
//{$hd}houdunwang
//str;
//echo $str;


//输出，一般使用echo
//print(1);
//print 1;






