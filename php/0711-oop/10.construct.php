<?php
class Model{
	public function __construct($n) {
		echo $n . '<br/>';
	}

	public function index(){
		echo 'index方法<br/>';
	}

	/**
	 * 对象销毁的时候，自动执行
	 */
	public function __destruct() {
		echo '对象消失<br/>';
	}
}
//实例化给构造方法传递参数
$m = new Model('自动执行');
$m->index();
//unset($m);//手动销毁对象
echo 333 . '<br/>';








