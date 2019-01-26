<?php
/**
 * 使用"未找到"的类会自动触发此函数，而且会把类名传入
 * @param $className
 */
function __autoload($className){
	include "./{$className}.class.php";
}

$model = new Model();
$model->index();

$base = new Base();
$base->index();

