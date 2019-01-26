<?php
class Model{
	/**
	 * 执行未定义方法的时候会自动调用此方法
	 * @param $name [方法名称]
	 * @param $arguments [方法传入的参数]
	 */
	public function __call( $name, $arguments ) {
		print_r($name);
		echo '<hr/>';
		print_r($arguments);
	}

	/**
	 * 静态执行未定义方法的时候会自动调用此方法
	 * @param $name [方法名称]
	 * @param $arguments [方法传入的参数]
	 */
	public static function __callStatic( $name, $arguments ) {
		print_r($name);
		echo '<hr/>';
		print_r($arguments);
	}
}

/*
$m = new Model();
$m->store('houdunwang');
*/

//Model::get();






