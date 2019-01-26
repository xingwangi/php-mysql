<?php
use tool\Model;
use tool\Memcache as Mem;


function p($var){
	echo '<pre>';
	print_r($var);
	echo '</pre>';
}
function __autoload($className){
	$className = str_replace('\\','/',$className);
	require $className . '.php';
}
//缓存
$mem = new Mem();
$cateData = $mem->get('category');
//如果不能获取缓存
if(!$cateData){
	//链接查询数据库
	echo 'run mysql';
	$model = new Model();
	$cateData = $model->q("SELECT * FROM category");
	//设置缓存
	$mem->set('category',$cateData,30);
}


include './tpl/index.php';
