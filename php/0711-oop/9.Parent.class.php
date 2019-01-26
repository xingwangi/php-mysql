<?php
class Father{
	public function __construct() {
		echo 'father<br/>';
	}
}

class Son extends Father{
	public function __construct() {
		//调用父类的构造方法
		parent::__construct();
		echo 'son<br/>';
	}


}

$s = new Son();