<?php
include "../functions.php";
class Model{
	public $age = 100;
	private $money = 100;

	private function a(){

	}
	public function i(){

	}

	public function store(){

	}


}
//获得类的方法（只有public的方法才能获取到）
//$arr = get_class_methods("Model");
//p($arr);

////获得类的属性（只有public的属性才能获取到）
//$arr = get_class_vars("Model");
//p($arr);


//获得对象的属性（只有public的属性才能获取到）
//$arr = get_object_vars(new Model);
//p($arr);

//method_exists()
//$bool = method_exists(new Model(),'test');
//var_dump($bool);


class Controller{
	public function __construct() {
		echo 'controller run<br/>';
		if(method_exists($this,'__init')){
			$this->__init();
		}
	}
}

class Index extends Controller{
//	public function __construct() {
//		parent::__construct();
//	}

	/**
	 * 自定义构造方法 __init是随便起的名字
	 * 既不覆盖父类的构造方法，也可以自动执行
	 * __init代替了上面构造方法的写法
	 */
	public function __init(){
		echo 'test';
	}
}

$i = new Index;







