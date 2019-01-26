<?php

//class Model{
//	/**
//	 * 给对象设置未定义的属性会自动触发此方法
//	 * @param $name [未定义属性的名称]
//	 * @param $value [未定义属性的值]
//	 */
//	public function __set( $name, $value ) {
////		echo $name;
//		echo $value;
//	}
//}
//$m = new Model();
//$m->link = '链接';



//class Model{
//	/**
//	 *  获取对象未定义的属性会自动触发此方法
//	 * @param $name [未定义属性的名称]
//	 */
//	public function __get( $name ) {
//		echo $name;
//	}
//}
//
//$m = new Model();
//echo $m->sex;




//class Model{
//	private $sex = '男';
//	private $age = 30;
//
//	/**
//	 * 在类的外部 删除 未定义或者不能访问的属性的时候会自动触发此方法
//	 * @param $name
//	 */
//	public function __unset( $name ) {
//		unset($this->$name);
//	}
//
//	public function check($name){
//		$bool = isset($this->$name);
//		var_dump($bool);
//	}
//
//}
//$m = new Model();
//unset($m->age);
//$m->check('age');




//class Model{
//	protected $age = '30';
//
//	/**
//	 * 在类的外部 检测 未定义或者不能访问属性会自动触发
//	 * @param $name
//	 */
//	public function __isset( $name ) {
//		return isset($this->$name);
//	}
//}
//$m = new Model();
//$bool = isset($m->age);
//var_dump($bool);















