<?php
include "../functions.php";

//判断文件是否可写
//$bool = is_writable('../functions.php');
//var_dump($bool);

//判断文件是否可读
//$bool = is_readable('../functions.php');
//var_dump($bool);


/*
//获得文件的字节数 单位是 B
$size = filesize('./test.php');
p($size);
*/

/*
//获取文件内容或者获取网络内容
//$content = file_get_contents('./test.php');
$content = file_get_contents('http://www.baidu.com');
echo $content;
*/


//把内容放入到文件中，如果文件不存在，那么会自动创建一个
//file_put_contents('./t.php','test');


/*
date_default_timezone_set('PRC');
//获取文件的修改时间
$mtime = filemtime('./t.php');
echo date('y-m-d H:i:s',$mtime);
*/



