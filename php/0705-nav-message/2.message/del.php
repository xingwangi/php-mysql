<?php
//处理删除功能
/*
$a = ['a','b','c'];
unset($a[1]);
p($a);//数组中就会剩下a和c了


*/



include '../../functions.php';

//一、载入数据库
$data = include './data.php';
//二、删除

//三、保存到数据库文件中
file_put_contents('./data.php',"<?php return " . var_export($data,true) . ";");










