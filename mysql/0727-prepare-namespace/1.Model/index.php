<?php
include '../../functions.php';
/**
 * 自动载入函数
 * @param $className
 */
function __autoload($className){
	$dir = (substr($className,-10) == 'Controller') ? 'controller' : 'tool';
	include "./{$dir}/{$className}.php";
}
//控制器
$c = isset($_GET['c']) ? $_GET['c'] : 'Entry';
define('CONTROLLER',strtolower($c));
//方法
$a = isset($_GET['a']) ? $_GET['a'] : 'index';
define('ACTION',strtolower($a));


$className = $c . 'Controller';
call_user_func_array([new $className,$a],[]);