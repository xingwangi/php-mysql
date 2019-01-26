<?php

class Model{
	//静态调用构造方法不执行
	public function __construct() {
		echo '自动执行<br/>';
	}

	//静态方法
	public static function index(){
		echo '显示首页<br/>';
		self::store();
	}

	public static function store(){
		echo '存储<br/>';
		//静态方法中不能使用$this，因为$this代表当前对象，现在根本没有对象
		//$this->destroy();
	}


	public function destroy(){
		echo '销毁';
	}

}
//静态调用
Model::index();



/*
class Model{
	protected static function store(){
		echo '父类的存储';
	}
}

class HdModel extends Model{
	public static function store(){
		echo '子类的存储';
	}

	public function index(){
		self::store();
	}
}
(new HdModel())->index();
*/


/*
class Model{
	protected static function store(){
		echo '父类的存储';
	}
}

class HdModel extends Model{
	public static function store(){
		echo '子类的存储';
	}

	public function index(){
		//parent:: 直接调用父类的方法
		parent::store();
	}
}
(new HdModel())->index();
*/




//$this 当前对象调用（调用普通方法，它不能在静态方法中使用）
//self:: 当前类调用（调用是静态方法）
//parent:: 父类调用（有可能是静态方法，有可能是普通方法）







