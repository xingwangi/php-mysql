<?php
include '../functions.php';
class Controller{
	public function lists(){
		echo 'Controller里面的lists方法';
	}
}
class Index extends Controller{
	public function lists(){
		echo 'Index里面的lists方法';
	}
}

$i = new Index();
//子类的lists方法覆盖了（重写）了父类的lists方法
$i->lists();










