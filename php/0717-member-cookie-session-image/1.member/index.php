<?php
include "./functions.php";
session_start();
/**
 * 自动载入
 * @param $c [类名]
 */
function __autoload($c){
	//如果是控制器HomeController
	if(substr($c,-10)=='Controller'){
		include "./controller/{$c}.php";
	}else{//否则是工具Captcha
		include "./tool/{$c}.php";
	}
}
//控制器
$c = isset($_GET['c']) ? ucfirst($_GET['c']) : 'HomeController';
define('CONTROLLER',$c);
//方法
$a = isset($_GET['a']) ? $_GET['a'] : 'index';
define('ACTION',$a);

//组合类名默认是HomeController
//如果c=member，那么类名就是MemberController
$className = "{$c}Controller";
$obj = new $className;
call_user_func_array([$obj,$a],[]);











