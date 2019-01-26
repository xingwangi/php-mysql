<?php
//载入函数文件
include '../../functions.php';
//载入数据库文件，并且把数据中的数据返回给$data
$data = include './data.php';
if(IS_POST){
	array_push($data,$_POST);
	//file_put_contents
	//var_export
}
//载入留言板模板
include "./add.php";