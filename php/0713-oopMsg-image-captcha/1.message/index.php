<?php
//单入口，所有的操作都只访问一个文件index.php


include '../../functions.php';
function __autoload($c){
	include "./{$c}.php";
}

$obj = new HomeController();
//方法
$a = isset($_GET['a']) ? $_GET['a'] : 'index';
//调用$obj对象中的$a方法，传递参数为空
call_user_func_array([$obj,$a],[]);